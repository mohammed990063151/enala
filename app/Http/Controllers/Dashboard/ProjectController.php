<?php
// app/Http/Controllers/Dashboard/ProjectController.php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\ProjectFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(15);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title'           => 'required|string|max:255',
    //         'description'     => 'nullable|string',
    //         'short_description'     => 'nullable|string',
    //         'location'        => 'nullable|string|max:255',
    //         'completion_date' => 'nullable|date',
    //         'image'           => 'nullable|image|max:4096',
    //     ]);

    //     $data['slug'] = Str::slug($data['title'].'-'.uniqid());

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('projects/main','public');
    //     }

    //     $project = Project::create($data);

    //     // صور متعددة اختيارية عند الإنشاء
    //     if ($request->hasFile('gallery')) {
    //         foreach ($request->file('gallery') as $i => $file) {
    //             $path = $file->store('projects/gallery','public');
    //             ProjectImage::create([
    //                 'project_id' => $project->id,
    //                 'image'      => $path,
    //                 'sort_order' => $i,
    //             ]);
    //         }
    //     }


    //     // ميزات اختيارية (JSON أو Arrays)
    //     if ($request->filled('features')) {
    //         foreach ($request->features as $i => $feature) {
    //             if (blank($feature['title'] ?? null)) continue;
    //             ProjectFeature::create([
    //                 'project_id'  => $project->id,
    //                 'icon'        => $feature['icon'] ?? null,
    //                 'title'       => $feature['title'],
    //                 'description' => $feature['description'] ?? null,
    //                 'sort_order'  => $i,
    //             ]);
    //         }
    //     }

    //     return redirect()->route('dashboard.projects.index')->with('success','تم إنشاء المشروع بنجاح');
    // }



public function store(Request $request)
{
    $data = $request->validate([
        'title'              => 'required|string|max:255',
        'short_description'  => 'nullable|string',
        'description'        => 'nullable|string',
        'location'           => 'nullable|string|max:255',
        'completion_date'    => 'nullable|date',
        'image'              => 'nullable|image|max:4096',
    ]);

    // slug فريد
    $data['slug'] = Str::slug($data['title'].'-'.uniqid());

    // ✅ حفظ الصورة داخل public/dashboard_files/img/projects
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = time() . '.' . $file->getClientOriginalExtension();

        $destination = public_path('dashboard_files/img/projects');

        // إنشاء المجلد إذا لم يكن موجود
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0775, true);
        }

        // نقل الملف إلى public
        $file->move($destination, $name);

        // حفظ المسار النسبي في قاعدة البيانات
        $data['image'] = 'dashboard_files/img/projects/' . $name;
    }

    // إنشاء المشروع
    $project = Project::create($data);

    // ✅ صور متعددة اختيارية (معرض الصور)
    if ($request->hasFile('gallery')) {
        $galleryPath = public_path('dashboard_files/img/projects/gallery');

        if (!File::exists($galleryPath)) {
            File::makeDirectory($galleryPath, 0775, true);
        }

        foreach ($request->file('gallery') as $i => $file) {
            $gName = time() . '_' . $i . '.' . $file->getClientOriginalExtension();
            $file->move($galleryPath, $gName);

            ProjectImage::create([
                'project_id' => $project->id,
                'image'      => 'dashboard_files/img/projects/gallery/' . $gName,
                'sort_order' => $i,
            ]);
        }
    }

    // ✅ ميزات المشروع (اختيارية)
    if ($request->filled('features')) {
        foreach ($request->features as $i => $feature) {
            if (blank($feature['title'] ?? null)) continue;
            ProjectFeature::create([
                'project_id'  => $project->id,
                'icon'        => $feature['icon'] ?? null,
                'title'       => $feature['title'],
                'description' => $feature['description'] ?? null,
                'sort_order'  => $i,
            ]);
        }
    }

    return redirect()
        ->route('dashboard.projects.index')
        ->with('success', '✅ تم إنشاء المشروع وحفظ الصور في public بنجاح');
}


    public function edit(Project $project)
    {
        $project->load('images','features');
        return view('admin.projects.edit', compact('project'));
    }

    // public function update(Request $request, Project $project)
    // {
    //     $data = $request->validate([
    //         'title'           => 'required|string|max:255',
    //         'description'     => 'nullable|string',
    //         'location'        => 'nullable|string|max:255',
    //         'completion_date' => 'nullable|date',
    //         'image'           => 'nullable|image|max:4096',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         if($project->image) Storage::disk('public')->delete($project->image);
    //         $data['image'] = $request->file('image')->store('projects/main','public');
    //     }

    //     // slug لا نغيره إلا إذا طلبت
    //     $project->update($data);

    //     // تحديث/إضافة ميزات
    //     if ($request->filled('features')) {
    //         // strategy: احذف وأعد الإدخال (أبسط)
    //         $project->features()->delete();
    //         foreach ($request->features as $i => $feature) {
    //             if (blank($feature['title'] ?? null)) continue;
    //             $project->features()->create([
    //                 'icon'        => $feature['icon'] ?? null,
    //                 'title'       => $feature['title'],
    //                 'description' => $feature['description'] ?? null,
    //                 'sort_order'  => $i,
    //             ]);
    //         }
    //     }

    //     // إضافة صور جديدة للمعرض (إن وُجدت)
    //     if ($request->hasFile('gallery')) {
    //         foreach ($request->file('gallery') as $i => $file) {
    //             $path = $file->store('projects/gallery','public');
    //             $project->images()->create([
    //                 'image' => $path,
    //                 'sort_order' => $project->images()->count() + $i,
    //             ]);
    //         }
    //     }

    //     return back()->with('success','تم تحديث المشروع بنجاح');
    // }


