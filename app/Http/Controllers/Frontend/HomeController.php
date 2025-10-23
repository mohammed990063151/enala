<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;

class HomeController extends Controller
{
    public function index()
    {
        // نأخذ أول قسم فقط
        $section = Section::first();

        // تمرير البيانات إلى الصفحة
        return view('frontend.home', compact('section'));
    }
}
