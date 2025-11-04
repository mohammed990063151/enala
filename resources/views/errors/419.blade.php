@extends('frontend.layouts.master')

@section('title', 'انتهت الجلسة')

@section('content')
<div style="text-align: -webkit-center;">

    <div style="max-width:500px;padding:40px;background:#fff;border-radius:15px;box-shadow:0 6px 20px rgba(0,0,0,0.08);">
        <h1 style="font-size:4rem;color:#1b3b26;margin-bottom:15px;">419</h1>
        <h2 style="color:#4CAF50;font-weight:700;margin-bottom:15px;">انتهت الجلسة</h2>
        <p style="font-size:1.1rem;color:#666;line-height:1.8;">
            انتهت صلاحية الصفحة أو انتهت جلستك.
            ربما تركت الصفحة مفتوحة لفترة طويلة، أو فقدت الاتصال بالخادم.
        </p>

        <a href="{{ url()->previous() }}"
           style="display:inline-block;margin-top:25px;padding:10px 25px;background:#1b3b26;color:#fff;text-decoration:none;border-radius:30px;font-weight:600;">
            🔄 إعادة المحاولة
        </a>

        <br>
        <a href="{{ url('/') }}"
           style="display:inline-block;margin-top:10px;padding:8px 20px;background:#D9EF82;color:#1b3b26;text-decoration:none;border-radius:30px;font-weight:600;">
            العودة إلى الصفحة الرئيسية
        </a>
    </div>

</div>
@endsection
