<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        // Arabic
        'title1','count1',
        'title2','count2',
        'title3','count3',
        'title4','count4',

        // English
        'title1_en',
        'title2_en',
        'title3_en',
        'title4_en',
    ];
}
