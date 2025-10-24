@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>تعديل الخدمة</h1>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">تحديث بيانات الخدمة</h3>
            </div>

            <div class="box-body">

                @include('partials._errors')

              <form action="{{ route('dashboard.Pag_services.update', $Pag_service) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')


                    <!-- العنوان -->
                    <div class="form-group">
                        <label>عنوان الخدمة</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $Pag_service->title) }}">
                    </div>

                    <!-- الوصف -->
                    <div class="form-group">
                        <label>الوصف</label>
                        <textarea name="description" class="form-control" rows="4">{{ old('description', $Pag_service->description) }}</textarea>
                    </div>

                    <!-- الايقونة -->
                    <div class="form-group">
                        <label>الأيقونة (FontAwesome)</label>
                        <input type="text" name="icon" class="form-control" value="{{ old('icon', $Pag_service->icon) }}">
                        <small>مثال: fa fa-tree</small>
                    </div>

                    <!-- ترتيب الظهور -->
                    <div class="form-group">
                        <label>الترتيب</label>
                        <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $Pag_service->sort_order) }}">
                    </div>

                    <!-- صورة الخدمة -->
                    <div class="form-group">
                        <label>الصورة</label>
                        <input type="file" name="image" class="form-control">

                        @if($Pag_service->image)
                            <img src="{{ asset($Pag_service->image) }}" style="width:120px;margin-top:10px;border-radius:5px;">
                        @endif
                    </div>

                    <!-- زر الحفظ -->
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> تحديث
                    </button>
                </form>

            </div>
        </div>

    </section>
</div>
@endsection
