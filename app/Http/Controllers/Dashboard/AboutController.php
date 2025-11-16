<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $about = About::first();
    return view('admin.about.index', compact('about'));
}

public function update(Request $request)
{
    $data = $request->validate([
        'title'       => 'required',
        'description' => 'required',
        'image1'      => 'image|mimes:jpg,png,jpeg',
        'image2'      => 'image|mimes:jpg,png,jpeg',
        'point1'      => 'nullable',
        'point2'      => 'nullable',
        'point3'      => 'nullable',
        'point4'      => 'nullable',
        'title_en'       => 'required',
        'description_en' => 'required',
        'point1_en'      => 'nullable',
        'point2_en'      => 'nullable',
        'point3_en'      => 'nullable',
        'point4_en'      => 'nullable',
    ]);

    $about = About::first(); // نفس السجل
if ($request->hasFile('image1')) {

    // حذف القديمة إن وجدت
    if ($about->image1 && Storage::disk('public_uploads')->exists($about->image1)) {
        Storage::disk('public_uploads')->delete($about->image1);
    }

    $file = $request->file('image1');

    $data['image1'] = $file->storeAs(
        'dashboard_files/img/logos',                     // ✅ نفس مجلد logos
        time() . '_1.' . $file->getClientOriginalExtension(),
        'public_uploads'
    );
}


// IMAGE 2
if ($request->hasFile('image2')) {

    // حذف القديمة إن وجدت
    if ($about->image2 && Storage::disk('public_uploads')->exists($about->image2)) {
        Storage::disk('public_uploads')->delete($about->image2);
    }

    $file = $request->file('image2');

    $data['image2'] = $file->storeAs(
        'dashboard_files/img/logos',                     // ✅ نفس مجلد logos
        time() . '_2.' . $file->getClientOriginalExtension(),
        'public_uploads'
    );
}


    $about->update($data);

    return back()->with('success', 'تم تحديث البيانات بنجاح ✅');
}

}
