@extends('admin.layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header"><h1>إضافة خدمة</h1></section>

    <section class="content">
        <form method="POST" action="{{ route('pagservices.store') }}" enctype="multipart/form-data">
            @csrf

            <input class="form-control" name="title" placeholder="اسم الخدمة">

            <input class="form-control mt-2" name="icon" placeholder="FontAwesome Icon class">

            <input type="file" name="image" class="form-control mt-2">

            <textarea name="description" class="form-control mt-2" rows="4" placeholder="وصف"></textarea>

            <input name="sort_order" class="form-control mt-2" placeholder="ترتيب الظهور">

            <button class="btn btn-success mt-3">حفظ</button>
        </form>
    </section>
</div>

@endsection
