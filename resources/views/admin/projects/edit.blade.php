
@extends('admin.layouts.dashboard.app')
@section('title','تعديل المشروع')

@section('content')
<style>
.feature-card {
    background: #fff;
    transition: all .3s ease;
}
.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}
.feature-card.saving {
    opacity: 0.6;
}
.feature-card.saved {
    background: #eafaf1 !important;
    transition: background 1s ease;
}
</style>

<style>
    .box-wrapper {
        background: #fff;
        border-radius: 16px;
        padding: 35px 30px;
        border: 1px solid #e5e9ec;
        box-shadow: 0 4px 25px rgba(0,0,0,0.05);
        transition: all .3s ease;
    }
    .box-wrapper:hover { box-shadow: 0 6px 30px rgba(0,0,0,0.08); }
    .form-label { font-weight: 600; color: #34495E; }
    .form-control { border-radius: 8px !important; }

    .old-img {
        width: 150px; height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin: 6px;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0,0,0,0.08);
    }

    .delete-btn {
        position: absolute;
        top: 5px; right: 5px;
        width: 26px; height: 26px;
        border-radius: 50%;
        background: #e74c3c; color:#fff;
        border:none;
        display:flex; justify-content:center; align-items:center;
        cursor:pointer;
        box-shadow:0 0 5px rgba(0,0,0,0.2);
    }

    .img-wrapper { position: relative; display: inline-block; }
    .feature-card {
    transition: transform .3s ease, box-shadow .3s ease;
}
.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

</style>

<div class="content-wrapper">
<section class="content-header">
    <h2 class="page-title"><i class="fa fa-edit text-success me-2"></i> تعديل المشروع: <span class="text-primary">{{ $project->title }}</span></h2>
</section>

<section class="content">
<div class="box-wrapper">

<form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- العنوان والموقع --}}
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">عنوان المشروع</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">الموقع</label>
            <input type="text" name="location" class="form-control" value="{{ $project->location }}">
        </div>
    </div>

    {{-- الوصف المختصر --}}
    <div class="mb-3">
        <label class="form-label">الوصف المختصر</label>
        <textarea name="short_description"  id="short_description" class="form-control" rows="3">{!! $project->short_description !!}</textarea>
    </div>

    {{-- الوصف الكامل --}}
    <div class="mb-3">
        <label class="form-label">الوصف الكامل</label>
        <textarea name="description" id="description" class="form-control ckeditor" rows="5">{!! $project->description !!}</textarea>
    </div>

    {{-- تاريخ الإنجاز --}}
    <div class="mb-3 col-md-6">
        <label class="form-label">تاريخ الإنجاز</label>
        <input type="date" name="completion_date" class="form-control" value="{{ $project->completion_date }}">
    </div>
</br /></br /></br />
    {{-- الصورة الرئيسية --}}
    <div class="mb-4">
        <label class="form-label">الصورة الرئيسية</label>
        <input type="file" name="image" class="form-control" onchange="previewImage(event)">
        @if($project->image)
            <img id="preview" src="{{ asset($project->image) }}" class="old-img mt-2">
        @else
            <img id="preview" class="old-img mt-2 d-none">
        @endif
    </div>

    {{-- صور جديدة --}}
    <div class="mb-4">
        <label class="form-label">صور جديدة للمعرض</label>
        <input type="file" name="gallery[]" class="form-control" multiple accept="image/*" onchange="previewMultiple(event)">
        <div id="multiPreview" class="d-flex flex-wrap mt-3"></div>
    </div>

    {{-- المعرض الحالي --}}
    @if($project->images->count())
        <h5 class="fw-bold text-primary mb-3"><i class="fa fa-images"></i> الصور الحالية</h5>
        <div class="image-grid">
            @foreach($project->images as $img)
                <div class="position-relative img-wrapper">
                    <img src="{{ asset($img->image) }}" class="old-img">
                    <button type="button" class="delete-btn" onclick="deleteImage({{ $project->id }}, {{ $img->id }}, this)">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            @endforeach
        </div>
    @endif
 {{-- 🎯 مميزات المشروع --}}
<h4 class="fw-bold text-success mb-3 mt-4">
    <i class="fa fa-star"></i> مميزات المشروع
</h4>

