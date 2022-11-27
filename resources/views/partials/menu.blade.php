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
            @if (!empty(Auth::user()::find(Auth::user()->id)->data_user->avatar))
             <img src="{{ Storage::disk('public')->url(Auth::user()::find(Auth::user()->id)->data_user->avatar)}}" class="profile-image rounded-circle" alt="">
            @else
                <img src="{{ asset('/img/avatars/farmer.png') }}" class="profile-image rounded-circle" alt="">    
            @endif
            
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        {{ Auth::user()->username }}
                    </span>
                </a>
                
                <span class="d-inline-block text-truncate text-truncate-sm">{{ (Auth::user()::find(Auth::user()->id)->data_user->company_name ?? 'user') }}</span>
            </div>
            <img src="{{ asset('/img/card-backgrounds/cover-2-lg.png') }}" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <ul id="js-nav-menu" class="nav-menu">

            {{-- landing / beranda --}}
            @can('landing_access')
                <li class="c-sidebar-nav-item {{ request()->is("admin")  ? "active" : "" }}">
                    <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link" data-filter-tags="{{ strtolower(trans('cruds.landing.title_lang')) }}">
                        <i class="c-sidebar-nav-icon fal fa-home-alt">
                        </i>
                        <span class="nav-link-text" data-i18n="nav.landing_page">{{ trans('cruds.landing.title_lang') }}</span>
                    </a>
                </li>
            @endcan

            {{-- dashhboard --}}
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
                                <i class="fa-fw fal fa-database c-sidebar-nav-icon"></i>{{ trans('cruds.dashboardUser.title_lang') }}
                            </a>
                        </li>
                        <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard/map")  ? "active" : "" }}">
                            <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                                <i class="fa-fw fal fa-map c-sidebar-nav-icon"></i>
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
                                <i class="fa-fw fal fa-stamp c-sidebar-nav-icon"></i>{{ trans('cruds.dashboardAdmin.title_lang') }}
                            </a>
                        </li>
                        <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard/map")  ? "active" : "" }}">
                            <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                                <i class="fa-fw fal fa-map c-sidebar-nav-icon"></i><span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
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
                                <i class="fa-fw fal fa-stamp c-sidebar-nav-icon"></i>{{ trans('cruds.dashboardVerifikator.title_lang') }}
                            </a>
                        </li>
                        <li class="c-sidebar-nav-item {{ request()->is("admin/dashboard/map")  ? "active" : "" }}">
                            <a href="{{ route("admin.dashboard.map") }}" title="Dashboard Pemetaan" data-filter-tags="dashboard pemetaan">
                                <i class="fa-fw fal fa-map c-sidebar-nav-icon"></i><span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Pemetaan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            @endcan

            {{-- user task --}}
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
                            <a href="{{ route("admin.task.kelompoktani.index") }}" data-filter-tags="{{ strtolower(trans('cruds.kelompoktani.title_lang')) }}">
                                <i class="fa-fw fal fa-users c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.kelompoktani.title_lang') }}
                            </a>
                        </li>
                    @endcan
                </li>
            @endcan

            

            @can('verifikasi_access')
                <li class="{{ request()->is("admin/task/pengajuan*")  || request()->is("admin/task/skl*") ? "active open" : "" }} ">
                    <a href="#" title="Verifikasi & SKL" data-filter-tags="{{ strtolower(trans('cruds.verifikasi.title_lang')) }}">
                        <i class="fa-fw fal fa-ballot"></i>
                        <span class="nav-link-text" data-i18n="nav.administation_sub1">{{ trans('cruds.verifikasi.title_lang') }}</span>
                    </a>
                    <ul>
                        @can('pengajuan_access')
                            <li class="c-sidebar-nav-item {{ request()->is("admin/task/pengajuan") || request()->is("admin/task/pengajuan/*") ? "active" : "" }}">
                                <a href="{{ route("admin.task.pengajuan.index") }}" title="Pengajuan" data-filter-tags="{{ strtolower(trans('cruds.pengajuan.title_lang')) }}">
                                    <i class="fa-fw fal fa-file c-sidebar-nav-icon"></i>
                                    <span class="nav-link-text" data-i18n="nav.administation_sub1_menu1">{{ trans('cruds.pengajuan.title_lang') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('skl_access')
                            <li class="c-sidebar-nav-item {{ request()->is("admin/task/skl") || request()->is("admin/task/skl/*") ? "active" : "" }}">
                                <a href="{{ route("admin.task.skl.index") }}" title="Skl" data-filter-tags="{{ strtolower(trans('cruds.skl.title_lang')) }}">
                                    <i class="fa-fw fal fa-file c-sidebar-nav-icon"></i>
                                    <span class="nav-link-text" data-i18n="nav.administation_sub1_menu2">{{ trans('cruds.skl.title_lang') }}</span>
                                </a>
                            </li>
                        @endcan
                        
                    </ul>
                </li>
            @endcan

            {{-- berkas --}}
            @can('folder_access')
            <li class="{{ request()->is("admin/task/berkas*")  || request()->is("admin/task/galeri*") || request()->is("admin/task/template*") ? "active open" : "" }} ">
                <a href="#" title="Pengelolaan Berkas" data-filter-tags="{{ strtolower(trans('cruds.folder.title_lang')) }}">
                    <i class="fa-fw fal fa-folders"></i>
                    <span class="nav-link-text" data-i18n="nav.administation_sub1">{{ trans('cruds.folder.title_lang') }}</span>
                </a>
                <ul>
                    @can('berkas_access')
                        <li class="c-sidebar-nav-item {{ request()->is("admin/task/berkas") || request()->is("admin/task/berkas/*") ? "active" : "" }}">
                            <a href="{{ route("admin.task.berkas") }}" title="Berkas" data-filter-tags="{{ strtolower(trans('cruds.berkasberkasng')) }}">
                                <i class="fa-fw fal fa-file c-sidebar-nav-icon"></i>
                                <span class="nav-link-text" data-i18n="nav.administation_sub1_menu1">{{ trans('cruds.berkas.title_lang') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('galeri_access')
                        <li class="c-sidebar-nav-item {{ request()->is("admin/task/galeri") || request()->is("admin/task/skl/*") ? "active" : "" }}">
                            <a href="{{ route("admin.task.galeri") }}" title="Galeri" data-filter-tags="{{ strtolower(trans('cruds.galeri.title_lang')) }}">
                                <i class="fa-fw fal fa-images c-sidebar-nav-icon"></i>
                                <span class="nav-link-text" data-i18n="nav.administation_sub1_menu2">{{ trans('cruds.galeri.title_lang') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('template_access')
                        <li class="c-sidebar-nav-item {{ request()->is("admin/task/template") || request()->is("admin/task/template/*") ? "active" : "" }}">
                            <a href="{{ route("admin.task.template") }}" title="Skl" data-filter-tags="{{ strtolower(trans('cruds.template.title_lang')) }}">
                                <i class="fa-fw fal fa-heart c-sidebar-nav-icon"></i>
                                <span class="nav-link-text" data-i18n="nav.administation_sub1_menu2">{{ trans('cruds.template.title_lang') }}</span>
                            </a>
                        </li>
                    @endcan
                    
                </ul>
            </li>
            @endcan

            {{-- Feed & Messages --}}
            @can('feedmsg_access')
                <li class="nav-title">FEEDS & MESSAGES</li>  
                @can('feeds_access')
                    <li class="c-sidebar-nav-item {{ request()->is("feedmsg/feeds") ? "active" : "" }}">
                        <a href="" data-filter-tags="{{ strtolower(trans('cruds.feeds.title_lang')) }}">
                            <i class="fal fa-rss c-sidebar-nav-icon"></i>{{ trans('cruds.feeds.title_lang') }}
                        </a>
                    </li>
                @endcan  
                @can('messenger_access')
                    @php($unread = \App\Models\QaTopic::unreadCount())
                    <li class="c-sidebar-nav-item {{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }}">
                        <a href="{{ route("admin.messenger.index") }}" data-filter-tags="{{ strtolower(trans('global.messages')) }}">
                            <i class="c-sidebar-nav-icon fal fa-envelope"></i>
                            <span class="nav-link-text">{{ trans('global.messages') }}</span>
                            @if($unread > 0)
                                <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">{{ $unread }} pesan</span>
                            @endif
        
                        </a>
                    </li>
                @endcan  
            @endcan
            {{-- end feed --}}


            {{-- verificator task --}}
            @can('verificator_task_access')
                <li class="nav-title" data-i18n="nav.administation">VERIFICATOR TASK</li>
                @can('onfarm_access')
                <li class="c-sidebar-nav-item {{ request()->is("verification/onfarm") ? "active" : "" }}">
                    <a href="{{ route("verification.onfarm.index") }}" data-filter-tags="{{ strtolower(trans('cruds.onfarm.title_lang')) }}">
                        <i class="fal fa-map-marker-check c-sidebar-nav-icon"></i>
                        <span class="nav-link-text">{{ trans('cruds.onfarm.title_lang') }}</span>
                        {{-- @php($unread = \App\Models\QaTopic::unreadCount()) --}}
                        @if($unread > 0)
                            <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">{{ $unread }} request</span>
                        @endif
        
                        
                    </a>
                </li>
                @endcan
                @can('online_access')
                <li class="c-sidebar-nav-item {{ request()->is("verification/online") ? "active" : "" }}">
                    <a href="{{ route("verification.online.index") }}" data-filter-tags="{{ strtolower(trans('cruds.online.title_lang')) }}">
                        <i class="fal fa-ballot-check c-sidebar-nav-icon"></i>
                        <span class="nav-link-text">{{ trans('cruds.online.title_lang') }}</span>
                        {{-- @php($unread = \App\Models\QaTopic::unreadCount()) --}}
                        @if($unread > 0)
                            <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">{{ $unread }} request</span>
                        @endif
                    </a>
                </li>
                @endcan
                @can('completed_access')
                <li class="c-sidebar-nav-item {{ request()->is("verification/completed") ? "active" : "" }}">
                    <a href="{{ route("verification.completed.index") }}" data-filter-tags="{{ strtolower(trans('cruds.completed.title_lang')) }}">
                        <i class="fal fa-file-certificate c-sidebar-nav-icon"></i>
                        <span class="nav-link-text">{{ trans('cruds.completed.title_lang') }}</span>
                        {{-- @php($unread = \App\Models\QaTopic::unreadCount()) --}}
                        @if($unread > 0)
                            <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">{{ $unread }} request</span>
                        @endif
                        
                    </a>
                </li>
                @endcan
                @can('verification_skl_access') 
                    <li class="{{ request()->is("admin/verification/skl/*") ? "active open" : "" }} ">
                        <a href="#" title="SKL" data-filter-tags="{{ strtolower(trans('cruds.sklverifikator.title_lang')) }}">
                            <i class="fal fal fa-file"></i>
                            <span class="nav-link-text" data-i18n="nav.administation_sub1">{{ trans('cruds.sklverifikator.title_lang') }}</span>
                        </a>
                        <ul>
                            @can('list_skl_access')
                                <li class="c-sidebar-nav-item {{ request()->is("verification/skl/listskl") ? "active" : "" }}">
                                    <a href="{{ route("admin.permissions.index") }}" title="listskl" data-filter-tags="{{ strtolower(trans('cruds.listskl.title_lang')) }}">
                                        <i class="fa-fw fal fa-list c-sidebar-nav-icon"></i>
                                        <span class="nav-link-text" data-i18n="nav.administation_sub1_menu1">{{ trans('cruds.listskl.title_lang') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('create_skl_access')
                                <li class="c-sidebar-nav-item {{ request()->is("verification/skl/createskl")  ? "active" : "" }}">
                                    <a href="{{ route("admin.roles.index") }}" title="createskl" data-filter-tags="{{ strtolower(trans('cruds.createskl.title_lang')) }}">
                                        <i class="fa-fw fal fa-plus c-sidebar-nav-icon"></i>
                                        <span class="nav-link-text" data-i18n="nav.administation_sub1_menu2">{{ trans('cruds.createskl.title_lang') }}</span>
                                    </a>
                                </li>
                            @endcan
                            @can('issued_skl_access')
                                <li class="c-sidebar-nav-item {{ request()->is("verification/skl/issuedskl")? "active" : "" }}">
                                    <a href="{{ route("admin.users.index") }}" title="issuedskl" data-filter-tags="{{ strtolower(trans('cruds.issuedskl.title_lang')) }}">
                                        <i class="fa-fw fal fa-briefcase c-sidebar-nav-icon"></i>
                                        <span class="nav-link-text" data-i18n="nav.administation_sub1_menu3">{{ trans('cruds.issuedskl.title_lang') }}</span>
                                    </a>
                                </li>
                            @endcan
                            
                            
                        </ul>
                    </li>
                    @endcan
            @endcan

            {{-- user management --}}
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
            
        
        
        
        <li class="nav-title" data-i18n="nav.administation">PERSONAL</li>
            
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


