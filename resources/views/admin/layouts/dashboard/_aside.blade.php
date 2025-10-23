<aside class="main-sidebar">
    <section class="sidebar">

        {{-- لوحة المستخدم --}}
        <div class="user-panel">
            <div class="pull-left image">
                {{-- أيقونة أو صورة المستخدم --}}
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> متصل</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard.settings.edit') }}">
                    <i class="fa fa-cogs"></i> <span>اعدادات</span>
                </a>
            </li>
             <li>
        <a href="{{ route('dashboard.sections.edit') }}">
            <i class="fa fa-leaf"></i> <span>أقسام الحدائق والخدمات</span>
        </a>
    </li>
        </ul>
    </section>
</aside>
