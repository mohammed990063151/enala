@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .branch-wrapper {
        background:#f7f9fa;
        padding:25px;
        border-radius:12px;
        box-shadow:0 4px 20px rgba(0,0,0,0.08);
        transition:.3s;
    }
    .branch-wrapper:hover {
        box-shadow:0 6px 25px rgba(0,0,0,0.12);
    }

    .branch-table th {
        background:#eaeff1;
        color:#2c3e50;
        font-weight:600;
    }

    .branch-img {
        width:70px;
        height:70px;
        border-radius:8px;
        object-fit:cover;
        border:2px solid #fff;
        box-shadow:0 0 8px rgba(0,0,0,0.1);
    }

    .btn-icon {
        display:flex;
        align-items:center;
        gap:5px;
    }

    .pagination {
        justify-content:center;
        margin-top:20px;
    }
</style>

<div class="content-wrapper">

    {{-- PAGE TITLE --}}
    <section class="content-header">
        <h1><i class="fa fa-building"></i> فروع شركة مُضياف</h1>
    </section>

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ session('success') }}</div>
    @endif

    {{-- WRAPPER --}}
    <section class="content">
        <div class="branch-wrapper">

            {{-- ADD BUTTON --}}
            <a class="btn btn-success mb-3 btn-icon" href="{{ route('dashboard.branches.create') }}">
                <i class="fa fa-plus"></i> إضافة فرع جديد
            </a>

            {{-- TABLE --}}
            <table class="table table-bordered table-hover text-center branch-table">
                <thead>
                <tr>
                    <th>الصورة</th>
                    <th>اسم الفرع</th>
                    <th>المدينة</th>
                    <th>الهاتف</th>
                    <th width="200">خيارات</th>
                </tr>
                </thead>

                <tbody>
                @forelse($branches as $branch)
                    <tr>
                        <td>
                            @if($branch->image)
                                <img src="{{ asset('storage/'.$branch->image) }}" class="branch-img">
                            @else
                                لا توجد صورة
                            @endif
                        </td>
                        <td>{{ $branch->name }}</td>
                        <td>{{ $branch->city }}</td>
                        <td>{{ $branch->phone }}</td>
                        <td>
                            {{-- EDIT --}}
                            <a href="{{ route('dashboard.branches.edit',$branch) }}"
                               class="btn btn-primary btn-sm btn-icon">
                                <i class="fa fa-edit"></i> تعديل
                            </a>

                            {{-- DELETE --}}
                            <form action="{{ route('dashboard.branches.destroy',$branch) }}"
                                  method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm btn-icon"
                                        onclick="return confirm('متأكد من الحذف؟');">
                                    <i class="fa fa-trash"></i> حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">لا توجد فروع مسجلة حالياً</td></tr>
                @endforelse
                </tbody>
            </table>

            {{-- PAGINATION --}}
            <div class="d-flex">
                {{ $branches->links() }}
            </div>

        </div>
    </section>

</div>
@endsection
