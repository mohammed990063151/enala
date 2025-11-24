<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
// namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagservice;
use Illuminate\Support\Facades\Storage;
use App\Models\ServiceImage;
use App\Models\ServiceFeature;
use App\Models\SeoSetting;

class PagserviceController extends Controller
{
    public function index()
    {
         $pageKey = 'services';
           $seo = SeoSetting::firstOrCreate(['page' => $pageKey]);
        $services = Pagservice::orderBy('sort_order')->get();
        return view('admin.pagservices.index', compact('services','seo'));
    }

    public function create()
    {
        return view('admin.pagservices.create');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'icon' => 'nullable|string|max:255',
    //         'description' => 'nullable|string',
    //         'short_description' => 'nullable|string',
    //         'sort_order' => 'integer',
    //         'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
    //         'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',

    //     ]);

    //     // ✅ إنشاء slug تلقائي من العنوان
    //     $data['slug'] = Str::slug($request->title);

    //     // ✅ إنشاء السجل في الجدول
    //     $service = \App\Models\Pagservice::create($data);

    //     // ✅ حفظ الصور المتعددة
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $file) {
    //             $path = $file->store('dashboard_files/img/pagservices', 'public_uploads');
    //             $service->images()->create(['image' => $path]);
    //         }
    //     }

    //      if ($request->hasFile('image')) {
    //         foreach ($request->file('image') as $file) {
    //             $path = $file->store('dashboard_files/img/pagservices', 'public_uploads');
    //             $service->images()->create(['image' => $path]);
    //         }
    //     }

    //     // ✅ حفظ المميزات (features)
    //     if ($request->has('features')) {
    //         foreach ($request->features as $feature) {
    //             if (!empty($feature['title'])) {
    //                 $service->features()->create([
    //                     'title'       => $feature['title'],
    //                     'icon'        => $feature['icon'] ?? null,
    //                     'description' => $feature['description'] ?? null,
    //                 ]);
    //             }
    //         }
    //     }


    //     return redirect()->route('dashboard.Pag_services.index')
    //         ->with('success', '✅ تم إضافة الخدمة والصور بنجاح');
    // }


public function store(Request $request)
{
    $data = $request->validate([
        'title'             => 'required|string|max:255',
        'title_en'             => 'required|string|max:255',
        'icon'              => 'nullable|string|max:255',
        'description'       => 'nullable|string',
        'description_en'       => 'nullable|string',
        'short_description' => 'nullable|string',
        'short_description_en' => 'nullable|string',
        'sort_order'        => 'nullable|integer',
        'images.*'          => 'nullable|image|mimes:jpg,jpeg,png,webp',
        'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    // ✅ إنشاء slug تلقائي من العنوان
    $data['slug'] = Str::slug($request->title);

    // ✅ رفع الصورة الأساسية وتخزينها في نفس الجدول
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $path = $file->store('dashboard_files/img/pagservices', 'public_uploads');
        $data['image'] = $path; // حفظ المسار داخل الجدول الرئيسي
    }

    // ✅ إنشاء السجل في جدول pagservices
    $service = Pagservice::create($data);

    // ✅ حفظ الصور الإضافية (تعدد الصور)
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $path = $file->store('dashboard_files/img/pagservices', 'public_uploads');
            $service->images()->create(['image' => $path]);
        }
    }

    // ✅ حفظ المميزات (features)
    if ($request->has('features')) {
        foreach ($request->features as $feature) {
            if (!empty($feature['title'])) {
                $service->features()->create([
                    'title'       => $feature['title'],
                    'title_en'       => $feature['title_en'],
                    'icon'        => $feature['icon'] ?? null,
                    'description' => $feature['description'] ?? null,
                     'description_en' => $feature['description_en'] ?? null,
                ]);
            }
        }
    }

    return redirect()
        ->route('dashboard.Pag_services.index')
        ->with('success', '✅ تم إضافة الخدمة مع الصورة الأساسية والمميزات بنجاح');
}




