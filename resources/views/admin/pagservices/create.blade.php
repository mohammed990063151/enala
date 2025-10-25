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
        transform: scale(1.08);
    }

    .pill {
        background: #eaffea;
        border: 1px solid #27ae60;
        padding: 5px 13px;
        border-radius: 25px;
        font-size: 12px;
        margin: 3px;
        display: inline-block;
        color:#1c5530;
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
</style>


<div class="content-wrapper">

<section class="content-header">
    <h2 class="page-title">
        <i class="fa fa-plus-circle"></i> إضافة خدمة جديدة
    </h2>
</section>


<section class="content">
    <div class="box-wrapper">

        @include('partials._errors')

        <form method="POST" action="{{ route('dashboard.Pag_services.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <!-- الاسم -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">اسم الخدمة</label>
                    <i class="fa fa-leaf input-icon"></i>
                    <input class="form-control" name="title" placeholder="مثال: تنسيق حدائق">
                </div>

                <!-- أيقونة -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">أيقونة FontAwesome</label>
                    <i class="fa fa-icons input-icon"></i>
                    <input class="form-control" name="icon" placeholder="fa fa-tree">
                </div>

                <!-- ترتيب -->
                <div class="col-md-4 mb-3 position-relative">
                    <label class="form-label">ترتيب الظهور</label>
                    <i class="fa fa-sort-amount-down input-icon"></i>
                    <input name="sort_order" class="form-control" placeholder="مثال: 1">
                </div>

                <!-- الصورة -->
                <div class="col-md-8 mb-3">
                    <label class="form-label"><i class="fa fa-image"></i> صورة الخدمة</label>
                    <input type="file" name="image" class="form-control" onchange="previewService(event)">

                    <div class="preview mt-2" id="imgPreview" style="display:none;">
                        <img id="previewImg">
                    </div>
                </div>

                <!-- الوصف -->
                <div class="col-md-12 mb-3 position-relative">
                    <label class="form-label">الوصف</label>
                    <i class="fa fa-align-right input-icon"></i>
                    <textarea name="description" class="form-control" rows="4" placeholder="شرح للخدمة"></textarea>
                </div>

            </div>

            <button class="btn-save"><i class="fa fa-save"></i> حفظ الخدمة</button>

        </form>

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
