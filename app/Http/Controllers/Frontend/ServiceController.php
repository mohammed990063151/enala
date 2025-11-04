<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pagservice;

class ServiceController extends Controller
{
    public function show($slug)
    {
        // استرجاع الخدمة المطلوبة
        $service = Pagservice::where('slug', $slug)
            ->with(['images', 'features'])
            ->firstOrFail();

        // جلب خدمات أخرى مشابهة (باستثناء الحالية)
        $related = Pagservice::where('id', '!=', $service->id)
            ->orderBy('sort_order', 'asc')
             ->with(['images', 'features'])
            ->take(3)
            ->get();

        // إرسالها إلى الصفحة
        return view('frontend.services.show', compact('service', 'related'));
    }
}
