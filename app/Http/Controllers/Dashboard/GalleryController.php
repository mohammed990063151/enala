<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\GallerySetting;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $settingGallery = GallerySetting::first();
        $items = GalleryItem::latest()->get();
// return  $setting;
        return view('admin.gallery.index', compact('settingGallery', 'items'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required',
            'description' => 'required'
        ]);

        $setting = GallerySetting::first();
        $setting->update($data);

        return back()->with('success','✅ تم تحديث بيانات المعرض');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'  => 'required|image',
            'caption' => 'nullable|max:255',
        ]);

        $file = $request->file('image');
        $name = time().'.'.$file->getClientOriginalExtension();

        $path = $file->storeAs(
            'dashboard_files/img/gallery',
            $name,
            'public_uploads'
        );

        GalleryItem::create([
            'image'   => $path,
            'caption' => $request->caption
        ]);

        return back()->with('success','✅ تم إضافة صورة جديدة');
    }

    public function destroy($id)
    {
        $item = GalleryItem::find($id);

        if (Storage::disk('public_uploads')->exists($item->image)) {
            Storage::disk('public_uploads')->delete($item->image);
        }

        $item->delete();

        return back()->with('success','❌ تم حذف الصورة');
    }
}
