<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceFeature extends Model
{
    // protected $fillable = ['pagservice_id', 'icon', 'title', 'description', 'sort_order'];
    protected $fillable = [
        'pagservice_id',
        'icon',
        'title', 'title_en',
        'description', 'description_en',
        'sort_order'
    ];

    public function pagservice()
    {
        return $this->belongsTo(Pagservice::class);
    }
}
