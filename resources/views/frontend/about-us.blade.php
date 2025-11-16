
@extends('frontend.layouts.master')

@section('title', __('messages.about') . ' - ' . (app()->getLocale() == 'en'
    ? ($setting->name_en ?? $setting->name)
    : $setting->name
))


@section('content')

@php
$bg = $about->header_image ? asset($about->header_image) : asset('img/criticism-3083099_1280.jpg');
@endphp

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/who-2985525_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size:3rem; color:#D9EF82; margin-bottom:10px;">
      {!! app()->getLocale() == 'en' ? $about->title_en : $about->title !!}
    </h1>
    {{-- @if({!! app()->getLocale() == 'en' ? $about->subtitle_en : $project->subtitle !!}) --}}
    <p style="max-width:800px;margin:auto;font-size:1.1rem;line-height:1.8;color:#eee;">
        {!! app()->getLocale() == 'en' ? $about->subtitle_en : $about->subtitle !!}
    </p>
    {{-- @endif --}}
</section>

<section class="about-page" style="padding:70px 20px;background:#fafafa;font-family:'Cairo',sans-serif;">
    <div class="container" style="max-width:1100px;margin:auto;">
        <div class="intro" style="background:#fff;border-radius:18px;padding:30px;box-shadow:0 2px 10px rgba(0,0,0,.06);">
            {{-- @if({!! app()->getLocale() == 'en' ? $about->intro_en : $project->intro !!}) --}}
                <p style="font-size:1.05rem;color:#333;line-height:1.9;margin:0;">{!! app()->getLocale() == 'en' ? $about->intro_en : $about->intro !!}</p>
            {{-- @endif --}}
        </div>

        <div class="points" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px;margin-top:25px;">
            {{-- @foreach (['point1','point2','point3','point4'] as $p)
                @if($about->$p)
                    <div style="background:#fff;border-radius:14px;padding:18px;border:1px solid #eef4ef;">
                        <span style="font-size:20px;margin-{{ app()->getLocale()=='ar'?'left':'right' }}:8px;">✅</span>
                        <span style="font-weight:700;color:#1b3b26;"> {!! app()->getLocale() == 'en' ? $about->$p.'_en' : $project->$p !!}</span>
                    </div>
                @endif
            @endforeach --}}
            @foreach (['point1','point2','point3','point4'] as $p)
    @if($about->$p)
        <div style="background:#fff;border-radius:14px;padding:18px;border:1px solid #eef4ef;">
            <span style="font-size:20px;margin-{{ app()->getLocale()=='ar' ? 'left' : 'right' }}:8px;">✅</span>

            <span style="font-weight:700;color:#1b3b26;">
                {!! app()->getLocale() == 'en'
                    ? $about->{$p . '_en'}
                    : $about->$p !!}
            </span>
        </div>
    @endif
@endforeach

        </div>
    </div>
</section>

@endsection