public function update(Request $request, Project $project)
{
    $data = $request->validate([
        'title'              => 'required|string|max:255',
        'short_description'  => 'nullable|string',
        'description'        => 'nullable|string',
        'location'           => 'nullable|string|max:255',
        'completion_date'    => 'nullable|date',
        'image'              => 'nullable|image|max:4096',
    ]);

    // ✅ تحديث الصورة داخل public/dashboard_files/img/projects
    if ($request->hasFile('image')) {

        // حذف الصورة القديمة إن وُجدت
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }

        // مسار الحفظ
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();

        $destination = public_path('dashboard_files/img/projects');

        // إنشاء المجلد إذا لم يكن موجود
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0775, true);
        }

        // نقل الصورة الجديدة
        $file->move($destination, $filename);

        // حفظ المسار الجديد في قاعدة البيانات
        $data['image'] = 'dashboard_files/img/projects/' . $filename;
    }

    // ✅ تحديث بيانات المشروع
    $project->update($data);

    // ✅ تحديث الميزات (اختياري)
    if ($request->filled('features')) {
        // نحذف القديمة لإعادة إنشائها
        $project->features()->delete();

        foreach ($request->features as $i => $feature) {
            if (blank($feature['title'] ?? null)) continue;

            $project->features()->create([
                'icon'        => $feature['icon'] ?? null,
                'title'       => $feature['title'],
                'description' => $feature['description'] ?? null,
                'sort_order'  => $i,
            ]);
        }
    }

    // ✅ تحديث معرض الصور (اختياري)
    if ($request->hasFile('gallery')) {
        $galleryPath = public_path('dashboard_files/img/projects/gallery');

        if (!File::exists($galleryPath)) {
            File::makeDirectory($galleryPath, 0775, true);
        }

        foreach ($request->file('gallery') as $i => $file) {
            $gName = time() . '_' . $i . '.' . $file->getClientOriginalExtension();
            $file->move($galleryPath, $gName);

            $project->images()->create([
                'image'       => 'dashboard_files/img/projects/gallery/' . $gName,
                'sort_order'  => $project->images()->count() + $i,
            ]);
        }
    }

    return back()->with('success', '✅ تم تحديث المشروع والصورة بنجاح');
}


    public function destroy(Project $project)
    {
        // حذف ملفات الصور
        if($project->image) Storage::disk('public')->delete($project->image);
        foreach ($project->images as $img) {
            Storage::disk('public')->delete($img->image);
        }
        $project->delete();
        return redirect()->route('dashboard.projects.index')->with('success','تم حذف المشروع');
    }

    // صور إضافية (AJAX أو فورم منفصل)
    public function storeImages(Request $request, Project $project)
    {
        $request->validate([
            'images.*' => 'required|image|max:4096',
        ]);
        foreach ($request->file('images') as $i => $file) {
            $path = $file->store('projects/gallery','public');
            $project->images()->create([
                'image' => $path,
                'sort_order' => $project->images()->count() + $i,
            ]);
        }
        return back()->with('success','تم إضافة الصور');
    }

    public function destroyImage(Project $project, ProjectImage $image)
    {
        Storage::disk('public')->delete($image->image);
        $image->delete();
        return back()->with('success','تم حذف الصورة');
    }

    // ميزات (إضافة/حذف سريع)
    public function storeFeature(Request $request, Project $project)
{
    $data = $request->validate([
        'icon' => 'nullable|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string|max:500',
    ]);

    $data['sort_order'] = $project->features()->count();

    $feature = $project->features()->create($data);

    return response()->json([
        'success' => true,
        'message' => '✅ تم حفظ الميزة بنجاح',
        'feature' => $feature
    ]);
}

