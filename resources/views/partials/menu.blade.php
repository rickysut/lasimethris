<aside class="page-sidebar">
    <div class="page-logo">
		<a href="/admin" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
			<img src="{{ asset('img/favicon.png') }}" alt="Simethris" aria-roledescription="logo">
			<img src="{{ asset('img/logo-icon.png') }}" class="page-logo-text mr-1" alt="Simethris" aria-roledescription="logo" style="width:50px; height:auto;">
							  
		</a>
        
	</div>
    
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
			<div class="position-relative">
				<input type="text" id="nav_filter_input" placeholder="Cari menu" class="form-control" tabindex="0">
				<a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
			</div>
		</div>
        <div class="info-card">
            <img src="{{ asset('/img/avatars/farmer.png') }}" class="profile-image rounded-circle" alt="">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        {{ Auth::user()->username }}
                    </span>
                </a>
                <span class="d-inline-block text-truncate text-truncate-sm">Company Name</span>
            </div>
            <img src="{{ asset('/img/card-backgrounds/cover-2-lg.png') }}" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <ul id="js-nav-menu" class="nav-menu">
            @can('landing_access')
            <li class="c-sidebar-nav-item {{ request()->is("admin")  ? "active" : "" }}">
                <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.landing.title_lang')) }}">
                    <i class="c-sidebar-nav-icon fal fa-home-alt">
                    </i>
                    <span class="nav-link-text" data-i18n="nav.landing_page">{{ trans('cruds.landing.title_lang') }}</span>
                </a>
            </li>
            @endcan
            @can('dashboard_access')
            @if ((Auth::user()->roles[0]->title == 'User') || (Auth::user()->roles[0]->title == 'user_v2'))
            <li class="{{ request()->is("admin/dashboard*") ? "active open" : "" }} ">
                <a href="#" title="Dashboard" data-filter-tags="dashboard pemantauan kinerja">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard_menu">{{ trans('cruds.dashboard.title_lang') }}</span>
                </a>
                <ul>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.dashboardUser.title_lang')) }}">
                            {{ trans('cruds.dashboardUser.title_lang') }}
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard/map")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            @elseif (Auth::user()->roles[0]->title == 'Admin')
            <li class="{{ request()->is("admin/dashboard*") ? "active open" : "" }} ">
                <a href="#" title="Dashboard" data-filter-tags="dashboard pemantauan kinerja">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard_menu">{{ trans('cruds.dashboard.title_lang') }}</span>
                </a>
                <ul>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.dashboardAdmin.title_lang')) }}">
                            {{ trans('cruds.dashboardAdmin.title_lang') }}
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard/map")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            @elseif (Auth::user()->roles[0]->title == 'Verifikator')
            <li class="{{ request()->is("admin/dashboard*") ? "active open" : "" }} ">
                <a href="#" title="Dashboard" data-filter-tags="dashboard pemantauan kinerja">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard_menu">{{ trans('cruds.dashboard.title_lang') }}</span>
                </a>
                <ul>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.dashboardVerifikator.title_lang')) }}">
                            {{ trans('cruds.dashboardVerifikator.title_lang') }}
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard/map")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            @endcan
        
        @can('user_task_access')
        <li class="nav-title" data-i18n="nav.user_task">{{ trans('cruds.pullSync.title_lang') }}</li>
            <li>
                @can('pull_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/task/pull")  ? "active" : "" }}">
                        <a href="{{ route("admin.task.pull") }}" data-filter-tags="{{ strtolower(trans('cruds.pullSync.title_lang')) }}">
                            <i class="fa-fw fal fa-sync-alt c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.pullSync.title_lang') }}
                        </a>
                    </li>
                @endcan
                @can('commitment_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/task/commitment")  ? "active" : "" }}">
                        <a href="{{ route("admin.task.commitment") }}" data-filter-tags="{{ strtolower(trans('cruds.commitment.title_lang')) }}">
                            <i class="fa-fw fal fa-ballot c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.commitment.title_lang') }}
                        </a>
                    </li>
                @endcan
                @can('kelompoktani_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/kelompoktani")  ? "active" : "" }}">
                        <a href="{{ route("admin.kelompoktani.index") }}" data-filter-tags="{{ strtolower(trans('cruds.kelompoktani.title_lang')) }}">
                            <i class="fa-fw fal fa-ballot c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.kelompoktani.title_lang') }}
                        </a>
                    </li>
                @endcan
            </li>
        @endcan
        
        @can('user_management_access')
        <li class="nav-title" data-i18n="nav.administation">ADMINISTRATOR</li>
        <li class="{{ request()->is("admin/permissions*")  || request()->is("admin/roles*") || request()->is("admin/users*") || request()->is("admin/audit-logs*")  ? "active open" : "" }} ">
            <a href="#" title="User Management" data-filter-tags="{{ strtolower(trans('cruds.userManagement.title_lang')) }}">
                <i class="fal fal fa-users"></i>
                <span class="nav-link-text" data-i18n="nav.administation_sub1">{{ trans('cruds.userManagement.title_lang') }}</span>
            </a>
            <ul>
                @can('permission_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                        <a href="{{ route("admin.permissions.index") }}" title="Permission" data-filter-tags="{{ strtolower(trans('cruds.permission.title_lang')) }}">
                            <i class="fa-fw fal fa-unlock-alt c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu1">{{ trans('cruds.permission.title_lang') }}</span>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                        <a href="{{ route("admin.roles.index") }}" title="Roles" data-filter-tags="{{ strtolower(trans('cruds.role.title_lang')) }}">
                            <i class="fa-fw fal fa-briefcase c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu2">{{ trans('cruds.role.title_lang') }}</span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                        <a href="{{ route("admin.users.index") }}" title="User" data-filter-tags="{{ strtolower(trans('cruds.user.title_lang')) }}">
                            <i class="fa-fw fal fa-user c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu3">{{ trans('cruds.user.title_lang') }}</span>
                        </a>
                    </li>
                @endcan
                @can('audit_log_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                        <a href="{{ route("admin.audit-logs.index") }}" title="Audit Log" data-filter-tags="{{ strtolower(trans('cruds.auditLog.title_lang')) }}">
                            <i class="fa-fw fal fa-file-alt c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu4">{{ trans('cruds.auditLog.title_lang') }}</span>
                        </a>
                    </li>
                @endcan
                
            </ul>
        </li>
        @endcan
        
        @can('setting_access')
            <li class="c-sidebar-nav-item {{ request()->is("admin/settings") || request()->is("admin/settings/*") ? "active" : "" }}">
                <a href="{{ route("admin.settings.index") }}" data-filter-tags="{{ strtolower(trans('cruds.setting.title_lang')) }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.setting.title_lang') }}
                </a>
            </li>
        @endcan
        
        <li class="nav-title" data-i18n="nav.administation">PERSONAL</li>
        @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item {{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }}">
                <a href="{{ route("admin.messenger.index") }}" data-filter-tags="{{ strtolower(trans('global.messages')) }}">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif

                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" >
                        <a href="{{ route('profile.password.edit') }}" data-filter-tags="{{ strtolower(trans('global.change_password')) }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>    
        </ul>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
	
</aside>


