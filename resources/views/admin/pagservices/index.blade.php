{{-- resources/views/dashboard/services/index.blade.php --}}
@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <h1>إدارة الخدمات</h1>

    <a href="{{ route('dashboard.Pag_services.create') }}" class="btn btn-success mb-3">إضافة خدمة جديدة</a>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <table class="table table-bordered">
        <tr>
            <th>الترتيب</th>
            <th>العنوان</th>
            <th>الأيقونة</th>
            <th>صورة</th>
            <th>خيارات</th>
        </tr>
        @foreach($services as $s)
        <tr>
            <td>{{ $s->sort_order }}</td>
            <td>{{ $s->title }}</td>
            <td><i class="{{ $s->icon }}"></i></td>
            <td>@if($s->image)<img src="{{ asset($s->image) }}" width="60">@endif</td>
            <td>
                <a href="{{ route('dashboard.Pag_services.edit',$s) }}" class="btn btn-sm btn-primary">تعديل</a>
                <form action="{{ route('dashboard.Pag_services.destroy',$s) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
