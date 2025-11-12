<?php
// app/Http/Controllers/Frontend/ProjectController.php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $project = Project::with(['images','features'])->where('slug',$slug)->firstOrFail();
        // يمكنك تمرير أيضاً مشاريع مشابهة
        $related = Project::latest()->where('id','!=',$project->id)->take(6)->get();
        return view('frontend.project.show', compact('project','related'));
    }
}

