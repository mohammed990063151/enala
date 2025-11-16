<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ContactSetting extends Model
{
    // protected $fillable = [
    //     'title','subtitle','email','phone','whatsapp','address','map_embed'
    // ];
     protected $fillable = [
        // عربي
        'title',
        'subtitle',
        'address',

        // إنجليزي
        'title_en',
        'subtitle_en',
        'address_en',

        // ثوابت الاتصال
        'email',
        'phone',
        'whatsapp',
        'map_embed',
    ];
}
