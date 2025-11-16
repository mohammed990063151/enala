<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAbout extends Model
{
    protected $table = 'company_about';
    // protected $fillable = [
    //     'title','subtitle','header_image','intro',
    //     'point1','point2','point3','point4'
    // ];
     protected $fillable = [
        // عربي
        'title',
        'subtitle',
        'header_image',
        'intro',
        'point1',
        'point2',
        'point3',
        'point4',

        // إنجليزي
        'title_en',
        'subtitle_en',
        'intro_en',
        'point1_en',
        'point2_en',
        'point3_en',
        'point4_en',
        ];
}
