<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    @yield('seo')  
    {{-- @php
    $currentRoute = request()->route() ? request()->route()->getName() : 'home';
    $seo = \App\Models\SeoSetting::where('page', $currentRoute)->first();
@endphp

 @php
        $pageName = request()->route()->getName() ?? 'default';
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
    @endif --}}



    {{-- <title> </title>
    <title>{{ $setting->name ?? '' }}   | شركة تنسيق حدائق وتصميم مسطحات خضراء في السعودية</title>

<meta name="description" content="مضياف شركة سعودية متخصصة في تنسيق الحدائق، تصميم المسطحات الخضراء، شبكات الري، زراعة النجيل، وصيانة الحدائق. نقدم خدمات احترافية للمنازل والفلل والاستراحات بأسعار مناسبة وجودة عالية.">
<meta name="keywords" content="شركة تنسيق حدائق, تنسيق حدائق الرياض, تصميم حدائق, شبكات الري, نجيل طبيعي, عشب صناعي, صيانة حدائق, شركة حدائق, تنسيق حدائق منازل, تصميم مسطحات خضراء, تنسيق حدائق فلل, مضياف, مضياف تنسيق حدائق">
<meta name="robots" content="index, follow">
<meta name="author" content="Mudyaf">
<meta property="og:title" content="{{ $setting->name ?? '' }}  | شركة تنسيق حدائق وتصميم مسطحات خضراء">
<meta property="og:description" content="نقدم خدمات تنسيق الحدائق، تصميم المسطحات الخضراء، شبكات الري، النجيل الطبيعي، الجلسات الخارجية، وصيانة الحدائق في السعودية."> --}}

{{-- fb --}}
<meta property="og:image" content="https://mudyaf.sa/img/{{ $setting->logo ?? '' }} ">
<meta property="og:url" content="https://mudyaf.sa/">
<meta property="og:type" content="website">
<meta property="og:locale" content="ar_AR">
{{-- twitter --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="مضياف | شركة تنسيق حدائق وتصميم مسطحات خضراء">
<meta name="twitter:description" content="حلول متكاملة لتنسيق الحدائق وتصميم المسطحات الخضراء وشبكات الري وصيانة الحدائق.">
<meta name="twitter:image" content="https://mudyaf.sa/{{ $setting->logo ?? '' }}">
{{-- Mobile + Language SEO --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Language" content="ar">
<meta charset="UTF-8">




@include('frontend.layouts.head')
<link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.7.3/moyasar.css">
<script src="https://cdn.moyasar.com/mpf/1.7.3/moyasar.js"></script>

{{-- <body class="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }} home wp-singular page-template page-template-elementor_header_footer page page-id-15720 custom-background wp-custom-logo wp-theme-grassroot theme-grassroot has-go-to-top grassroot-plus-1.0.2 grassroot-pro-1.0.0 woocommerce-js tinvwl-theme-style elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-15720" style="font-family: 'Cairo', sans-serif;"> --}}

<body class="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }} home wp-singular page-template page-template-elementor_header_footer page page-id-15720 custom-background wp-custom-logo wp-theme-grassroot theme-grassroot has-go-to-top grassroot-plus-1.0.2 grassroot-pro-1.0.0 woocommerce-js tinvwl-theme-style elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-15720 e--ua-blink e--ua-chrome e--ua-webkit" style="--header-height: 182px;" data-elementor-device-mode="laptop">
    {{-- <div class="pre-loader loader1" style="display: none;">
    <div class="loader-inner">
        <div class="load-container">
            <div class="wdt-droplet wdt-droplet1"></div>
            <div class="wdt-droplet wdt-droplet2"></div>
            <div class="wdt-droplet wdt-droplet3"></div>
            <div class="wdt-droplet wdt-droplet4"></div>
            <div class="wdt-droplet wdt-droplet5"></div>
            <div class="wdt-droplet wdt-droplet6"></div>
            <div class="wdt-droplet wdt-droplet7"></div>
            <div class="wdt-droplet wdt-droplet8"></div>
            <div class="wdt-droplet wdt-droplet9"></div>
            <div class="wdt-droplet wdt-droplet10"></div>
        </div>
    </div>
</div> --}}
    {{-- <a class="skip-link screen-reader-text" href="">Skip to content</a> --}}

    <!-- **Wrapper** -->
    <div class="wrapper" style="font-family: 'Cairo', sans-serif;">

        <!-- ** Inner Wrapper ** -->
        <div class="inner-wrapper">
    @include('frontend.layouts.header')
    @yield('content')





@include('frontend.layouts.footer')
@include('frontend.layouts.script')

              </div><!-- **Inner Wrapper - End** -->

    </div><!-- **Wrapper - End** -->