public function destroyFeature(Project $project, ProjectFeature $feature)
{
    if ($feature->project_id !== $project->id) {
        return response()->json(['success' => false, 'message' => '❌ الميزة لا تتبع هذا المشروع.'], 403);
    }

    $feature->delete();

    return response()->json(['success' => true, 'message' => '✅ تم حذف الميزة بنجاح']);
}

    public function ajaxDestroyImage(Project $project, ProjectImage $image)
{
    try {
        // تأكيد أن الصورة تتبع نفس المشروع
        if ($image->project_id !== $project->id) {
            return response()->json(['success' => false, 'message' => '❌ الصورة لا تتبع هذا المشروع.'], 403);
        }

        // حذف الصورة من المجلد
        if ($image->image && file_exists(public_path($image->image))) {
            @unlink(public_path($image->image));
        }

        // حذف السجل من قاعدة البيانات
        $image->delete();

        return response()->json(['success' => true, 'message' => '✅ تم حذف الصورة بنجاح']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => '⚠️ خطأ أثناء الحذف: '.$e->getMessage()]);
    }
}

public function updateFeature(Request $request, ProjectFeature $feature)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'icon' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:500',
    ]);

    $feature->update($data);

    return response()->json(['success' => true, 'message' => 'تم تحديث الميزة بنجاح']);
}



}











// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Project;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Storage;

// class ProjectController extends Controller
// {
//     public function index()
//     {
//         $projects = Project::latest()->paginate(10);
//         return view('admin.projects.index', compact('projects'));
//     }

//     public function create()
//     {
//         return view('admin.projects.create');
//     }

//     public function store(Request $request)
//     {
//         $data = $request->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'location' => 'nullable|string|max:255',
//             'completion_date' => 'nullable|date',
//             'image' => 'nullable|image|max:2048',
//         ]);

//         if ($request->hasFile('image')) {
//             $file = $request->file('image');
//             $name = time() . '.' . $file->getClientOriginalExtension();
//             $data['image'] = $file->storeAs('dashboard_files/img/projects', $name, 'public_uploads');
//         }

//         $data['slug'] = Str::slug($data['title'], '-');

//         Project::create($data);
//         return redirect()->route('dashboard.projects.index')->with('success', 'تم إضافة المشروع بنجاح ✅');
//     }

//     public function edit(Project $project)
//     {
//         return view('admin.projects.edit', compact('project'));
//     }

//     public function update(Request $request, Project $project)
//     {
//         $data = $request->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'location' => 'nullable|string|max:255',
//             'completion_date' => 'nullable|date',
//             'image' => 'nullable|image|max:2048',
//         ]);

//         if ($request->hasFile('image')) {
//             if ($project->image && Storage::disk('public_uploads')->exists($project->image)) {
//                 Storage::disk('public_uploads')->delete($project->image);
//             }
//             $file = $request->file('image');
//             $name = time() . '.' . $file->getClientOriginalExtension();
//             $data['image'] = $file->storeAs('dashboard_files/img/projects', $name, 'public_uploads');
//         }

//         $data['slug'] = Str::slug($data['title'], '-');
//         $project->update($data);

//         return redirect()->route('dashboard.projects.index')->with('success', 'تم تحديث المشروع ✅');
//     }

//     public function destroy(Project $project)
//     {
//         if ($project->image && Storage::disk('public_uploads')->exists($project->image)) {
//             Storage::disk('public_uploads')->delete($project->image);
//         }

//         $project->delete();
//         return back()->with('success', 'تم حذف المشروع 🗑️');
//     }
// } -->
