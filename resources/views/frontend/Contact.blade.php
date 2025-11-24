
@extends('frontend.layouts.master')
@section('seo')

@php
$pageName = 'Contact';
$seo = \App\Models\SeoSetting::where('page', $pageName)->first();
@endphp
@if($seo)
        <title>{{ $seo->title }}</title>
        <meta name="description" content="{{ $seo->description }}">
        <meta name="keywords" content="{{ $seo->keywords }}">
        @if($seo->canonical)
            <link rel="canonical" href="{{ $seo->canonical }}">
        @endif

        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:description" content="{{ $seo->description }}">
        <meta property="og:image" content="{{ asset($seo->og_image) }}">
    @endif

@endsection


@section('title', __('messages.about') . ' - ' . (app()->getLocale() == 'en'
    ? ($setting->name_en ?? $setting->name)
    : $setting->name
))

@section('content')
@push('styles')
<style>
    /* body {
        direction: rtl;
        font-family: "Tajawal", sans-serif;
    } */

    /* ========== Header ========== */
    .page-header {
        padding: 100px 20px;
        text-align: center;
        color: #fff;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url('{{ asset("img/farm2.jpg") }}') center/cover no-repeat;
        animation: headerFade .8s ease-in;
    }

    @keyframes headerFade {
        from {opacity:0; transform:translateY(-30px);}
        to {opacity:1; transform:translateY(0);}
    }

    .page-header h1 {
        font-size: 3.2rem;
        color: #D9EF82;
        font-weight: bold;
    }

    .page-header p {
        font-size: 1.1rem;
        color: #eee;
        margin-top: 10px;
    }

    /* ========== Intro Box ========== */
    .intro-text {
        max-width: 900px;
        margin: 50px auto;
        text-align: center;
        color: #355632;
        background: #f1f7ec;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 8px 18px rgba(0,0,0,.06);
    }

    /* ========== Contact Container ========== */
    .contact-container {
        max-width: 1200px;
        margin: auto;
        padding: 50px 20px;
        display:flex;
        flex-wrap: wrap;
        gap:35px;
        align-items: flex-start;
    }

    .info-box {
        flex:1;
        background: #f7f9f7;
        padding: 30px;
        border-radius:15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    }

    .info-box h2 {
        font-size: 26px;
        color:#2D4C2F;
        font-weight:700;
        margin-bottom:20px;
    }

    .info-item {
        margin:18px 0;
        font-size:17px;
        display:flex;
        align-items:center;
        gap:10px;
        color:#444;
    }

    .info-item i {
        background:#D9EF82;
        padding:10px;
        border-radius:50%;
        color:#1C4427;
        font-size:18px;
    }

    /* ========== Form ========== */
    .contact-form {
        flex:1;
        background:#fff;
        padding:30px;
        border-radius:15px;
        box-shadow:0 5px 25px rgba(0,0,0,0.08);
    }

    .contact-form input,
    .contact-form textarea {
        width:100%;
        border:1px solid #ddd;
        padding:13px;
        border-radius:8px;
        margin-bottom:15px;
        font-size:15px;
        transition:.3s;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color:#9cc752;
        box-shadow:0 0 8px rgba(156,199,82,0.4);
    }

    .contact-form button {
        background:#9cc752;
        padding:14px;
        border:none;
        color:#fff;
        font-weight:700;
        border-radius:10px;
        cursor:pointer;
        width:100%;
        transition:.3s;
        font-size: 17px;
    }

    .contact-form button:hover {
        background:#8cc046;
        transform:scale(1.03);
    }

    /* ========== Branches ========== */
    .branches {
        margin:60px auto;
        max-width:1200px;
    }

    .branches h2 {
        text-align:center;
        color:#244a2f;
        margin-bottom:30px;
        font-size:2rem;
        font-weight:bold;
    }

    .branches-grid {
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;
    }

    .branch-card {
        background:#fff;
        border-radius:12px;
        box-shadow:0 5px 20px rgba(0,0,0,0.06);
        padding:20px;
        text-align:center;
        transition:.3s;
    }

    .branch-card:hover {
        transform:translateY(-7px);
        box-shadow:0 10px 25px rgba(0,0,0,.12);
    }

    .branch-card img {
        width:100%;
        height:170px;
        object-fit:cover;
        border-radius:8px;
        margin-bottom:12px;
    }

    .branch-card a {
        background:#D9EF82;
        color:#333;
        padding:7px 14px;
        display:inline-block;
        border-radius:8px;
        font-weight:700;
        text-decoration:none;
        transition:.3s;
    }

    .branch-card a:hover {
        background:#bddf5e;
    }

    /* ========== Map ========== */
    .map-box iframe {
        width:100%;
        height:380px;
        border-radius: 20px;
        margin-top:40px;
        box-shadow: 0 5px 20px rgba(0,0,0,.08);
    }
