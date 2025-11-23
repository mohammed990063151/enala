<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment\MoyasarController;
Route::get('/payment/moyasar/verify', [MoyasarController::class, 'apiVerify'])
    ->name('api.moyasar.verify');
