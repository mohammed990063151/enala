<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::first();
        return view('admin.service.index', compact('service'));
    }

    public function update(Request $request)
    {
        // return $request->all();
        $service = Service::first();

        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'caption1' => 'nullable|string',
            'caption2' => 'nullable|string',
            'caption3' => 'nullable|string',
            'caption4' => 'nullable|string',
            'caption5' => 'nullable|string',
            'caption6' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_en' => 'nullable|string',
            'caption1_en' => 'nullable|string',
            'caption2_en' => 'nullable|string',
            'caption3_en' => 'nullable|string',
            'caption4_en' => 'nullable|string',
            'caption5_en' => 'nullable|string',
            'caption6_en' => 'nullable|string',
            'image1' => 'image|mimes:jpg,png,jpeg',
            'image2' => 'image|mimes:jpg,png,jpeg',
            'image3' => 'image|mimes:jpg,png,jpeg',
            'image4' => 'image|mimes:jpg,png,jpeg',
            'image5' => 'image|mimes:jpg,png,jpeg',
            'image6' => 'image|mimes:jpg,png,jpeg',
        ]);

        foreach(['image1','image2','image3','image4','image5','image6'] as $img){

            if ($request->hasFile($img)) {

                if ($service->$img && Storage::disk('public_uploads')->exists($service->$img)) {
                    Storage::disk('public_uploads')->delete($service->$img);
                }

                $file = $request->file($img);
                $name = time().'_'.$img.'.'.$file->getClientOriginalExtension();

                $data[$img] = $file->storeAs(
                    'dashboard_files/img/services',
                    $name,
                    'public_uploads'
                );
            }
        }

        $service->update($data);

        return back()->with('success','✅ تم تحديث خدمات الشركة بنجاح');
    }
}
