<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
// namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagservice;
use Illuminate\Support\Facades\Storage;

class PagserviceController extends Controller
{
    public function index() {
        $services = Pagservice::orderBy('sort_order')->get();
        return view('admin.pagservices.index', compact('services'));
    }

    public function create() {
        return view('admin.pagservices.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required',
            'icon'        => 'nullable',
            'image'       => 'nullable|image',
            'description' => 'nullable',
            'sort_order'  => 'nullable|integer',
        ]);

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('dashboard_files/img/pagservices', 'public_uploads');
        }

        Pagservice::create($data);

        return redirect()->route('pagservices.index')->with('success', '✅ تم إضافة الخدمة');
    }

  public function edit(Pagservice $Pag_service)
{
    return view('admin.pagservices.edit', compact('Pag_service'));
}


   public function update(Request $request, Pagservice $pagservice)
    {
        $data = $request->validate([
            'title'       => 'required',
            'icon'        => 'nullable',
            'image'       => 'nullable|image',
            'description' => 'nullable',
            'sort_order'  => 'nullable|integer',
        ]);

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {

            if ($pagservice->image && Storage::disk('public_uploads')->exists($pagservice->image)) {
                Storage::disk('public_uploads')->delete($pagservice->image);
            }

            $data['image'] = $request->file('image')->store('dashboard_files/img/pagservices', 'public_uploads');
        }

        $pagservice->update($data);

        return back()->with('success', '✅ تم تحديث الخدمة');
    }

    public function destroy(Pagservice $pagservice)
    {
        if ($pagservice->image && Storage::disk('public_uploads')->exists($pagservice->image)) {
            Storage::disk('public_uploads')->delete($pagservice->image);
        }

        $pagservice->delete();

        return back()->with('success', '❌ تم حذف الخدمة');
    }

}
