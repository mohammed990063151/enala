<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

   protected $fillable = [
    'title', 'title_en',
    'description', 'description_en',
    'image1', 'image2',
    'point1', 'point1_en',
    'point2', 'point2_en',
    'point3', 'point3_en',
    'point4', 'point4_en'
];

}

