<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\PagService;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // صفحة إدخال بيانات العميل
    public function create(\App\Models\PagService $service)
    {
        // return 0;
        return view('frontend.booking_form', [
            'service' => $service
        ]);
    }

    // حفظ الحجز ثم ذهب للدفع
    public function store(Request $request, PagService $service)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable|email'
        ]);

        $booking = Booking::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            // 'amount' => $request->price ?? 0,
            'amount' => 1,
        ]);

        return redirect()->route('bookings.pay', $booking->id);
    }
}
