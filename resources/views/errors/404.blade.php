@extends('frontend.layouts.master')
@section('title', 'الصفحة غير موجودة')

@section('content')
<div style="text-align:center;">

    <div style="padding:40px;background:#fff;border-radius:15px;box-shadow:0 6px 20px rgba(0,0,0,0.08);">
        <h1 style="font-size:4rem;color:#1b3b26;margin-bottom:15px;">404</h1>
        <h2 style="color:#4CAF50;font-weight:700;margin-bottom:15px;">الصفحة غير موجودة</h2>
        <p style="font-size:1.1rem;color:#666;line-height:1.8;">
            يبدو أنك وصلت إلى رابط غير صحيح أو أن الصفحة قد تم نقلها أو حذفها.
        </p>

        <a href="{{ url('/') }}"
           style="display:inline-block;margin-top:25px;padding:10px 25px;background:#1b3b26;color:#fff;text-decoration:none;border-radius:30px;font-weight:600;">
            🏠 العودة إلى الصفحة الرئيسية
        </a>
    </div>

</div>
@endsection
