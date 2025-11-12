{{-- @extends('admin.layouts.dashboard.app')

@section('title','إضافة مشروع جديد')

@section('content')
<style>
.form-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 0 25px rgba(0,0,0,0.05);
}
.btn-save {
    background: #27ae60;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: bold;
}
.btn-save:hover {
    background: #1e8f4c;
}
.preview-img {
    width: 150px;
    border-radius: 8px;
    margin-top: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
</style>

<div class="content-wrapper">
<section class="content-header">
    <h2 class="page-title"><i class="fa fa-plus-circle"></i> إضافة مشروع جديد</h2>
</section>

<section class="content">
<div class="container">
<div class="form-card">

<form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="form-label fw-bold">عنوان المشروع</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">الوصف</label>
        <textarea name="description" class="form-control ckeditor " rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">الموقع</label>
        <input type="text" name="location" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">تاريخ الإنجاز</label>
        <input type="date" name="completion_date" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">الصورة الرئيسية</label>
        <input type="file" name="image" class="form-control" onchange="previewImage(event)">
        <img id="preview" class="preview-img d-none">
    </div>

    <button class="btn btn-save"><i class="fa fa-check"></i> حفظ المشروع</button>
    <a href="{{ route('dashboard.projects.index') }}" class="btn btn-secondary ms-2">رجوع</a>
</form>

</div>
</div>
</section>
</div>

<script>
function previewImage(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.classList.remove('d-none');
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
@endsection --}}
@extends('admin.layouts.dashboard.app')
@section('title','إضافة مشروع جديد')

@section('content')
<style>
.form-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 0 25px rgba(0,0,0,0.05);
}
.btn-save {
    background: #27ae60;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: bold;
}
.btn-save:hover {
    background: #1e8f4c;
}
.preview-img {
    width: 150px;
    border-radius: 8px;
    margin-top: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
</style>

<div class="content-wrapper">
<section class="content-header">
  <h2 class="page-title"><i class="fa fa-plus-circle"></i> إضافة مشروع جديد</h2>
</section>

<section class="content">
{{-- <div class="container"> --}}
<div class="form-card">

<form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">
    <label class="form-label fw-bold">عنوان المشروع</label>
    <input type="text" name="title" class="form-control" required>
  </div>
 <div class="mb-3">
    <label class="form-label fw-bold">الوصف (المختصر)</label>
    <textarea name="short_description" id="short_description" class="form-control ckeditor" rows="6"></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label fw-bold">الوصف (العامة)</label>
    <textarea name="description" id="description" class="form-control ckeditor" rows="6"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label fw-bold">الموقع</label>
    <input type="text" name="location" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label fw-bold">تاريخ الإنجاز</label>
    <input type="date" name="completion_date" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label fw-bold">الصورة الرئيسية</label>
    <input type="file" name="image" class="form-control" onchange="previewImage(event)">
    <img id="preview" class="preview-img d-none">
  </div>

  <div class="mb-3">
    <label class="form-label fw-bold">معرض الصور (يمكن اختيار عدة صور)</label>
    <input type="file" name="gallery[]" class="form-control" multiple>
    <small class="text-muted d-block mt-1">PNG/JPG, حتى 4MB للصورة</small>
  </div>



  <hr>
  <h5 class="mt-3">مميّزات المشروع</h5>
  <div id="features-wrap"></div>
  <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="addFeature()">+ إضافة ميزة</button>

  <div class="mt-4">
    <button class="btn btn-save"><i class="fa fa-check"></i> حفظ المشروع</button>
    <a href="{{ route('dashboard.projects.index') }}" class="btn btn-secondary ms-2">رجوع</a>
  </div>
</form>

</div>
{{-- </div> --}}
</section>
</div>

<script>
function previewImage(event) {
  const img = document.getElementById('preview');
  img.src = URL.createObjectURL(event.target.files[0]);
  img.classList.remove('d-none');
}

function addFeature(icon = '', title = '', desc = '') {
  const wrap = document.getElementById('features-wrap');
  const idx = document.querySelectorAll('#features-wrap .feature-item').length;
  const html = `
    <div class="feature-item border rounded p-3 mb-2">
      <div class="row g-2">
        <div class="col-md-3">
          <input type="text" class="form-control" name="features[${idx}][icon]" placeholder="fa fa-leaf" value="${icon}">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" name="features[${idx}][title]" placeholder="عنوان الميزة" value="${title}">
        </div>
        <div class="col-md-5">
          <input type="text" class="form-control" name="features[${idx}][description]" placeholder="وصف مختصر" value="${desc}">
        </div>
      </div>
    </div>`;
  wrap.insertAdjacentHTML('beforeend', html);
}
document.addEventListener('DOMContentLoaded', ()=> addFeature());
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof CKEDITOR !== 'undefined') {
    CKEDITOR.replace('description', {
      contentsLangDirection: 'rtl',
      contentsLanguage: 'ar',
      language: 'ar',
      height: 300,
      toolbarCanCollapse: true
    });
  }
});
</script>
@endsection
