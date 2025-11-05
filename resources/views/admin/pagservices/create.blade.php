
@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .box-wrapper {
        /* background: #f3f6f8; */
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e7ecef;
        transition: .3s;
    }
    .box-wrapper:hover { box-shadow: 0 0 25px rgba(0,0,0,.08); }

    .page-title { font-size: 26px; font-weight: bold; color: #1c5530; margin-bottom: 20px; }

    .form-label { font-weight: bold; color: #34495E; }

    .form-control { border-radius: 8px !important; }

    .input-icon { position: absolute; right: 10px; top: 38px; color: #aaa; }

    /* Upload Zone */
    .upload-zone {
        border: 2px dashed #27ae60;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        background: #f8fff9;
        cursor: pointer;
        transition: .3s;
    }
    .upload-zone.dragover {
        background: #eaffea;
        border-color: #1c8b4f;
    }
    .upload-zone i {
        font-size: 48px;
        color: #27ae60;
        margin-bottom: 10px;
    }

    #multiPreview img {
        width: 120px;
        height: 120px;
        border-radius: 10px;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 0 10px rgba(0,0,0,.08);
        margin: 5px;
        transition: .3s;
    }
    #multiPreview img:hover { transform: scale(1.08); }

    .btn-save {
        font-size: 16px;
        padding: 10px 30px;
        border-radius: 30px;
        background: #27ae60;
        color:#fff;
        transition:.3s;
    }
    .btn-save:hover { background:#1c8b4f; }

    /* Features section */
    .feature-box {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,.05);
        margin-bottom: 10px;
    }
</style>


<div class="content-wrapper">

<section class="content-header">
    <h2 class="page-title">
        <i class="fa fa-plus-circle"></i> إضافة خدمة جديدة
    </h2>
</section>

<section class="box box-primary content">
    <div class="box-wrapper">

        @include('partials._errors')

        <form method="POST" action="{{ route('dashboard.Pag_services.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <!-- الاسم -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">اسم الخدمة</label>
                    <i class="fa fa-leaf input-icon"></i>
                    <input class="form-control" name="title" placeholder="مثال: تنسيق حدائق" required>
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

                <!-- رفع صور -->
                <div class="col-md-12 mb-3">
                    <label class="form-label"><i class="fa fa-images"></i> صور إضافية للخدمة</label>
                    <div id="uploadZone" class="upload-zone" onclick="document.getElementById('imageInput').click()">
                        <i class="fa fa-cloud-upload-alt"></i>
                        <p>اسحب الصور هنا أو انقر للاختيار</p>
                        <input type="file" name="images[]" id="imageInput" class="form-control d-none" multiple accept="image/*">
                    </div>
                    <div id="multiPreview" class="d-flex flex-wrap gap-2 mt-3"></div>
                </div>

                <!-- الوصف -->
                <div class="col-md-12 mb-4 position-relative">
                    <label class="form-label">الوصف</label>
                    <i class="fa fa-align-right input-icon"></i>
                    <textarea name="description" class="form-control ckeditor" rows="4" placeholder="شرح للخدمة"></textarea>
                </div>
                  <div class="col-md-12 mb-4 position-relative">
                    <label class="form-label">الوصف</label>
                    <i class="fa fa-align-right input-icon"></i>
                    <textarea name="short_description" class="form-control ckeditor" rows="4" placeholder="شرح للخدمة"></textarea>
                </div>

            </div>

            <!-- ✅ قسم المميزات -->
            <hr>
            <h4 class="text-success fw-bold mb-3"><i class="fa fa-star"></i> مميزات الخدمة</h4>

            <div id="featuresContainer">
                <!-- سيتم توليد الحقول هنا -->
            </div>

            <button type="button" class="btn btn-outline-success mb-3" onclick="addFeature()">
                <i class="fa fa-plus"></i> إضافة ميزة جديدة
            </button>

            <hr>

            <button class="btn-save"><i class="fa fa-save"></i> حفظ الخدمة</button>
        </form>

    </div>
</section>

</div>

<script>
// ✅ سحب وإفلات الصور
const uploadZone = document.getElementById('uploadZone');
const imageInput = document.getElementById('imageInput');
const preview = document.getElementById('multiPreview');

uploadZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadZone.classList.add('dragover');
});
uploadZone.addEventListener('dragleave', () => uploadZone.classList.remove('dragover'));
uploadZone.addEventListener('drop', (e) => {
    e.preventDefault();
    uploadZone.classList.remove('dragover');
    const files = e.dataTransfer.files;
    imageInput.files = files;
    previewImages(files);
});
imageInput.addEventListener('change', (e) => previewImages(e.target.files));

function previewImages(files) {
    preview.innerHTML = '';
    Array.from(files).forEach(file => {
        if (!file.type.startsWith('image/')) return;
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    });
}

// ✅ إضافة مميزات الخدمة
let featureCount = 0;
function addFeature() {
    featureCount++;
    const container = document.getElementById('featuresContainer');
    const div = document.createElement('div');
    div.classList.add('feature-box');
    div.innerHTML = `
        <div class="row align-items-center">
            <div class="col-md-3 mb-2">
                <input type="text" name="features[${featureCount}][title]" class="form-control" placeholder="عنوان الميزة" required>
            </div>
            <div class="col-md-3 mb-2">
                <input type="text" name="features[${featureCount}][icon]" class="form-control" placeholder="fa-solid fa-leaf">
            </div>
            <div class="col-md-4 mb-2">
                <input type="text" name="features[${featureCount}][description]" class="form-control" placeholder="وصف الميزة">
            </div>
            <div class="col-md-2 mb-2 text-center">
                <button type="button" class="btn btn-outline-danger" onclick="this.closest('.feature-box').remove()">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
        </div>
    `;
    container.appendChild(div);
}
</script>
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
        CKEDITOR.replace('short_description', {
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
