@extends('frontend.layouts.master')

@section('content')
<div class="container py-5">

    <div class="text-center mb-4">
        @if(session('success'))
            <h1 style="color:#28a745; font-weight:700;">✔ تم الدفع بنجاح</h1>
            <p class="mt-3">{{ session('success') }}</p>
        @elseif(session('error'))
            <h1 style="color:#dc3545; font-weight:700;">✖ فشلت عملية الدفع</h1>
            <p class="mt-3">{{ session('error') }}</p>
        @endif
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-dark text-white">
            تفاصيل عملية الدفع
        </div>
        <div class="card-body">
            <p><strong>رقم العملية:</strong> {{ $payment['id'] ?? '—' }}</p>
            <p><strong>الحالة:</strong> {{ $payment['status'] ?? '—' }}</p>
            <p><strong>المبلغ:</strong> {{ $payment['amount'] / 100 ?? 0 }} {{ $payment['currency'] }}</p>
            <p><strong>طريقة الدفع:</strong> {{ $payment['source']['type'] ?? '—' }}</p>
            <p><strong>اسم حامل البطاقة:</strong> {{ $payment['source']['name'] ?? '—' }}</p>
        </div>
    </div>

    @if(!empty($payment))
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            بيانات الـ Payment كاملة (JSON)
        </div>
        <div class="card-body">
            <pre style="background:#f8f9fa; padding:15px; border-radius:8px; overflow:auto;">
{{ json_encode($payment, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}
            </pre>
        </div>
    </div>
    @endif

    @if($booking)
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-success text-white">
            بيانات الحجز المرتبط
        </div>
        <div class="card-body">
            <p><strong>رقم الحجز:</strong> {{ $booking->id }}</p>
            <p><strong>الاسم:</strong> {{ $booking->name }}</p>
            <p><strong>التاريخ:</strong> {{ $booking->date }}</p>
            <p><strong>الحالة:</strong> {{ $booking->payment_status }}</p>
        </div>
    </div>
    @endif

    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-dark px-4">الرجوع للرئيسية</a>
    </div>

</div>
@endsection
