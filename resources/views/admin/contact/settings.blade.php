@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .contact-settings-box {
        /* background:#f7f9fa; */
        padding:25px;
        border-radius:12px;
        box-shadow:0 4px 20px rgba(0,0,0,0.08);
        transition:.3s;
        margin-bottom:25px;
    }
    .contact-settings-box:hover {
        box-shadow:0 6px 25px rgba(0,0,0,0.12);
    }

    .form-label {
        font-weight:600;
        color:#34495E;
        font-size:14px;
    }

    .input-icon {
        position:absolute;
        right:10px;
        top:10px;
        color:#aaa;
    }

    .form-control {
        padding-right:35px;
    }

    .map-preview {
        margin-top:20px;
        border-radius:12px;
        overflow:hidden;
        box-shadow:0 6px 20px rgba(0,0,0,0.12);
    }

    .section-title {
        font-weight:700;
        margin-bottom:15px;
        display:flex;
        align-items:center;
        gap:6px;
        color:#2c3e50;
        font-size:18px;
    }
    .section-title i {
        color:#D9EF82;
    }
</style>

<div class="content-wrapper">

    {{-- ====== HEADER ====== --}}
    {{-- <section class="content-header">
        <h1><i class="fa fa-envelope"></i> إعدادات صفحة التواصل</h1>
    </section> --}}
    <section class="content-header">
    <div class="row" style="display: flex; align-items: center;">
        <div class="col-xs-8">
           <h1><i class="fa fa-envelope"></i> إعدادات صفحة التواصل</h1>
        </div>
        <div class="col-xs-4 text-left">
            <button class="btn btn-primary" data-toggle="modal" data-target="#seoModal">
                ⚙️ تعديل إعدادات SEO
            </button>
        </div>
    </div>
</section>



    {{-- ====== FORM BOX ====== --}}
    <section class="box box-primary content">

        @if(session('success'))
            <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ session('success') }}</div>
        @endif

        <div class="contact-settings-box">

            <div class="section-title">
                <i class="fa fa-edit"></i> تعديل بيانات التواصل
            </div>

            <form action="{{ route('dashboard.contact.settings') }}" method="POST">
                @csrf @method('PUT')

                <div class="row">
{{-- <pre>{{ print_r($setting, true) }}</pre> --}}

                    {{-- عنوان الصفحة --}}
                    <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">عنوان الصفحة</label>
                        {{-- <i class="fa fa-heading input-icon"></i> --}}

                        <input class="form-control" name="title" value="{{ $settinges->title}}" placeholder="مثال: تواصل معنا">
                    </div>
                        <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">عنوان الصفحة (English)</label>
                        {{-- <i class="fa fa-heading input-icon"></i> --}}

                        <input class="form-control" name="title_en" value="{{ $settinges->title_en}}" placeholder="Example: Contact us">
                    </div>

                    {{-- الوصف --}}
                    <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">وصف قصير</label>
                        {{-- <i class="fa fa-align-left input-icon"></i> --}}
                        <input class="form-control" name="subtitle" value="{{ $settinges->subtitle }}" placeholder="كتابة تعريف مختصر">
                    </div>
                    <div class="col-md-6 mb-3 position-relative">
                        <label class="form-label">وصف قصير (English)</label>
                        {{-- <i class="fa fa-align-left input-icon"></i> --}}
                        <input class="form-control" name="subtitle_en" value="{{ $settinges->subtitle_en }}" placeholder="Write a brief definition.">
                    </div>

                    {{-- الهاتف --}}
                    <div class="col-md-4 mb-3 position-relative">
                        <label class="form-label">رقم الهاتف</label>
                        {{-- <i class="fa fa-phone input-icon"></i> --}}
                        <input class="form-control" name="phone" value="{{ $settinges->phone }}">
                    </div>

                    {{-- البريد --}}
                    <div class="col-md-4 mb-3 position-relative">
                        <label class="form-label">البريد الإلكتروني</label>
                        {{-- <i class="fa fa-envelope input-icon"></i> --}}
                        <input class="form-control" name="email" value="{{ $settinges->email }}">
                    </div>

                    {{-- واتساب --}}
                    <div class="col-md-4 mb-3 position-relative">
                        <label class="form-label">واتساب</label>
                        {{-- <i class="fa fa-whatsapp input-icon"></i> --}}
                        <input class="form-control" name="whatsapp" value="{{ $settinges->whatsapp }}">
                    </div>

                    {{-- العنوان --}}
                    <div class="col-md-12 mb-3 position-relative">
                        <label class="form-label">العنوان</label>
                        {{-- <i class="fa fa-map-marker input-icon"></i> --}}
                        <input class="form-control" name="address" value="{{ $settinges->address }}">
                    </div>
                    <div class="col-md-12 mb-3 position-relative">
                        <label class="form-label">العنوان (English)</label>
                        {{-- <i class="fa fa-map-marker input-icon"></i> --}}
                        <input class="form-control" name="address_en" value="{{ $settinges->address_en }}">
                    </div>

                    {{-- MAP EMBED --}}
                    <div class="col-md-12 mb-3 position-relative">
                        <label class="form-label">كود خريطة Google</label>
                        {{-- <i class="fa fa-map input-icon"></i> --}}
                        <textarea class="form-control" name="map_embed" rows="3">{{ $settinges->map_embed }}</textarea>
                    </div>

                </div>

                <button class="btn btn-success btn-lg mt-2">
                    <i class="fa fa-save"></i> حفظ التغييرات
                </button>

            </form>

        </div>

        {{-- ====== LIVE MAP PREVIEW ====== --}}
        <div class="section-title mt-4">
            <i class="fa fa-eye"></i> معاينة الخريطة مباشرة
        </div>

        <div class="map-preview">
            {!! $settinges->map_embed !!}
        </div>

    </section>

</div>
@endsection
