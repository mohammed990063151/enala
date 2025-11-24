<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\SeoSetting;

class SectionController extends Controller
{
    /**
     * عرض الصفحة مع أول قسم فقط (مثل إعدادات الشركة)
     */
    public function edit()
    {
         $pageKey = 'Home';
           $seo = SeoSetting::firstOrCreate(['page' => $pageKey]);
        // نأخذ أول قسم فقط
        $section = Section::first();
        return view('admin.sections.edit', compact('section','seo'));
    }

    /**
     * تحديث بيانات القسم
     */
    // public function update(Request $request)
    // {
    //     $section = Section::first();
    //     if (!$section) {
    //         $section = new Section();
    //     }

    //     $data = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'button_text' => 'nullable|string|max:100',
    //         'clients_count' => 'nullable|integer',
    //         'image' => 'nullable|image|max:2048',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('sections', 'public');
    //     }
    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->storeAs(
    //             'dashboard_files/img/logos',
    //             time() . '.' . $request->file('image')->getClientOriginalExtension(),
    //             'public_uploads'
    //         );
    //     }
    //     $section->update($data + ['title' => $request->title]);

    //     return redirect()->back()->with('success', 'تم تحديث القسم بنجاح');
    // }
    public function update(Request $request)
{
    $section = Section::first() ?? new Section();

    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'button_text' => 'nullable|string|max:100',
        'title_en' => 'required|string|max:255',
        'description_en' => 'nullable|string',
        'button_text_en' => 'nullable|string|max:100',
        'clients_count' => 'nullable|integer',
        'media' => 'nullable|file', // لقبول صورة أو فيديو حتى 10MB
    ]);
if ($request->hasFile('media')) {

    $file = $request->file('media');
    $extension = $file->getClientOriginalExtension();
    $filename = time() . '_' . uniqid() . '.' . $extension;

    // حذف القديم
    if ($section->image && file_exists(base_path('../public_html/' . $section->image))) {
        @unlink(base_path('../public_html/' . $section->image));
    }

    // رفع جديد داخل public_html
    $path = $file->storeAs(
        'dashboard_files/media/sections',
        $filename,
        'public_uploads'
    );

    $data['image'] = $path;
}




    $section->update($data + ['title' => $request->title]);

    return redirect()->back()->with('success', 'تم تحديث القسم بنجاح');
}

}
