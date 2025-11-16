@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .stats-wrapper {
        /* background:#f7f9fa; */
        /* padding:25px; */
        border-radius:12px;
        box-shadow:0 4px 20px rgba(0,0,0,0.08);
        transition:.3s;
        margin-bottom:25px;
    }
    .stats-wrapper:hover {
        box-shadow:0 6px 25px rgba(0,0,0,0.12);
    }

    .form-label {
        font-weight:600;
        color:#34495E;
    }

    .input-icon {
        position:absolute;
        right:10px;
        top:10px;
        color:#aaa;
    }

    .form-control {
        padding-right:35px;
    }

    .stats-card {
        background:#fff;
        border-radius:12px;
        padding:20px;
        text-align:center;
        box-shadow:0 3px 18px rgba(0,0,0,0.08);
        transition:.3s;
        margin-bottom:20px;
    }

    .stats-card:hover {
        transform:translateY(-6px);
    }

    .stats-card h3 {
        color:#2C4A2E;
        font-size:28px;
        font-weight:bold;
    }

    .stats-card span {
        color:#555;
        font-size:14px;
        margin-top:6px;
        display:block;
    }

    .section-title {
        font-size:20px;
        font-weight:bold;
        margin-bottom:15px;
        color:#2c3e50;
        display:flex;
        align-items:center;
        gap:6px;
    }

    .section-title i {
        color:#D9EF82;
    }
</style>

<div class="content-wrapper">

    {{-- ====== HEADER ====== --}}
    <section class="content-header">
       </i> <h1> إعدادات الإحصائيات</h1>
    </section>

    {{-- ====== FORM ====== --}}
    <section class="box box-primary content" >

        @if(session('success'))
            <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ session('success') }}</div>
        @endif

        <div class="stats-wrapper">

            <div class="section-title">
                <i class="fa fa-edit"></i> تعديل قيم الإحصائيات
            </div>

            <form action="{{ route('dashboard.counters.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    @foreach([1,2,3,4] as $i)
                    <div class="col-md-3 mb-4">

                        {{-- العنوان --}}
                        <label class="form-label">اسم العداد {{ $i }}</label>
                        <div class="position-relative">
                            {{-- <i class="fa fa-tag input-icon"></i> --}}
                            <input type="text" name="title{{ $i }}" class="form-control"
                                value="{{ $counter->{'title'.$i} }}">
                                <input type="text" name="title{{ $i }}_en" class="form-control"
                                value="{{ $counter->{'title'.$i.'_en'} }}">
                        </div>

                        {{-- الرقم --}}
                        <label class="form-label mt-2">العدد {{ $i }}</label>
                        <div class="position-relative">
                            {{-- <i class="fa fa-hashtag input-icon"></i> --}}
                            <input type="number" name="count{{ $i }}" class="form-control"
                                value="{{ $counter->{'count'.$i} }}">
                        </div>

                    </div>
                    @endforeach

                </div>
<br />
                <button class="btn btn-success btn-lg mt-2">
                    <i class="fa fa-save"></i> حفظ التغييرات
                </button>

            </form>

        </div>


        {{-- ====== LIVE PREVIEW ====== --}}
        <div class="section-title mt-4">
            <i class="fa fa-eye"></i> المعاينة المباشرة
        </div>

        <div class="row">
            @foreach([1,2,3,4] as $i)
            <div class="col-md-3">
                <div class="stats-card">
                    <h3>{{ $counter->{'count'.$i} }}</h3>
                    <span> {{ app()->getLocale() == 'en' ? $counter->{'title'.$i.'_en'} : $counter->{'title'.$i} }}</span>
                </div>
            </div>
            @endforeach
        </div>

    </section>

</div>
@endsection