<div id="featuresContainer" class="row g-3">
    @forelse($project->features as $feature)
        <div class="col-md-4 col-lg-3">
            <div class="feature-card border rounded shadow-sm p-3 position-relative bg-light" id="feature-{{ $feature->id }}">

                {{-- زر الحذف --}}
                <button type="button"
                        class="btn btn-sm btn-outline-danger position-absolute top-0 end-0 m-1 feature-delete"
                        data-id="{{ $feature->id }}">
                    <i class="fa fa-trash"></i>
                </button>

                <div class="text-center mb-2">
                    <i class="{{ $feature->icon ?? 'fa-solid fa-star' }} fa-2x text-success mb-2"></i>
                </div>

                <div class="mb-2">
                    <label class="small fw-bold">عنوان الميزة</label>
                    <input type="text" class="form-control form-control-sm f-title" value="{{ $feature->title }}">
                </div>

                <div class="mb-2">
                    <label class="small fw-bold">أيقونة (FontAwesome)</label>
                    <input type="text" class="form-control form-control-sm f-icon" value="{{ $feature->icon }}">
                </div>

                <div class="mb-3">
                    <label class="small fw-bold">الوصف</label>
                    <textarea class="form-control form-control-sm f-desc" rows="2">{{ $feature->description }}</textarea>
                </div>

                <button type="button"
                        class="btn btn-success btn-sm w-100 save-feature"
                        data-id="{{ $feature->id }}">
                    <i class="fa fa-save"></i> حفظ التعديلات
                </button>
            </div>
        </div>
    @empty
        <p class="text-muted">لا توجد مميزات حالياً.</p>
    @endforelse
</div>

{{-- ➕ إضافة مميزات جديدة --}}
<div class="card mt-4 shadow-sm">
    <div class="card-body">
        <h5 class="mb-3">➕ إضافة ميزة جديدة</h5>
        <div id="newFeatures"></div>
        <button id="addNewFeature" type="button" class="btn btn-outline-success mb-3">
            <i class="fa fa-plus"></i> إضافة حقل جديد
        </button>
        <button id="saveAllFeatures" type="button" class="btn btn-success">
            <i class="fa fa-save"></i> حفظ كل المميزات الجديدة
        </button>
    </div>
</div>

    <div class="mt-5 text-center">
        <button type="submit" class="btn btn-save"><i class="fa fa-check me-1"></i> حفظ التغييرات</button>
        <a href="{{ route('dashboard.projects.index') }}" class="btn btn-secondary ms-2 px-4">رجوع</a>
    </div>
</form>

</div>




</section>
</div>

{{-- Scripts --}}

<script>
/* 📝 حفظ تعديل ميزة */
document.addEventListener('click', e => {
    if (e.target.closest('.save-feature')) {
        const btn = e.target.closest('.save-feature');
        const id = btn.dataset.id;
        const card = btn.closest('.feature-card');
        const title = card.querySelector('.f-title').value.trim();
        const icon = card.querySelector('.f-icon').value.trim();
        const description = card.querySelector('.f-desc').value.trim();

        if (!title) return alert('⚠️ أدخل عنوان الميزة');

        btn.disabled = true;
        btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> جاري الحفظ...';
        card.classList.add('saving');

        fetch(`{{ url('dashboard/projects/features') }}/${id}`, {
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ title, icon, description })
        })
        .then(r => r.json())
        .then(d => {
            btn.disabled = false;
            btn.innerHTML = '<i class="fa fa-save"></i> حفظ التعديلات';
            card.classList.remove('saving');
            if (d.success) {
                card.classList.add('saved');
                setTimeout(() => card.classList.remove('saved'), 1200);
            } else {
                alert('❌ فشل الحفظ: ' + (d.message || 'حدث خطأ'));
            }
        })
        .catch(() => {
            btn.disabled = false;
            card.classList.remove('saving');
            btn.innerHTML = '<i class="fa fa-save"></i> حفظ التعديلات';
            alert('⚠️ فشل الاتصال بالسيرفر');
        });
    }
});

</script>

<script>
/* 🖼️ معاينة الصورة الرئيسية */
function previewImage(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.classList.remove('d-none');
}

