<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title','slug','location','completion_date','image','description','short_description'
    ];

    protected static function booted(){
        static::creating(function($model){
            if(empty($model->slug)){
                $model->slug = Str::slug($model->title.'-'.uniqid());
            }
        });
    }

    public function images(){
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order');
    }

    public function features(){
        return $this->hasMany(ProjectFeature::class)->orderBy('sort_order');
    }

    // صورة افتراضية
    public function getImageUrlAttribute(){
        return $this->image ? asset('storage/'.$this->image) : asset('img/placeholder.jpg');
    }
}
