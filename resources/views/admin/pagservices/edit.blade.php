@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .box-wrapper {
        background: #f3f6f8;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e7ecef;
        transition: .3s;
    }
    .box-wrapper:hover {
        box-shadow: 0 0 25px rgba(0,0,0,.08);
    }

    .page-title {
        font-size: 26px;
        font-weight: bold;
        color: #1c5530;
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: bold;
        color: #34495E;
    }

    .form-control {
        border-radius: 8px !important;
    }

    .input-icon {
        position: absolute;
        right: 10px;
        top: 38px;
        color: #aaa;
    }

    .preview img {
        width: 140px;
        height: 140px;
        border-radius: 10px;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 0 10px rgba(0,0,0,.08);
        transition: .3s;
    }
    .preview img:hover {
        transform: scale(1.08) rotate(3deg);
    }

    .btn-save {
        font-size: 16px;
        padding: 10px 30px;
        border-radius: 30px;
        background: #27ae60;
        color:#fff;
        transition:.3s;
    }
    .btn-save:hover {
        background:#1c8b4f;
    }

    .old-img {
        border:2px solid #fff;
        box-shadow:0 0 8px rgba(0,0,0,.09);
        border-radius:12px;
        transition:.3s;
    }
    .old-img:hover {
        transform: scale(1.07);
    }

</style>


<div class="content-wrapper">

<section class="content-header">
    <h2 class="page-title">
        <i class="fa fa-edit"></i> تعديل بيانات الخدمة
    </h2>
</section>

<section class="content">
    <div class="box-wrapper">

        @include('partials._errors')

        @if(session('success'))
            <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
        @endif

        <form action="{{ route('dashboard.Pag_services.update', $Pag_service -> id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                <!-- الاسم -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">اسم الخدمة</label>
                    <i class="fa fa-leaf input-icon"></i>
                    <input class="form-control" name="title" value="{{ old('title', $Pag_service->title) }}">
                </div>

                <!-- الأيقونة -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">أيقونة FontAwesome</label>
                    <i class="fa fa-icons input-icon"></i>
                    <input class="form-control" name="icon" value="{{ old('icon', $Pag_service->icon) }}">
                    <small class="text-muted">مثال: fa fa-tree</small>
                </div>

                <!-- الترتيب -->
                <div class="col-md-4 mb-3 position-relative">
                    <label class="form-label">ترتيب الظهور</label>
                    <i class="fa fa-sort input-icon"></i>
                    <input name="sort_order" class="form-control" value="{{ old('sort_order', $Pag_service->sort_order) }}">
                </div>

                <!-- الصورة الجديدة -->
                <div class="col-md-8 mb-3">
                    <label class="form-label"><i class="fa fa-image"></i> الصورة الجديدة</label>
                    <input type="file" name="image" class="form-control" onchange="previewService(event)">

                    <div class="preview mt-2" id="imgPreview" style="display:none;">
                        <img id="previewImg">
                    </div>
                </div>

                <!-- الوصف -->
                <div class="col-md-12 mb-4 position-relative">
                    <label class="form-label">الوصف</label>
                    <i class="fa fa-align-right input-icon"></i>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $Pag_service->description) }}</textarea>
                </div>

            </div>

            <button class="btn-save"><i class="fa fa-save"></i> تحديث الخدمة</button>

        </form>

        <hr class="my-4">

        <!-- عرض الصورة القديمة -->
        <h4>📌 الصورة الحالية:</h4>
        @if($Pag_service->image)
            <img src="{{ asset($Pag_service->image) }}" style="width:150px;margin-top:10px;" class="old-img">
        @else
            <span class="text-muted">لا توجد صورة محفوظة</span>
        @endif

    </div>
</section>

</div>

<script>
function previewService(event) {
    let output = document.getElementById('previewImg');
    output.src = URL.createObjectURL(event.target.files[0]);
    document.getElementById('imgPreview').style.display = "block";
}
</script>

@endsection
