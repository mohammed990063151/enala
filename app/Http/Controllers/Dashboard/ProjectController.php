<?php
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

     public function store(Request $request)
    {
        $data = $request->validate([
            'title'             => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string',
            'location'          => 'nullable|string|max:255',
            'title_en'             => 'required|string|max:255',
            'short_description_en' => 'nullable|string',
            'description_en'       => 'nullable|string',
            'location_en'          => 'nullable|string|max:255',
            'completion_date'   => 'nullable|date',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        // Slug فريد
        $data['slug'] = Str::slug($data['title'] . '-' . uniqid());

        // مجلد الحفظ داخل public_html
        $uploadPath = public_path('dashboard_files/img/projects');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }
           if ($request->hasFile('image')) {
        $file = $request->file('image');
        $path = $file->store('dashboard_files/img/projects', 'public_uploads');
        $data['image'] = $path; // حفظ المسار داخل الجدول الرئيسي
    }

        // إنشاء المشروع
        $project = Project::create($data);
         if ($request->hasFile('gallery')) {
        foreach ($request->file('gallery') as $file) {
            $path = $file->store('dashboard_files/img/projects/gallery', 'public_uploads');
            $project->images()->create(['image' => $path]);
        }
    }

        // حفظ الميزات
        if ($request->filled('features')) {
            foreach ($request->features as $i => $feature) {
                if (!empty($feature['title'])) {
                    $project->features()->create([
                        'title'       => $feature['title'],
                        'title_en'       => $feature['title_en'],
                        'icon'        => $feature['icon'] ?? null,
                        'description' => $feature['description'] ?? null,
                        'description_en' => $feature['description_en'] ?? null,
                        'sort_order'  => $i,
                    ]);
                }
            }
        }

        return redirect()->route('dashboard.projects.index')
            ->with('success', '✅ تم حفظ المشروع والصور داخل public_html بنجاح');
    }







    public function edit(Project $project)
    {
        $project->load('images', 'features');
        return view('admin.projects.edit', compact('project'));
    }


    public function update(Request $request, Project $project)
    {
        // return $request->all();
        $data = $request->validate([
            'title'             => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string',
            'location'          => 'nullable|string|max:255',
            'title_en'             => 'required|string|max:255',
            'short_description_en' => 'nullable|string',
            'description_en'       => 'nullable|string',
            'location_en'          => 'nullable|string|max:255',
            'completion_date'   => 'nullable|date',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'gallery.*'          => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        // تحديث الـ slug إذا تغير العنوان
        if ($project->title !== $request->title) {
            $data['slug'] = Str::slug($request->title . '-' . uniqid());
        }
 if ($request->hasFile('image')) {
        $file = $request->file('image');
        $path = $file->store('dashboard_files/img/project', 'public_uploads');
        $data['image'] = $path; // نحفظ المسار في عمود image في نفس الجدول
    }
        $uploadPath = public_path('dashboard_files/img/projects');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }


        $project->update($data);

        // تحديث الميزات
        if ($request->filled('features')) {
            $project->features()->delete();
            foreach ($request->features as $i => $feature) {
                if (!empty($feature['title'])) {
                    $project->features()->create([
                        'title'       => $feature['title'],
                        'title_en'       => $feature['title_en'],
                        'icon'        => $feature['icon'] ?? null,
                        'description' => $feature['description'] ?? null,
                        'description_en' => $feature['description_en'] ?? null,
                        'sort_order'  => $i,
                    ]);
                }
            }
        }
         if ($request->hasFile('gallery')) {
        foreach ($request->file('gallery') as $file) {
            $path = $file->store('dashboard_files/img/project', 'public_uploads');
            $project->images()->create(['image' => $path]);
        }
    }


        return back()->with('success', '✅ تم تحديث المشروع والصور داخل public_html بنجاح');
    }




    public function destroy(Project $project)
    {
        // حذف ملفات الصور
        if ($project->image) Storage::disk('public')->delete($project->image);
        foreach ($project->images as $img) {
            Storage::disk('public')->delete($img->image);
        }
        $project->delete();
        return redirect()->route('dashboard.projects.index')->with('success', 'تم حذف المشروع');
    }

    // صور إضافية (AJAX أو فورم منفصل)
    public function storeImages(Request $request, Project $project)
    {
        $request->validate([
            'images.*' => 'required|image|max:4096',
        ]);
        foreach ($request->file('images') as $i => $file) {
            $path = $file->store('projects/gallery', 'public');
            $project->images()->create([
                'image' => $path,
                'sort_order' => $project->images()->count() + $i,
            ]);
        }
        return back()->with('success', 'تم إضافة الصور');
    }

    public function destroyImage(Project $project, ProjectImage $image)
    {
        Storage::disk('public')->delete($image->image);
        $image->delete();
        return back()->with('success', 'تم حذف الصورة');
    }

    // ميزات (إضافة/حذف سريع)
    public function storeFeature(Request $request, Project $project)
    {
        $data = $request->validate([
            'icon' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'title_en' => 'required|string|max:255',
            'description_en' => 'nullable|string|max:500',
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
            return response()->json(['success' => false, 'message' => '⚠️ خطأ أثناء الحذف: ' . $e->getMessage()]);
        }
    }

    public function updateFeature(Request $request, ProjectFeature $feature)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
             'title_en' => 'required|string|max:255',
            'description_en' => 'nullable|string|max:500',
        ]);

        $feature->update($data);

        return response()->json(['success' => true, 'message' => 'تم تحديث الميزة بنجاح']);
    }
}

