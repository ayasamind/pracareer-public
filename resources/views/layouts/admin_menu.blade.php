<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item {{ Request::is('admins*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.admins.index') }}">
                    <i class="nav-icon icon-cursor"></i>
                    <span>@lang('models/admins.plural')</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('companies*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.companies.index') }}">
                    <i class="nav-icon icon-cursor"></i>
                    <span>@lang('models/companies.plural')</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('students*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.students.index') }}">
                    <i class="nav-icon icon-cursor"></i>
                    <span>@lang('models/students.plural')</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('posts*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.posts.index') }}">
                    <i class="nav-icon icon-cursor"></i>
                    <span>@lang('models/posts.plural')</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('student_requests*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.student_requests.index') }}">
                    <i class="nav-icon icon-cursor"></i>
                    <span>@lang('models/student_requests.plural')</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('post_templates*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.post_templates.index') }}">
                    <i class="nav-icon icon-cursor"></i>
                    <span>@lang('models/post_templates.plural')</span>
                </a>
            </li>            
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>