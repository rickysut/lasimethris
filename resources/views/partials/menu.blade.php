<aside class="page-sidebar">
    <div class="page-logo">
		<a href="/" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
			{{-- <img src="{{ asset('img/logo-icon.png') }}" alt="{{ trans('panel.site_title') }}" aria-roledescription="logo"> --}}
			{{-- <span class="page-logo-text mr-1">{{ trans('panel.site_title') }}</span> --}}
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
                <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.landing.title')) }}">
                    <i class="c-sidebar-nav-icon fal fa-home-alt">

                    </i>
                    {{ trans('cruds.landing.title') }}
                </a>
            </li>
            @endcan
            @can('dashboard_access')
            <li class="{{ request()->is("admin/dashboard*") ? "active open" : "" }} ">
                <a href="#" title="Dashboard" data-filter-tags="dashboard pemantauan kinerja">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard_menu">Dashboard</span>
                </a>
                <ul>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.dashboardUser.title')) }}">
                            {{ trans('cruds.dashboardUser.title') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
            @can('dashboarda_access')
            <li class="{{ request()->is("admin/dashboard*") ? "active open" : "" }} ">
                <a href="#" title="Dashboard" data-filter-tags="dashboard pemantauan kinerja">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard_menu">Dashboard</span>
                </a>
                <ul>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.dashboardAdmin.title')) }}">
                            {{ trans('cruds.dashboardAdmin.title') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
            @can('dashboardv_access')
            <li class="{{ request()->is("admin/dashboard*") ? "active open" : "" }} ">
                <a href="#" title="Dashboard" data-filter-tags="dashboard pemantauan kinerja">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard_menu">Dashboard</span>
                </a>
                <ul>
                    <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard")  ? "active" : "" }}">
                        <a href="{{ route("admin.dashboard") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.dashboardVerifikator.title')) }}">
                            {{ trans('cruds.dashboardVerifikator.title') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
        
        
        @can('master_data_access')
        <li class="nav-title" data-i18n="nav.master_data">DATA INDUK (master)</li>
            <li>
                @can('partner_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "active" : "" }}">
                        <a href="{{ route("admin.partners.index") }}" data-filter-tags="{{ strtolower(trans('cruds.partner.title')) }}">
                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.partner.title') }}
                        </a>
                    </li>
                @endcan
                @can('coa_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/coas") || request()->is("admin/coas/*") ? "active" : "" }}">
                        <a href="{{ route("admin.coas.index") }}" data-filter-tags="{{ strtolower(trans('cruds.coa.title')) }}">
                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.coa.title') }}
                        </a>
                    </li>
                @endcan
            </li>
        @endcan
        @can('user_management_access')
        <li class="nav-title" data-i18n="nav.administation">ADMINISTRATOR</li>
        <li class="{{ request()->is("admin/permissions*")  || request()->is("admin/roles*") || request()->is("admin/users*") || request()->is("admin/audit-logs*")  ? "active open" : "" }} ">
            <a href="#" title="User Management" data-filter-tags="{{ strtolower(trans('cruds.userManagement.title')) }}">
                <i class="fal fal fa-users"></i>
                <span class="nav-link-text" data-i18n="nav.administation_sub1">{{ trans('cruds.userManagement.title') }}</span>
            </a>
            <ul>
                @can('permission_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                        <a href="{{ route("admin.permissions.index") }}" title="Permission" data-filter-tags="{{ strtolower(trans('cruds.permission.title')) }}">
                            <i class="fa-fw fal fa-unlock-alt c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu1">{{ trans('cruds.permission.title') }}</span>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                        <a href="{{ route("admin.roles.index") }}" title="Roles" data-filter-tags="{{ strtolower(trans('cruds.role.title')) }}">
                            <i class="fa-fw fal fa-briefcase c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu2">{{ trans('cruds.role.title') }}</span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                        <a href="{{ route("admin.users.index") }}" title="User" data-filter-tags="{{ strtolower(trans('cruds.user.title')) }}">
                            <i class="fa-fw fal fa-user c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu3">{{ trans('cruds.user.title') }}</span>
                        </a>
                    </li>
                @endcan
                @can('audit_log_access')
                    <li class="c-sidebar-nav-item {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                        <a href="{{ route("admin.audit-logs.index") }}" title="Audit Log" data-filter-tags="{{ strtolower(trans('cruds.auditLog.title')) }}">
                            <i class="fa-fw fal fa-file-alt c-sidebar-nav-icon"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1_menu4">{{ trans('cruds.auditLog.title') }}</span>
                        </a>
                    </li>
                @endcan
                
            </ul>
        </li>
        @endcan
        
        @can('setting_access')
            <li class="c-sidebar-nav-item {{ request()->is("admin/settings") || request()->is("admin/settings/*") ? "active" : "" }}">
                <a href="{{ route("admin.settings.index") }}" data-filter-tags="{{ strtolower(trans('cruds.setting.title')) }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.setting.title') }}
                </a>
            </li>
        @endcan
        
        
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


