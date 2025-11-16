<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Section;

class SectionController extends Controller
{
    /**
     * عرض الصفحة مع أول قسم فقط (مثل إعدادات الشركة)
     */
    public function edit()
    {
        // نأخذ أول قسم فقط
        $section = Section::first();
        return view('admin.sections.edit', compact('section'));
    }

    /**
     * تحديث القسم
     */
    // public function update(Request $request)
    // {
    //     $section = Section::first() ?? new Section();

    //     // $data = $request->validate([
    //     //     'title' => 'required|string|max:255',
    //     //     'description' => 'nullable|string',
    //     //     'button_text' => 'nullable|string|max:100',
    //     //     'clients_count' => 'nullable|integer',
    //     //     'media' => 'nullable|file', // لقبول صورة أو فيديو حتى 10MB
    //     // ]);

    //     $data = $request->validate([
    //         'title' => 'nullable|string',
    //         'title_en' => 'nullable|string',
    //         'description' => 'nullable|string',
    //         'description_en' => 'nullable|string',
    //         'button_text' => 'nullable|string',
    //         'button_text_en' => 'nullable|string',
    //         'clients_count' => 'nullable|integer',
    //         'media' => 'nullable|file',
    //     ]);


    //     if ($request->hasFile('media')) {
    //         $file = $request->file('media');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;

    //         $path = $file->storeAs(
    //             'dashboard_files/media/sections',
    //             $filename,
    //             'public_uploads'
    //         );

    //         $data['image'] = $path; // نحفظها بنفس العمود
    //     }

    //     $section->update($data + ['title' => $request->title]);

    //     return redirect()->back()->with('success', 'تم تحديث القسم بنجاح');
    // }
 public function update(Request $request)
{
    $section = Section::first() ?? new Section();

    $data = $request->validate([
        'title'           => 'nullable|string',
        'title_en'        => 'nullable|string',
        'description'     => 'nullable|string',
        'description_en'  => 'nullable|string',
        'button_text'     => 'nullable|string',
        'button_text_en'  => 'nullable|string',
        'clients_count'   => 'nullable|integer',
        'media'           => 'nullable|mimes:mp4,webm,mov,avi,ogg,wmv|max:500000',
    ]);

    // مجلد الحفظ
    $uploadFolder = 'dashboard_files/media/sections';

    if ($request->hasFile('media')) {

        // حذف القديم لو موجود
        if ($section->media && file_exists(public_path($section->media))) {
            unlink(public_path($section->media));
        }

        // اسم جديد للفيديو
        $file = $request->file('media');
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        // حفظ الفيديو في public_html مباشرة
        $file->move(public_path($uploadFolder), $filename);

        // حفظ مسار الملف
        $data['media'] = $uploadFolder . '/' . $filename;
    }

    $section->update($data);

    return back()->with('success', 'تم تحديث القسم بنجاح');
}



}
