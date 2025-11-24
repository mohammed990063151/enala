@extends('admin.layouts.dashboard.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
    <div class="row" style="display: flex; align-items: center;">
        <div class="col-xs-8">
            <h1><i class="fa fa-address-card"></i>  إعدادات بانر الصفحة الرئيسية</h1>
        </div>
        <div class="col-xs-4 text-left">
            <button class="btn btn-primary" data-toggle="modal" data-target="#seoModal">
                ⚙️ تعديل إعدادات SEO
            </button>
        </div>
    </div>
</section>


        <section class="content">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">تحديث بيانات بانر</h3>

                </div>
                <div class="box-body">
                    @include('partials._errors')
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('dashboard.sections.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label>عنوان القسم</label>
                            <input type="text" name="title" class="form-control ckeditor"
                                value="{{ old('title', $section->title ?? '') }}" required>
                        </div>
                        <div class="form-group">
                            <label>عنوان  القسم EN</label>
                            <input type="text" name="title_en" class="form-control ckeditor"
                                value="{{ old('title_en', $section->title_en ?? '') }}" required>
                        </div>
                        <div class="form-group">
                            <label>وصف القسم</label>
                            <textarea name="description" class="form-control ckeditor" rows="4" style="direction: rtl; text-align: right;">{{ old('description', $section->description ?? '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>وصف القسم EN</label>
                            <textarea name="description_en" class="form-control ckeditor" rows="4" style="direction: rtl; text-align: right;">{{ old('description_en', $section->description_en ?? '') }}</textarea>
                        </div>


                        <div class="form-group">
                            <label>نص الزر</label>
                            <input type="text" name="button_text" class="form-control"
                                value="{{ old('button_text', $section->button_text ?? '') }}">
                        </div>
                         <div class="form-group">
                            <label>نص الزر EN</label>
                            <input type="text" name="button_text_en" class="form-control"
                                value="{{ old('button_text_en', $section->button_text_en ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>عدد العملاء</label>
                            <input type="number" name="clients_count" class="form-control"
                                value="{{ old('clients_count', $section->clients_count ?? '') }}">
                        </div>


                        {{-- <div class="form-group">
                            <label>ملف القسم (صورة أو فيديو)</label>
                            <input type="file" name="media" class="form-control" accept="image/*,video/*">

                            @if (isset($section->image))
                                @php
                                    $isVideo = Str::endsWith($section->image, ['.mp4', '.webm', '.ogg']);
                                @endphp

                                @if ($isVideo)
                                    <video src="{{ asset($section->image) }}" controls
                                        style="width:200px; margin-top:10px;"></video>
                                @else
                                    <img src="{{ asset($section->image) }}" alt="Section Media"
                                        style="width: 120px; margin-top: 10px;">
                                @endif
                            @endif
                        </div> --}}
                        <div class="form-group">
                            <label>ملف القسم (صورة أو فيديو)</label>
                            <input type="file" name="media" class="form-control" accept="image/*,video/*">

                            @if (isset($section->image))
                                @php
                                    $ext = strtolower(pathinfo($section->image, PATHINFO_EXTENSION));
                                    $isVideo = in_array($ext, ['mp4', 'webm', 'ogg']);
                                @endphp

                                <div class="media-preview mt-3 p-3 border rounded shadow-sm text-center bg-light"
                                    style="max-width: 320px;">
                                    <h5 class="mb-2 text-muted">المعاينة الحالية</h5>

                                    @if ($isVideo)
                                        <video src="{{ asset($section->image) }}" controls
                                            style="width:100%; border-radius:8px; object-fit:cover; max-height:200px;">
                                        </video>
                                    @else
                                        <img src="{{ asset($section->image) }}" alt="Section Media"
                                            style="width:100%; border-radius:8px; object-fit:cover; max-height:200px;">
                                    @endif

                                    <p class="text-muted mt-2 small mb-0">
                                        {{ strtoupper($ext) }} — {{ basename($section->image) }}
                                    </p>
                                </div>
                            @endif
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> حفظ</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
     {{-- @include('admin.seo.modal') --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof CKEDITOR !== 'undefined') {
                CKEDITOR.replace('description', {
                    contentsLangDirection: 'rtl',
                    contentsLanguage: 'ar',
                    language: 'ar',
                    height: 250,
                    removeButtons: 'Subscript,Superscript,Anchor,Image', // اختياري
                    toolbarCanCollapse: true
                });
            }
        });
    </script>


 <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof CKEDITOR !== 'undefined') {
                CKEDITOR.replace('description_en', {
                    contentsLangDirection: 'rtl',
                    contentsLanguage: 'ar',
                    language: 'ar',
                    height: 250,
                    removeButtons: 'Subscript,Superscript,Anchor,Image', // اختياري
                    toolbarCanCollapse: true
                });
            }
        });
    </script>


@endsection
