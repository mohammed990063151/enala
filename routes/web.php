<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BlogController;
Route::get('/custom-login', function() {
    return view('auth.custom-login');
})->name('custom-login');

// 🔹 الصفحة الرئيسية للموقع (الفرونت إند)
Route::get('/', function () {
    return view('frontend.home'); // تشير إلى resources/views/frontend/home.blade.php
})->name('frontend.home');

// 🔹 مثال لمسار لوحة التحكم (backend)
Route::get('/dashboard', function () {
    return view('dashboard.welcome');
})->name('dashboard.welcome');

Auth::routes(['register' => false]);

Route::get('/contact', function () {
    return view('frontend.Contact');
})->name('contact');

// صفحة "خدمتنا"
Route::get('/our-services', function () {
    return view('frontend.our_services');
})->name('frontend.our-services');

// صفحة من نحن
Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('frontend.about-us');

// صفحة الغرف
Route::get('/allrooms', function () {
    return view('frontend.allrooms');
})->name('frontend.rooms');
Route::get('/guests-reviews', function () {
    return view('frontend.guests-reviews');
})->name('guests.reviews');
Route::get('/book-now', function () {
    return view('frontend.book-now');
})->name('book.now');
// صفحة المدونة - قائمة المقالات


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// صفحة المقال المفرد (اختياري)
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


// Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms', function () {
    return view('frontend.rooms.index');
})->name('rooms.show');





// Route::get('/home', 'HomeController@index')->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
