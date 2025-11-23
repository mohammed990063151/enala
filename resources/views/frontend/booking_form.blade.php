@extends('frontend.layouts.master')

@section('title', 'حجز الخدمة')

@section('content')
<div class="container py-5" style="direction: rtl; text-align:right">
    <h2 class="mb-4">حجز خدمة: {{ $service->title }}</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('booking.store', $service->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">الاسم الكامل</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">رقم الجوال</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">البريد الإلكتروني (اختياري)</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">السعر</label>
                    {{-- <input type="text" class="form-control" value="{{ $service->price }} ريال" disabled> --}}
                    <input type="text" name="price" class="form-control" value="1" disabled>
                </div>

                <button class="btn btn-primary px-4">إكمال الحجز والدفع</button>
            </form>

        </div>
    </div>
</div>
@endsection
