<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\CompanyAbout;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyAboutController extends Controller
{
    public function index()
    {
          $pageKey = 'About me';
           $seo = SeoSetting::firstOrCreate(['page' => $pageKey]);
        $about = CompanyAbout::first();
        return view('admin.company_about.index', compact('about','seo'));
    }

    public function update(Request $request)
    {
        $about = CompanyAbout::first();

        $data = $request->validate([
            'title'       => 'required|max:255',
            'subtitle'    => 'nullable|max:255',
            'intro'       => 'nullable',
            'point1'      => 'nullable|max:255',
            'point2'      => 'nullable|max:255',
            'point3'      => 'nullable|max:255',
            'point4'      => 'nullable|max:255',
             'title_en'       => 'required|max:255',
            'subtitle_en'    => 'nullable|max:255',
            'intro_en'       => 'nullable',
            'point1_en'      => 'nullable|max:255',
            'point2_en'      => 'nullable|max:255',
            'point3_en'      => 'nullable|max:255',
            'point4_en'      => 'nullable|max:255',
            'header_image'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        // if ($request->hasFile('header_image')) {
        //     if ($about->header_image && Storage::disk('public_uploads')->exists($about->header_image)) {
        //         Storage::disk('public_uploads')->delete($about->header_image);
        //     }
        //     $file  = $request->file('header_image');
        //     $name  = time().'_about_header.'.$file->getClientOriginalExtension();
        //     $data['header_image'] = $file->storeAs(
        //         'dashboard_files/img/about', $name, 'public_uploads'
        //     );
        // }
         if ($request->hasFile('header_image')) {
        $file = $request->file('header_image');
        $path = $file->store('dashboard_files/img/about', 'public_uploads');
        $data['header_image'] = $path; // حفظ المسار داخل الجدول الرئيسي
    }

        $about->update($data);

        return back()->with('success','تم تحديث صفحة الشركة بنجاح ✅');
    }
}
