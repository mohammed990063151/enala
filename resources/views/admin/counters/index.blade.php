@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>إعدادات الإحصائيات</h1>
    </section>

    <section class="content">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('dashboard.counters.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                @foreach([1,2,3,4] as $i)
                <div class="col-md-3">
                    <label>عنوان {{ $i }}</label>
                    <input type="text" name="title{{ $i }}" class="form-control" 
                           value="{{ $counter->{'title'.$i} }}">

                    <label class="mt-2">عدد {{ $i }}</label>
                    <input type="number" name="count{{ $i }}" class="form-control" 
                           value="{{ $counter->{'count'.$i} }}">
                </div>
                @endforeach

            </div>

            <button class="btn btn-success mt-3">حفظ</button>
        </form>

    </section>

</div>
@endsection
