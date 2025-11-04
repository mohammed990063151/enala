{{-- @extends('admin.layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>المستخدمون</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.home') }}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
                <li><a href="{{ route('dashboard.users.index') }}"> المستخدمون</a></li>
                <li class="active">تعديل</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">تعديل مستخدم</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.users.update', $user->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>الاسم الأول</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
                        </div>

                        <div class="form-group">
                            <label>اسم العائلة</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
                        </div>

                        <div class="form-group">
                            <label>البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label>الصورة</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ $user->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>الصلاحيات</label>
                            <div class="nav-tabs-custom">

                                @php
                                    $models = ['users', 'categories', 'products', 'clients', 'orders'];
                                    $maps = ['create', 'read', 'update', 'delete'];
                                @endphp

                                <ul class="nav nav-tabs">
                                    @foreach ($models as $index=>$model)
                                        <li class="{{ $index == 0 ? 'active' : '' }}"><a href="#{{ $model }}" data-toggle="tab">
                                            @switch($model)
                                                @case('users') المستخدمون @break
                                                @case('categories') التصنيفات @break
                                                @case('products') المنتجات @break
                                                @case('clients') العملاء @break
                                                @case('orders') الطلبات @break
                                            @endswitch
                                        </a></li>
                                    @endforeach
                                </ul>

                                <div class="tab-content">

                                    @foreach ($models as $index=>$model)

                                        <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">

                                            @foreach ($maps as $map)
                                                <label>
                                                    <input type="checkbox" name="permissions[]"
                                                    {{ $user->hasPermission($map . '_' . $model) ? 'checked' : '' }}
                                                    value="{{ $map . '_' . $model }}">
                                                    @switch($map)
                                                        @case('create') إضافة @break
                                                        @case('read') عرض @break
                                                        @case('update') تعديل @break
                                                        @case('delete') حذف @break
                                                    @endswitch
                                                </label>
                                            @endforeach

                                        </div>

                                    @endforeach

                                </div><!-- end of tab content -->

                            </div><!-- end of nav tabs -->

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> تعديل</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection --}}

@extends('admin.layouts.dashboard.app')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <h1>تعديل المستخدم</h1>

        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard.home') }}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
            <li><a href="{{ route('dashboard.users.index') }}">المستخدمين</a></li>
            <li class="active">تعديل</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title">تعديل بيانات المستخدم</h3>
            </div><!-- end of box header -->

            <div class="box-body">

                @include('partials._errors')

                <form action="{{ route('dashboard.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group">
                        <label>الاسم الأول</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
                    </div>

                    <div class="form-group">
                        <label>الاسم الأخير</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
                    </div>

                    <div class="form-group">
                        <label>البريد الإلكتروني</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label>الصورة</label>
                        <input type="file" name="image" class="form-control image">
                    </div>

                    <div class="form-group">
                        <img src="{{ $user->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>

                    {{-- 🔹 الصلاحيات --}}
                    <div class="form-group">
                        <label>الصلاحيات</label>
                        <div class="nav-tabs-custom">

                            @php
                                // 🔹 الأقسام الأساسية حسب Seeder مضياف
                                $models = [
                                    'users',
                                    'services',
                                    'projects',
                                    'banners',
                                    'contacts',
                                    'settings',
                                    'roles',
                                    'whyus',
                                ];

                                // 🔹 أسماء الأقسام بالعربية
                                $models_ar = [
                                    'المستخدمين',
                                    'الخدمات',
                                    'المشاريع',
                                    'البانرات',
                                    'التواصل',
                                    'الإعدادات',
                                    'الأدوار',
                                    'لماذا نحن',
                                ];
                            @endphp

                            {{-- 🔸 أزرار التبويب --}}
                            <ul class="nav nav-tabs">
                                @foreach ($models as $index => $model)
                                    <li class="{{ $index == 0 ? 'active' : '' }}">
                                        <a href="#{{ $model }}" data-toggle="tab">
                                            <i class="fa fa-eye"></i> {{ $models_ar[$index] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            {{-- 🔸 محتوى التبويبات --}}
                            <div class="tab-content"
                                style="padding:15px; border:1px solid #ddd; border-top:0; background:#fafafa;">

                                @foreach ($models as $index => $model)
                                    <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">
                                        <div class="row">
                                            @php
                                                $perm = 'read_' . $model; // فقط صلاحية العرض
                                                $checked = $user->hasPermission($perm);
                                            @endphp
                                            <div class="col-md-3 col-sm-4 col-xs-6">
                                                <label style="margin:10px; display:block; font-weight:500;">
                                                    <input type="checkbox" name="permissions[]"
                                                        value="{{ $perm }}"
                                                        {{ $checked ? 'checked' : '' }}>
                                                    <span>عرض</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div><!-- /.tab-content -->

                        </div><!-- /.nav-tabs-custom -->
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-edit"></i> تحديث البيانات
                        </button>
                    </div>

                </form><!-- end of form -->

            </div><!-- end of box body -->

        </div><!-- end of box -->

    </section><!-- end of content -->

</div><!-- end of content wrapper -->

@endsection

