<?php
namespace App\Http\Controllers;

use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoSettingController extends Controller
{
    public function edit($page)
    {

        $seo = SeoSetting::firstOrCreate(['page' => $page]);

        return view('dashboard.seo.edit', compact('seo'));
    }

    public function update(Request $request, $page)
{
    $seo = SeoSetting::firstOrCreate(['page' => $page]);

    $data = [
        'title' => $request->title,
        'description' => $request->description,
        'keywords' => $request->keywords,
        'canonical' => $request->canonical,
    ];

    // ✔ رفع صورة OG
    // if ($request->hasFile('og_image_file')) {

    //     // حفظ الصورة في storage/app/public/seo
    //     $path = $request->file('og_image_file')->store('seo', 'public');

    //     // تخزين المسار في قاعدة البيانات
    //     $data['og_image'] = $path;   // مثال: seo/XYZ.jpg
    // }
     if ($request->hasFile('og_image_file')) {
           $file = $request->file('og_image_file');
            $path = $file->store('dashboard_files/img/seo', 'public_uploads');
            $data['og_image'] = $path;

    }



    // تحديث البيانات
    $seo->update($data);

    return back()->with('success', 'تم تحديث SEO بنجاح');
}

}

