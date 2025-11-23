<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Booking extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'amount',
        'payment_id', 'payment_status', 'payment_data',
    ];

    protected $casts = [
        'payment_data' => 'array',
    ];
}
