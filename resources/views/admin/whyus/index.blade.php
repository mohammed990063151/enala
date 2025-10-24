@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>إعدادات لماذا نحن؟</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header"><h3 class="box-title">تحديث البيانات</h3></div>
            <div class="box-body">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('dashboard.whyus.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>عنوان القسم</label>
                        <input type="text" name="title" class="form-control" value="{{ $whyus->title }}">
                    </div>

                    <div class="form-group">
                        <label>وصف</label>
                        <textarea name="description" class="form-control" rows="3">{{ $whyus->description }}</textarea>
                    </div>

                    <div class="row">
                        @foreach(['image1','image2','image3','image4'] as $img)
                        <div class="col-md-3">
                            <label>{{ $img }}</label>
                            <input type="file" name="{{ $img }}" class="form-control">

                            @if($whyus->$img)
                                <img src="{{ asset($whyus->$img) }}" width="120" class="mt-2">
                            @endif
                        </div>
                        @endforeach
                    </div>

                    <button class="btn btn-primary mt-3">حفظ</button>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection
