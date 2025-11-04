<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\HasRolesAndPermissions; // ✅ الإصدار 8 يستخدم هذا التrait

class User extends Authenticatable
{
    use HasRolesAndPermissions, Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'image'
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $appends = ['image_path'];

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/user_images/' . $this->image);
    }
    public function roles()
{
    return $this->belongsToMany(
        \Laratrust\Models\Role::class,
        'role_user', // اسم الجدول الوسيط
        'user_id',
        'role_id'
    )->withPivot('user_type');
}

}