</style>
@endpush
{{-- ========== HEADER ========== --}}
<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/contact-us-6921414_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1>{{ __('messages.contact') }}</h1>
    <p>{!! app()->getLocale() == 'en' ? $setting->name_en : $setting->name !!}. {{ __('messages.always_service') }}🌿</p>
</section>

{{-- ========== FIXED INFO TEXT ========== --}}
<div class="intro-text">
    {{-- توفر شركة <strong>{!! app()->getLocale() == 'en' ? $setting->name_en : $setting->name !!}</strong> خدمات دعم للمزارع، بيع البذور والمشاتل، مكافحة الآفات،
    وتوفير مضخات الري الحديثة بأعلى جودة، ويسعدنا تواصلك معنا دائماً لأي استفسار أو تعاون. --}}
        {!! __('messages.intro_text', [
        'name' => app()->getLocale() == 'en' ? $setting->name_en : $setting->name
    ]) !!}

</div>

{{-- ========== CONTACT BLOCKS ========== --}}
<div class="contact-container">

    {{-- معلومات التواصل --}}
    <div class="info-box">
        <h2>{{ __('messages.Official_contact_information') }}</h2>

        <div class="info-item"><i class="fa fa-phone"></i> {{ $settings->phone ?? '---' }}</div>
        <div class="info-item"><i class="fa fa-envelope"></i> {{ $settings->email ?? '---' }}</div>
        <div class="info-item"><i class="fa fa-map-marker"></i>{!! app()->getLocale() == 'en' ? $setting->address_en : $setting->address !!}</div>
        <div class="info-item"><i class="fa fa-whatsapp"></i> {{ $settings->whatsapp ?? '---' }}</div>
    </div>

    {{-- نموذج رسالة --}}
    <div class="contact-form">
        <h2 style="margin-bottom:15px;">{{ __('messages.Send_us_a_message_now') }}</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}">
            @csrf

            <input type="text" name="name" placeholder="{{ __('messages.full_name') }}" required>
            <input type="email" name="email" placeholder="{{ __('messages.email') }}" required>
            <input type="text" name="phone" placeholder="{{ __('messages.phone') }}">
            <input type="text" name="subject" placeholder="{{ __('messages.subject') }}">
            <textarea name="message" rows="5" placeholder="{{ __('messages.message') }}..." required></textarea>

            <button> {{ __('messages.Send_message') }} ✅</button>
        </form>
    </div>

</div>

{{-- ========== DISPLAY MAP CORRECTLY ========== --}}
@php
    $map = $settings->map_embed;

    // فك ترميز URL إن وجد
    $map = urldecode($map);
@endphp

<div class="map-box">

    {{-- إن كانت iframe جاهزة --}}
    {{-- @if(strpos($map, '<iframe') !== false)
        {!! $map !!}
    @else --}}
        {{-- إن كانت رابط فقط مثل: riyadh أو https --}}
        <iframe
            width="100%"
            height="380"
            style="border-radius:20px;border:0;"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.7637538917015!2d46.83074057519352!3d24.666258878056574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f077e998b8b79%3A0x8a56f072e1ab801a!2sIbn%20Majah%2C%20Riyadh!5e0!3m2!1sen!2ssa!4v1763969285802!5m2!1sen!2ssa">
        </iframe>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.7637538917015!2d46.83074057519352!3d24.666258878056574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f077e998b8b79%3A0x8a56f072e1ab801a!2sIbn%20Majah%2C%20Riyadh!5e0!3m2!1sen!2ssa!4v1763969285802!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
    {{-- @endif --}}
{{-- {{ $settings->map_embed }} --}}

</div>

{{-- ========== BRANCHES ========== --}}
<section class="branches">
    <h2>📍{!! __('messages.Hospitality_Company_branches', [
        'name' => app()->getLocale() == 'en' ? $setting->name_en : $setting->name
    ]) !!}
    </h2>

    <div class="branches-grid">
        @foreach($branches as $branch)
            <div class="branch-card">
                @if($branch->image)
                    <img src="{{ asset('storage/'.$branch->image) }}">
                @endif

                <h3> {!! app()->getLocale() == 'en' ? $branch->name_en : $branch->name !!}</h3>
                <p> {!! app()->getLocale() == 'en' ? $branch->address_en : $branch->address !!}</p>
                <p>{{ $branch->phone }}</p>

                <a href="{{ $branch->map_link }}" target="_blank">{{ __('messages.View_Site') }}</a>
            </div>
        @endforeach
    </div>
</section>

@endsection
