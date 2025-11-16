<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class CompanyBranch extends Model
{
    // protected $fillable = [
    //     'name','city','phone','email','map_link','image'
    // ];
     protected $fillable = [
        // عربي
        'name',
        'city',
        'address',

        // إنجليزي
        'name_en',
        'city_en',
        'address_en',

        // مشتركة
        'phone',
        'email',
        'map_link',
        'image',
    ];
}