/* إضافة ميزة جديدة */
document.getElementById('addNewFeature').addEventListener('click', () => {
    const container = document.getElementById('newFeatures');
    const i = Date.now();
    const row = `
        <div class="feature-box border rounded p-3 mb-2 shadow-sm">
            <label class="small fw-bold">عنوان الميزة</label>
            <input type="text" class="form-control form-control-sm n-title" placeholder="عنوان الميزة">

            <label class="small fw-bold mt-2">أيقونة (FontAwesome)</label>
            <input type="text" class="form-control form-control-sm n-icon" placeholder="fa-solid fa-leaf">

            <label class="small fw-bold mt-2">الوصف</label>
            <input type="text" class="form-control form-control-sm n-desc" placeholder="وصف مختصر">
        </div>`;
    container.insertAdjacentHTML('beforeend', row);
});

/* حفظ المميزات الجديدة */
document.getElementById('saveAllFeatures').addEventListener('click', () => {
    const newBoxes = document.querySelectorAll('#newFeatures .feature-box');
    const projectId = {{ $project->id }};

    if (newBoxes.length === 0) {
        alert('⚠️ لا توجد مميزات جديدة لإضافتها.');
        return;
    }

    newBoxes.forEach(box => {
        const title = box.querySelector('.n-title').value.trim();
        const icon = box.querySelector('.n-icon').value.trim();
        const description = box.querySelector('.n-desc').value.trim();

        if (!title) {
            alert('❌ يرجى إدخال عنوان الميزة');
            return;
        }

        box.style.opacity = "0.6";

        fetch(`{{ url('dashboard/projects') }}/${projectId}/features`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ title, icon, description })
        })
        .then(r => r.json())
        .then(d => {
            if (d.success) {
                box.style.opacity = "1";
                box.style.backgroundColor = "#eafaf1";
                setTimeout(() => box.remove(), 800);
            } else {
                alert('❌ فشل الحفظ: ' + (d.message || 'حدث خطأ'));
            }
        })
        .catch(() => alert('⚠️ فشل الاتصال بالسيرفر'));
    });

    alert('✅ تم إرسال جميع المميزات الجديدة للحفظ.');
});

document.addEventListener('click', e => {
    if (e.target.closest('.feature-delete')) {
        const btn = e.target.closest('.feature-delete');
        const featureId = btn.dataset.id;
        const projectId = {{ $project->id }};

        if (confirm('هل تريد حذف هذه الميزة؟')) {
            fetch(`{{ url('dashboard/projects') }}/${projectId}/features/${featureId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(r => r.json())
            .then(d => {
                if (d.success) {
                    document.getElementById('feature-' + featureId).remove();
                    alert('✅ تم حذف الميزة بنجاح');
                } else {
                    alert('❌ حدث خطأ أثناء الحذف');
                }
            })
            .catch(() => alert('⚠️ فشل الاتصال بالسيرفر'));
        }
    }
});


/* 📸 معاينة الصور الجديدة مع إمكانية حذفها قبل الإرسال */
function previewMultiple(event) {
    const preview = document.getElementById('multiPreview');
    preview.innerHTML = '';
    Array.from(event.target.files).forEach((file, i) => {
        const reader = new FileReader();
        reader.onload = e => {
            const wrapper = document.createElement('div');
            wrapper.classList.add('img-wrapper');
            wrapper.innerHTML = `
                <img src="${e.target.result}" class="old-img">
                <button type="button" class="delete-btn" onclick="this.closest('.img-wrapper').remove()">
                    <i class="fa fa-times"></i>
                </button>
            `;
            preview.appendChild(wrapper);
        };
        reader.readAsDataURL(file);
    });
}


function deleteImage(projectId, imageId, btn) {
    if(confirm('هل تريد حذف هذه الصورة نهائيًا؟')){
        fetch(`{{ url('dashboard/projects') }}/${projectId}/images/${imageId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(r => r.json())
        .then(d => {
            if(d.success){
                btn.closest('.img-wrapper').remove();
                alert(d.message || '✅ تم حذف الصورة بنجاح');
            } else {
                alert(d.message || '❌ فشل الحذف');
            }
        })
        .catch(() => alert('⚠️ فشل الاتصال بالسيرفر'));
    }
}


/* CKEditor للوصف */
document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('description', {
            contentsLangDirection: 'rtl',
            contentsLanguage: 'ar',
            language: 'ar',
            height: 300,
            removeButtons: 'Subscript,Superscript,Anchor,Image',
            toolbarCanCollapse: true
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('short_description', {
            contentsLangDirection: 'rtl',
            contentsLanguage: 'ar',
            language: 'ar',
            height: 300,
            removeButtons: 'Subscript,Superscript,Anchor,Image',
            toolbarCanCollapse: true
        });
    }
});
</script>
@endsection

