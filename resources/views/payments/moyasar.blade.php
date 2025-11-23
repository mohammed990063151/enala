@extends('frontend.layouts.master')

@section('title', 'الدفع عبر ميسر')

@section('content')
<div class="container py-5" style="direction: rtl;">
    <h2 class="mb-4">الدفع للحجز رقم {{ $booking->id }}</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>الاسم:</strong> {{ $booking->name }}</p>
            <p><strong>المبلغ:</strong> {{ number_format($booking->amount, 2) }} ريال</p>
        </div>
    </div>

    <hr>

    <h4 class="mb-3">بيانات الدفع</h4>

    <!-- عنصر الفورم الخاص بميسر -->
    <div class="mysr-form"></div>
<br /><br /><br /><br />
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // المبلغ بالهلالات: 100 SAR = 100 * 100 = 10000
            const amountHalalas = {{ (int)($booking->amount * 100) }};

            Moyasar.init({
                element: '.mysr-form',
                amount: amountHalalas,
                currency: '{{ $currency }}', // SAR
                description: 'Booking #{{ $booking->id }}',
                publishable_api_key: '{{ $publishableKey }}',
                callback_url: '{{ $callbackUrl }}',

                // طرق الدفع المتاحة
                methods: ['creditcard', 'stcpay'],

                // ندخل booking_id في metadata عشان نرجع نربط الدفع بالحجز
                metadata: {
                    booking_id: '{{ $booking->id }}'
                },

                // اختياري: نحفظ الـ payment قبل الـ redirect
                on_completed: async function (payment) {
                    // تقدر ترسل payment.id للسيرفر هنا AJAX لو حبيت
                    console.log('Payment created:', payment);
                },

                // اختياري
                on_failure: async function (error) {
                    console.error('Moyasar error:', error);
                    alert('حدث خطأ في عملية الدفع: ' + error);
                }
            });
        });
    </script>
</div>
@endsection
