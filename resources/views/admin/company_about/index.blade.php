{{-- resources/views/dashboard/company_about/index.blade.php --}}
@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>إعدادات صفحة الشركة (About)</h1>
    </section>

    <section class="content">
        @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
        @include('partials._errors')

        <form action="{{ route('dashboard.company_about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <label>العنوان</label>
                    <input type="text" name="title" class="form-control" value="{{ $about->title }}">
                </div>
                <div class="col-md-6">
                    <label>سطر تعريفي مختصر</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $about->subtitle }}">
                </div>

                <div class="col-md-12 mt-3">
                    <label>نبذة تعريفية</label>
                    <textarea name="intro" rows="4" class="form-control">{{ $about->intro }}</textarea>
                </div>

                <div class="col-md-3 mt-3">
                    <label>نقطة 1</label>
                    <input type="text" name="point1" class="form-control" value="{{ $about->point1 }}">
                </div>
                <div class="col-md-3 mt-3">
                    <label>نقطة 2</label>
                    <input type="text" name="point2" class="form-control" value="{{ $about->point2 }}">
                </div>
                <div class="col-md-3 mt-3">
                    <label>نقطة 3</label>
                    <input type="text" name="point3" class="form-control" value="{{ $about->point3 }}">
                </div>
                <div class="col-md-3 mt-3">
                    <label>نقطة 4</label>
                    <input type="text" name="point4" class="form-control" value="{{ $about->point4 }}">
                </div>

                <div class="col-md-6 mt-3">
                    <label>صورة الهيدر (الخلفية)</label>
                    <input type="file" name="header_image" class="form-control">
                    @if($about->header_image)
                        <img src="{{ asset($about->header_image) }}" class="mt-2" width="180" style="border-radius:10px;">
                    @endif
                </div>
            </div>

            <button class="btn btn-success mt-3"><i class="fa fa-save"></i> حفظ</button>
        </form>
    </section>
</div>
@endsection
