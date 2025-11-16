<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagservice extends Model
{
    // protected $fillable = [
    //     'title','icon','image','description','sort_order','slug','short_description'
    // ];
     protected $fillable = [
        'title',
        'title_en',
        'icon',
        'image',
        'description',
        'description_en',
        'sort_order',
        'slug',
        'short_description',
        'short_description_en'
    ];

public function images()
{
    // return $this->hasMany(ServiceImage::class);
     return $this->hasMany(ServiceImage::class, 'service_id');
}

public function features()
{
    return $this->hasMany(ServiceFeature::class);
}



}
