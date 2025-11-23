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
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\ModyafServiceController;
use App\Http\Controllers\Dashboard\ContactSettingsController;
use App\Http\Controllers\Dashboard\BranchesController;
use App\Http\Controllers\Dashboard\MessagesController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\PagContactController;
use App\Models\Service;
use App\Http\Controllers\Dashboard\ProjectController as AdminProjectController;
use App\Http\Controllers\Frontend\ProjectController as FrontProjectController;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\Payment\MoyasarController;

Route::get('/book-service/{service}', [BookingController::class, 'create'])->name('booking.create');
Route::post('/book-service/{service}', [BookingController::class, 'store'])->name('booking.store');

Route::get('/bookings/{booking}/pay', [MoyasarController::class, 'showPaymentForm'])
    ->name('bookings.pay');

Route::get('/payment/moyasar/callback', [MoyasarController::class, 'callback'])
    ->name('moyasar.callback');
    Route::get('/payment/moyasar/callback', [MoyasarController::class, 'callback'])
    ->name('payment.callback');


Route::get('/lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return redirect()->back();
})->name('switch.language');
// 🔹
Route::get('/custom-login', function() {
    return view('auth.custom-login');
})->name('custom-login');

Auth::routes(['register' => false]);
Route::middleware([SetLocale::class])->group(function () {
Route::get('/pag_service', [BlogController::class, 'Pagservice'])->name('servicepag.show');

Route::get('/projects/{slug}', [FrontProjectController::class,'show'])->name('testimonials');
Route::get('/projects_items', function () {
    $projects = App\Models\Project::with('images')->latest()->get();
return view('frontend.guests-reviews', compact('projects'));
})->name('projects.items');

// 🔹 الصفحة الرئيسية للموقع (الفرونت إند)
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/contact', function () {
    return view('frontend.Contact');
})->name('contact');

// // صفحة "خدمتنا"
// Route::get('/our-services', function () {
//     return view('frontend.our_services');
// })->name('frontend.our-services');
Route::get('/services/{slug}', [App\Http\Controllers\Frontend\ServiceController::class, 'show'])->name('services.show');
// Frontend display:
Route::get('/pag_services', function () {
    $pagservices = \App\Models\Pagservice::orderBy('sort_order')->with('images')->get();

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


Route::get('/contact/pag',[PagContactController::class,'index'])->name('pag.contact');
Route::post('/contact-send',[PagContactController::class,'send'])->name('contact.send');


});

// Route::get('/home', 'HomeController@index')->name('home');




// Auth::routes();
Route::middleware(['auth', 'web'])->prefix('dashboard')->name('dashboard.')->group(function () {
        // Route::resource('users', UserController::class);
        // 🧩 عرض جميع المستخدمين
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/index', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])
    ->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
Route::put('gallery/{id}/edit', [GalleryController::class, 'editItem'])
    ->name('gallery.editItem');

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

// Dashboard


    Route::resource('modyaf_services', ModyafServiceController::class);
    Route::get('messages', [ContactController::class, 'inbox'])->name('messages.inbox');


Route::delete('Pag_services/image/{id}', [App\Http\Controllers\Dashboard\PagserviceController::class, 'deleteImage'])
    ->name('Pag_services.deleteImage');

// Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');


});
// Frontend Contact Form
// Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

// Frontend page
// Route::get('/modyaf', [FrontendController::class, 'modyaf'])->name('modyaf');




// frontend


// dashboard
Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {

    // Contact Settings
    Route::get('contact/settings',[ContactSettingsController::class,'edit'])->name('contact.settings');
    Route::put('contact/settings',[ContactSettingsController::class,'update']);

    // Branches CRUD
    Route::resource('branches',BranchesController::class);

    // Inbox Messages
    Route::get('messages',[MessagesController::class,'inbox'])->name('messages');
    Route::get('messages/{message}',[MessagesController::class,'show'])->name('messages.show');
    Route::delete('messages/{message}',[MessagesController::class,'destroy'])->name('messages.delete');

    Route::resource('testimonials', TestimonialController::class);

    Route::post('Pag_services/{id}/features', [PagserviceController::class, 'storeFeature'])->name('Pag_services.features.store');

    // حذف ميزة (Ajax)
    Route::delete('Pag_services/features/{id}', [PagserviceController::class, 'deleteFeature'])->name('Pag_services.features.delete');


    Route::put('Pag_services/features/{id}', [PagServiceController::class, 'updateFeature'])
        ->name('Pag_services.features.update');

// Route::resource('projects', App\Http\Controllers\Dashboard\ProjectController::class);
});


// Route::get('/projects', [App\Http\Controllers\Dashboard\ProjectController::class, 'index'])->name('projects.index');

// routes/web.php

// ===== Dashboard (Admin) =====


Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function(){
    Route::resource('projects', AdminProjectController::class);
    // رفع صور إضافية وحذفها
    Route::post('projects/{project}/images', [AdminProjectController::class,'storeImages'])->name('projects.images.store');
    Route::delete('projects/{project}/images/{image}', [AdminProjectController::class,'destroyImage'])->name('projects.images.destroy');

    // مميّزات
    Route::post('projects/{project}/features', [AdminProjectController::class,'storeFeature'])->name('projects.features.store');
    Route::delete('projects/{project}/features/{feature}', [AdminProjectController::class,'destroyFeature'])->name('projects.features.destroy');
    // حذف صورة من مشروع عبر AJAX
Route::delete('projects/{project}/images/{image}', [\App\Http\Controllers\Dashboard\ProjectController::class, 'ajaxDestroyImage'])
    ->name('projects.images.destroy');
Route::put('projects/features/{feature}', [\App\Http\Controllers\Dashboard\ProjectController::class, 'updateFeature'])
    ->name('projects.features.update');

});

// ===== Frontend =====





