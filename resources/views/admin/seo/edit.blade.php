@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <h3>إعدادات SEO لصفحة: {{ $seo->page }}</h3>

    <form action="{{ route('seo.update', $seo->page) }}" method="POST">
        @csrf

        <label>العنوان (Title):</label>
        <input type="text" class="form-control" name="title" value="{{ $seo->title }}">

        <label>الوصف (Description):</label>
        <textarea class="form-control" name="description">{{ $seo->description }}</textarea>

        <label>الكلمات المفتاحية (Keywords):</label>
        <textarea class="form-control" name="keywords">{{ $seo->keywords }}</textarea>

        <label>Canonical URL:</label>
        <input type="text" class="form-control" name="canonical" value="{{ $seo->canonical }}">

        <label>OG Image (رابط الصورة):</label>
        <input type="text" class="form-control" name="og_image" value="{{ $seo->og_image }}">

        <button class="btn btn-success mt-3">تحديث</button>
    </form>
</div>
@endsection
