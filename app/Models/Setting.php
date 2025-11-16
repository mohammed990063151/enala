<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
    'name', 'name_en',
    'logo',
    'email', 'phone',
    'address', 'address_en',
    'facebook', 'twitter', 'instagram', 'linkedin',
];

}
