<?php
// app/Models/ProjectFeature.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectFeature extends Model
{
    protected $fillable = ['project_id','icon','title','description','sort_order'];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}

