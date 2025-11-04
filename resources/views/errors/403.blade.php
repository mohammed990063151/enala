@extends('frontend.layouts.master')


@section('title', 'صلاحية الوصول')

@section('content')
<div style="text-align:center; padding:80px 20px; font-family:'Tajawal',sans-serif;">
    <h1 style="font-size:3rem; color:#1b3b26;">🚫 ليس لديك صلاحية الوصول</h1>
    <p style="margin-top:20px; color:#777; font-size:1.2rem;">
        عذرًا، لا تملك صلاحية لعرض هذه الصفحة.
    </p>
    <a href="{{ url('/') }}"
       style="display:inline-block;margin-top:25px;background:#1b3b26;color:#fff;padding:10px 25px;border-radius:30px;text-decoration:none;">
        العودة إلى الصفحة الرئيسية
    </a>
</div>
@endsection
