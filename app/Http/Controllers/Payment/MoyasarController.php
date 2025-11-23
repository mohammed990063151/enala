<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoyasarController extends Controller
{
    /**
     * إظهار صفحة الدفع الخاصة بالحجز
     */
    public function showPaymentForm(Booking $booking)
    {
        // return 0;
        if ($booking->payment_status === 'paid') {
            return redirect()->back()->with('success', 'تم دفع هذا الحجز من قبل.');
        }

        return view('payments.moyasar', [
            'booking' => $booking,
            'publishableKey' => config('services.moyasar.publishable_key'),
            'currency' => config('services.moyasar.currency', 'SAR'),
            'callbackUrl' => config('services.moyasar.callback_url'),
        ]);
    }

    /**
     * callback من ميسر بعد إتمام الدفع (الويب)
     * GET /payment/moyasar/callback?id=....&status=paid&message=...
     */
    public function callback(Request $request)
    {
        // return 1;
        $paymentId = $request->query('id');
        $status    = $request->query('status');   // paid / failed / initiated
        $message   = $request->query('message');  // نصي (اختياري)

        if (!$paymentId) {
            return view('payments.massge', compact('paymentId', 'status', 'message'))->with('error', 'معرف الدفع غير موجود.');
        }

        // 1) جلب بيانات الدفع من API ميسر للتحقق النهائي
        $payment = $this->fetchPaymentFromMoyasar($paymentId);

        if (!$payment) {
            // return view('payments.massge', compact('paymentId', 'status', 'message'))->with('error', 'فشل التحقق من عملية الدفع.');
       return view('payments.massge', [
    'paymentId' => $paymentId,
    'status'    => $status,
    'message'   => $message,
    'payment'   => $payment,   // ← نرسل بيانات الدفع كلها
    'booking'   => $booking ?? null
]);

        }

        // مثال: تخزين / ربط الدفع بحجز
        $bookingId = data_get($payment, 'metadata.booking_id');

        if ($bookingId) {
            $booking = Booking::find($bookingId);

            if ($booking) {
                $booking->update([
                    'payment_id'     => $payment['id'] ?? null,
                    'payment_status' => $payment['status'] ?? 'failed',
                    'payment_data'   => $payment,
                ]);
            }
        }

        // التحقق من النجاح الفعلي
        // if ($payment['status'] === 'paid') {
        //     return
        //         view('payments.massge', compact('paymentId', 'status', 'message'))
        //         ->with('success', 'تم الدفع بنجاح، رقم العملية: ' . $payment['id']);
        // }
        if ($payment['status'] === 'paid') {
    return view('payments.massge', [
        'paymentId' => $paymentId,
        'status'    => $status,
        'message'   => $message,
        'payment'   => $payment,
        'booking'   => $booking ?? null
    ])->with('success', 'تم الدفع بنجاح، رقم العملية: ' . $payment['id']);
}
return view('payments.massge', [
    'paymentId' => $paymentId,
    'status'    => $status,
    'message'   => $message,
    'payment'   => $payment,
    'booking'   => $booking ?? null
])->with('error', 'فشلت عملية الدفع: ' . ($payment['message'] ?? $message ?? ''));


        // return view('payments.massge', compact('paymentId', 'status', 'message'))
        //     ->with('error', 'فشلت عملية الدفع: ' . ($payment['message'] ?? $message ?? ''));
    }

    /**
     * API للتحقق من الدفع (مفيد للتطبيقات أو AJAX)
     * GET /api/payment/moyasar/verify?id=...
     */
    public function apiVerify(Request $request)
    {
        $paymentId = $request->query('id');

        if (!$paymentId) {
            return response()->json([
                'success' => false,
                'message' => 'payment id is required',
            ], 422);
        }

        $payment = $this->fetchPaymentFromMoyasar($paymentId);

        if (!$payment) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot fetch payment from Moyasar',
            ], 500);
        }

        return response()->json([
            'success' => $payment['status'] === 'paid',
            'payment' => $payment,
        ]);
    }

    /**
     * دالة مساعدة لاستدعاء API ميسر والتحقق من الدفع
     */
    protected function fetchPaymentFromMoyasar(string $paymentId): ?array
    {
        $secretKey = config('services.moyasar.secret_key');

        $response = Http::withBasicAuth($secretKey, '')
            ->get("https://api.moyasar.com/v1/payments/{$paymentId}");

        if ($response->failed()) {
            return null;
        }

        return $response->json();
    }
}
