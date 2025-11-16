<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        // العنوان والوصف
        'title',
        'title_en',
        'description',
        'description_en',

        // الصور
        'image1','image2','image3','image4','image5','image6',

        // الكابشن العربي
        'caption1','caption2','caption3','caption4','caption5','caption6',

        // الكابشن الإنجليزي
        'caption1_en','caption2_en','caption3_en','caption4_en','caption5_en','caption6_en',
    ];
}
