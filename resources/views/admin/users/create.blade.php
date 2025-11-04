@extends('admin.layouts.dashboard.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>المستخدمين</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.home') }}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
                <li><a href="{{ route('dashboard.users.index') }}">المستخدمين</a></li>
                <li class="active">إضافة</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">إضافة مستخدم جديد</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.users.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label>الاسم الأول</label>
                            <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                        </div>

                        <div class="form-group">
                            <label>الاسم الأخير</label>
                            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                        </div>

                        <div class="form-group">
                            <label>البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label>الصورة</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/user_images/default.png') }}" style="width: 100px"
                                class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>كلمة المرور</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>تأكيد كلمة المرور</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                        {{-- 🔹 الصلاحيات --}}
                        {{-- <div class="form-group">
                            <label>الصلاحيات</label>
                            <div class="nav-tabs-custom">

                                @php
                                    $models = [
                                        'users',
                                        'services',
                                        'projects',
                                        'banners',
                                        'pages',
                                        'settings',
                                        'roles',
                                    ];

                                    $maps = ['create', 'read', 'update', 'delete'];

                                    $models_ar = [
                                        'المستخدمين',
                                        'الخدمات',
                                        'المشاريع',
                                        'البنرات',
                                        'الصفحات',
                                        'الإعدادات',
                                        'الأدوار',
                                    ];

                                    $maps_ar = ['إضافة', 'عرض', 'تعديل', 'حذف'];
                                @endphp

                                <ul class="nav nav-tabs">
                                    @foreach ($models as $index => $model)
                                        <li class="{{ $index == 0 ? 'active' : '' }}">
                                            <a href="#{{ $model }}" data-toggle="tab">{{ $models_ar[$index] }}</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="tab-content">

                                    @foreach ($models as $index => $model)
                                        <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">
                                            @foreach ($maps as $i => $map)
                                                <label style="margin:10px 15px; display:inline-block;">
                                                    <input type="checkbox" name="permissions[]"
                                                        value="{{ $map . '_' . $model }}">
                                                    <span>{{ $maps_ar[$i] }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    @endforeach

                                </div><!-- end of tab content -->

                            </div><!-- end of nav tabs -->
                        </div> --}}

                        {{-- <div class="form-group">
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

                                    // 🔹 العناوين بالعربية
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

                                    // 🔹 العمليات الأساسية
                                    $maps = ['create', 'read', 'update', 'delete'];
                                    $maps_ar = ['إضافة', 'عرض', 'تعديل', 'حذف'];
                                @endphp

                                {{-- 🔸 أزرار التبويب --}
                                <ul class="nav nav-tabs">
                                    @foreach ($models as $index => $model)
                                        <li class="{{ $index == 0 ? 'active' : '' }}">
                                            <a href="#{{ $model }}" data-toggle="tab">
                                                <i class="fa fa-lock"></i> {{ $models_ar[$index] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                                {{-- 🔸 محتوى الصلاحيات داخل كل تبويب --}
                                <div class="tab-content"
                                    style="padding:15px; border:1px solid #ddd; border-top:0; background:#fafafa;">

                                    @foreach ($models as $index => $model)
                                        <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">
                                            <div class="row">
                                                @foreach ($maps as $i => $map)
                                                    @php
                                                        $perm = $map . '_' . $model;
                                                        $checked = isset($user) && $user->hasPermission($perm);
                                                    @endphp
                                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                                        <label style="margin:10px; display:block; font-weight:500;">
                                                            <input type="checkbox" name="permissions[]"
                                                                value="{{ $perm }}"
                                                                {{ $checked ? 'checked' : '' }}>
                                                            <span>{{ $maps_ar[$i] }}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div><!-- /.tab-content -->

                            </div><!-- /.nav-tabs-custom -->
                        </div> --}}
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

            // 🔹 العناوين بالعربية
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

        {{-- 🔸 محتوى الصلاحيات داخل كل تبويب --}}
        <div class="tab-content"
            style="padding:15px; border:1px solid #ddd; border-top:0; background:#fafafa;">

            @foreach ($models as $index => $model)
                <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">
                    <div class="row">
                        @php
                            $perm = 'read_' . $model; // فقط صلاحية العرض
                            $checked = isset($user) && $user->hasPermission($perm);
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
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> إضافة</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