    public function edit(Pagservice $Pag_service, Request $request, $s)
    {

        $Pag_service =   Pagservice::where('id', $s)->first();
        $pageKey = $Pag_service->title_en;
           $seo = SeoSetting::firstOrCreate(['page' => $pageKey]);
        //   return  $Pag_service ;
        return view('admin.pagservices.edit', compact('Pag_service','seo'));
    }


public function update(Request $request, Pagservice $pagservice)
{
    $data = $request->validate([
        'title'             => 'required|string|max:255',
        'title_en'             => 'required|string|max:255',
        'icon'              => 'nullable|string|max:255',
        'description'       => 'nullable|string',
        'description_en'       => 'nullable|string',
        'short_description' => 'nullable|string',
        'short_description_en' => 'nullable|string',
        'sort_order'        => 'nullable|integer',
        'images.*'          => 'nullable|image|mimes:jpg,jpeg,png,webp',
        'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    // ✅ إنشاء slug جديد من العنوان
    $data['slug'] = Str::slug($request->title);

    // ✅ رفع الصورة الأساسية وتحديثها في الجدول الرئيسي
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $path = $file->store('dashboard_files/img/pagservices', 'public_uploads');
        $data['image'] = $path; // نحفظ المسار في عمود image في نفس الجدول
    }

    // ✅ تحديث بيانات الخدمة في جدول pagservices
    $pagservice->update($data);

    // ✅ حفظ الصور الجديدة (تعدد الصور)
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $path = $file->store('dashboard_files/img/pagservices', 'public_uploads');
            $pagservice->images()->create(['image' => $path]);
        }
    }

    // ✅ حفظ المميزات الجديدة (features)
    if ($request->has('features')) {
        foreach ($request->features as $feature) {
            if (!empty($feature['title'])) {
                $pagservice->features()->create([
                    'title'       => $feature['title'],
                    'title_en'       => $feature['title_en'],
                    'icon'        => $feature['icon'] ?? null,
                    'description' => $feature['description'] ?? null,
                    'description_en' => $feature['description_en'] ?? null,
                ]);
            }
        }
    }

    return back()->with('success', '✅ تم تحديث الخدمة بنجاح وتحديث الصورة الأساسية والمميزات');
}




    public function destroy(Pagservice $pagservice)
    {
        if ($pagservice->image && Storage::disk('public_uploads')->exists($pagservice->image)) {
            Storage::disk('public_uploads')->delete($pagservice->image);
        }

        $pagservice->delete();

        return back()->with('success', '❌ تم حذف الخدمة');
    }



    public function deleteImage($id)
    {
        $image = ServiceImage::find($id);

        if (!$image) {
            return response()->json(['success' => false, 'message' => 'الصورة غير موجودة']);
        }

        // حذف الصورة من مجلد public_uploads
        if ($image->image && Storage::disk('public_uploads')->exists($image->image)) {
            Storage::disk('public_uploads')->delete($image->image);
        }

        $image->delete();

        return response()->json(['success' => true]);
    }


public function storeFeature(Request $request, $id)
{
    $service = \App\Models\Pagservice::findOrFail($id);

    $data = $request->validate([
        'title' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'icon' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'description_en' => 'nullable|string',

    ]);

    $data['pagservice_id'] = $service->id;

    $feature = ServiceFeature::create($data);

    return response()->json([
        'success' => true,
        'feature' => $feature
    ]);
}


public function deleteFeature($id)
{
    $feature = ServiceFeature::find($id);

    if (!$feature) {
        return response()->json(['success' => false, 'message' => 'الميزة غير موجودة']);
    }

    $feature->delete();

    return response()->json(['success' => true]);
}
public function updateFeature(Request $request, $id)
{
    $feature = \App\Models\ServiceFeature::find($id);
    if (!$feature) {
        return response()->json(['success' => false, 'message' => 'الميزة غير موجودة']);
    }

    $feature->update([
        'title'       => $request->title,
        'title_en'       => $request->title_en,
        'icon'        => $request->icon,
        'description' => $request->description,
        'description_en' => $request->description_en,
    ]);

    return response()->json(['success' => true, 'message' => 'تم التعديل بنجاح']);
}


}
