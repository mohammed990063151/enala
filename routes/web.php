<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\WhyUsController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\CounterController;
use App\Http\Controllers\Dashboard\CompanyAboutController;
use App\Http\Controllers\Dashboard\PagserviceController;
use App\Models\Service;
Route::get('/custom-login', function() {
    return view('auth.custom-login');
})->name('custom-login');

// 🔹 الصفحة الرئيسية للموقع (الفرونت إند)
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/pag_service/{slug}', [BlogController::class, 'Pagservice'])->name('servicepag.show');
// Route::middleware(['auth', 'web'])->name('dashboard.')->group(function () {
// // 🔹 مثال لمسار لوحة التحكم (backend)
// Route::get('/dashboard', function () {
//     return view('admin.home');
// })->name('dashboard.welcome');
// });

Auth::routes(['register' => false]);

Route::get('/contact', function () {
    return view('frontend.Contact');
})->name('contact');

// // صفحة "خدمتنا"
Route::get('/our-services', function () {
    return view('frontend.our_services');
})->name('frontend.our-services');

// Frontend display:
Route::get('/pag_services', function () {
    $pagservices = \App\Models\Pagservice::orderBy('sort_order')->get();
    return view('frontend.our_services', compact('pagservices'));
})->name('frontend.services');

// صفحة من نحن
// Route::get('/about-us', function () {
//     return view('frontend.about-us');
// })->name('frontend.about-us');
Route::get('/about-us', function () {
    $about = \App\Models\CompanyAbout::first();
    return view('frontend.about-us', compact('about'));
})->name('frontend.about-us');

// صفحة الغرف
Route::get('/allrooms', function () {
    return view('frontend.allrooms');
})->name('frontend.rooms');
Route::get('/guests-reviews', function () {
    $services = Service::first();
    return view('frontend.guests-reviews', compact('services'));
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




// Auth::routes();
Route::middleware(['auth', 'web'])->prefix('dashboard')->name('dashboard.')->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// settings
Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');

// sections
    Route::get('section/edit', [App\Http\Controllers\Dashboard\SectionController::class, 'edit'])->name('sections.edit');
    Route::put('section/update', [App\Http\Controllers\Dashboard\SectionController::class, 'update'])->name('sections.update');
// about
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::put('/about/update', [AboutController::class, 'update'])->name('about.update');
// whyus
Route::get('/whyus', [WhyUsController::class, 'index'])->name('whyus.index');
Route::put('/whyus/update', [WhyUsController::class, 'update'])->name('whyus.update');
// gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::put('/gallery/update', [GalleryController::class, 'update'])->name('gallery.update');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
// services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::put('/services/update', [ServiceController::class, 'update'])->name('services.update');
// counters
Route::get('/counters', [CounterController::class, 'index'])->name('counters.index');
Route::put('/counters/update', [CounterController::class, 'update'])->name('counters.update');



// routes/web.php

// لوحة التحكم
Route::get('/company-about', [CompanyAboutController::class, 'index'])
    ->name('company_about.index');
Route::put('/company-about/update', [CompanyAboutController::class, 'update'])
    ->name('company_about.update');


Route::resource('Pag_services', PagserviceController::class)
    ->names('Pag_services')
    ->parameters([
        'Pag_services' => 'pagservice'
    ]);

// Route::get('/service/{slug}', [ServicePageController::class, 'show'])->name('service.show');




});
