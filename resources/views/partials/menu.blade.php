<!-- BEGIN Left Aside -->
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
            <img src="/img/favicon.png" alt="Project WebApp" aria-roledescription="logo">
            <img src="/img/logo-icon.png" class="page-logo-text mr-1" alt="Simethris" aria-roledescription="logo" style="width:50px; height:auto;">
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="info-card">
            <img src="/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Administrator">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        {{ Auth::user()->name }}
                    </span>
                </a>
                <span class="d-inline-block text-truncate text-truncate-sm">{{ Auth::user()->type }}</span>
            </div>
            <img src="/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <!-- 
						TIP: The menu items are not auto translated. You must have a residing lang file associated with the menu saved inside dist/media/data with reference to each 'data-i18n' attribute.
						-->

        <ul id="js-nav-menu" class="nav-menu">
            <!-- BERANDA
                Q: Siapa yang dapat mengakses menu ini?
                A: Seluruh Pengguna
                Q: Data apa yang dilihat
                A:  Administrator   = All Feeds & His Messages
                    Verifikator     = All Feeds & His Messages
                    User            = Feeds for him & His Messages
            -->
            @if (\Auth::user()->type=='admin')
            <li class="{{ request()->is('admin/home') ? 'active' : '' }}">
                <a href="{{route('admin.home')}}" title="Beranda" data-filter-tags="beranda home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text" data-i18n="nav.home">Beranda</span>
                </a>
            </li>
            @endif

            @if (\Auth::user()->type=='verifikator')
            <li class="{{ request()->is('*home*') ? 'active' : '' }}">
                <a href="{{route('verif.home')}}" title="Beranda" data-filter-tags="beranda home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text" data-i18n="nav.home">Beranda</span>
                </a>
            </li>
            @endif

            @if (\Auth::user()->type=='user')
            <li class="{{ request()->is('*home*') ? 'active' : '' }}">
                <a href="{{route('user.home')}}" title="Beranda" data-filter-tags="beranda home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text" data-i18n="nav.home">Beranda</span>
                </a>
            </li>
            @endif

            @if (\Auth::user()->type=='v2')
            <li class="{{ request()->is('*home*') ? 'active' : '' }}">
                <a href="{{route('v2.home')}}" title="Beranda" data-filter-tags="beranda home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text" data-i18n="nav.home">Beranda</span>
                </a>
            </li>
            @endif

            <li class="{{ request()->is('*dashboard*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" title="Dashboard" data-filter-tags="dashboard">
                    <i class="fal fa-analytics"></i>
                    <span class="nav-link-text" data-i18n="nav.dashboard">Dashboard</span>
                </a>
                <ul>
                    <!-- DASHBOARD
                        Q: Siapa yang dapat mengakses menu ini?
                        A: Seluruh Pengguna
                        Q: Data apa yang dilihat
                        A:  Administrator   = His Dashboard & All Maps
                            Verifikator     = His Data & Maps
                            User            = His Data & Maps
                    -->
                    @if (\Auth::user()->type=='admin')
                    <li class="{{ request()->is('admin/dashboard/data') ? 'active' : '' }}">
                        <a href="{{route('admin.dashboard.data')}}" title="Monitoring Realisasi" data-filter-tags="dashboard data monitoring">
                            <span class="nav-link-text" data-i18n="nav.dashboard">Monitoring Realisasi</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/dashboard/peta') ? 'active' : '' }}">
                        <a href="{{route('admin.dashboard.peta')}}" title="Peta Realisasi" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Peta Realisasi</span>
                        </a>
                    </li>
                    @endif
                    @if (\Auth::user()->type=='verifikator')
                    <li class="{{ request()->is('*dashboard/data*') ? 'active' : '' }}">
                        <a href="{{route('verif.dashboard.data')}}" title="Monitoring Realisasi" data-filter-tags="dashboard data monitoring">
                            <span class="nav-link-text" data-i18n="nav.dashboard">Monitoring Realisasi</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('*dashboard/peta*') ? 'active' : '' }}">
                        <a href="{{route('verif.dashboard.peta')}}" title="Peta Realisasi" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Peta Realisasi</span>
                        </a>
                    </li>
                    @endif
                    @if (\Auth::user()->type=='user')
                    <li class="{{ request()->is('*dashboard/data*') ? 'active' : '' }}">
                        <a href="{{route('user.dashboard.data')}}" title="Monitoring Realisasi" data-filter-tags="dashboard data monitoring">
                            <span class="nav-link-text" data-i18n="nav.dashboard">Monitoring Realisasi</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('*dashboard/peta*') ? 'active' : '' }}">
                        <a href="{{route('user.dashboard.peta')}}" title="Peta Realisasi" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Peta Realisasi</span>
                        </a>
                    </li>
                    @endif
                    @if (\Auth::user()->type=='v2')
                    <li class="{{ request()->is('*dashboard/data*') ? 'active' : '' }}">
                        <a href="{{route('v2.dashboard.data')}}" title="Monitoring Realisasi" data-filter-tags="dashboard data monitoring">
                            <span class="nav-link-text" data-i18n="nav.dashboard">Monitoring Realisasi</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('*dashboard/peta*') ? 'active' : '' }}">
                        <a href="{{route('v2.dashboard.peta')}}" title="Peta Realisasi" data-filter-tags="dashboard pemetaan">
                            <span class="nav-link-text" data-i18n="nav.dashboard_pemetaan">Peta Realisasi</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>

            <!-- USER TASKS
                Q: Siapa yang dapat mengakses menu ini?
                A: User Only
                Q: Data apa yang dilihat
                A:  Administrator   = Restrict
                    Verificator     = Restrict
                    User            = CRUD
            -->
            <!-- Feed Messages
                Q: Siapa yang dapat mengakses menu ini?
                A: Seluruh Pengguna
                Q: Data apa yang dilihat
                A:  Administrator   = CRUD All Feeds & His Messages
                    Verifikator     = Read All Feeds & His Messages
                    User            = Read Feeds for him & His Messages
            -->
            @if (\Auth::user()->type=='verifikator')
            <li class="nav-title">Verifikator tasks</li>
            <li class="{{ request()->is('*verify/onfarm*') ? 'active' : '' }}">
                <a href="{{route('verif.onfarm')}}" title="On-farm verification" data-filter-tags="on site verification">
                    <i class="fal fa-map-marker-check"></i>
                    <span class="nav-link-text" data-i18n="nav.on_site_verification">Onfarm</span>
                    <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">197 request</span>
                </a>
            </li>
            <li class="{{ request()->is('*verify/online*') ? 'active' : '' }}">
                <a href="{{route('verif.online')}}" title="on line verification" data-filter-tags="on line verification">
                    <i class="fal fa-ballot-check"></i>
                    <span class="nav-link-text" data-i18n="nav.online_verification">Online</span>
                    <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">197 request</span>
                </a>
            </li>
            @endif

            @if (\Auth::user()->type=='user')
            <li class="nav-title">User tasks</li>
            @endif

            @if (\Auth::user()->type=='v2')
            <li class="nav-title">User tasks</li>
            @endif
            <li class="nav-title">Feeds & Messages</li>
            <li class="{{ request()->is('feeds*') ? 'active' : '' }}">
                <a href="{{route('feeds')}}" title="Feeds" data-filter-tags="feeds news information">
                    <i class="fal fa-rss"></i>
                    <span class="nav-link-text" data-i18n="nav.feeds">Feeds</span>
                </a>
            </li>
            <li class="{{ request()->is('messenger*') ? 'active' : '' }}">
                <a href="{{route('messenger')}}" title="Messenger" data-filter-tags="messages pesan mail messenger">
                    <i class="fal fa-mailbox"></i>
                    <span class="nav-link-text" data-i18n="nav.messenger">Messenger</span>
                    <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">197 new</span>
                </a>
            </li>
            <!-- Administrator Tasks
                Q: Siapa yang dapat mengakses menu ini?
                A: Administrator
                Q: Data apa yang dilihat
                A:  Administrator   = CRUD
                    Verifikator     = Restrict
                    User            = Restrict
            -->
            @if (\Auth::user()->type=='admin')
            <li class="nav-title">Administrator Tasks</li>
            <li class="{{ request()->is('admin/manage*') ? 'active' : '' }}">
                <a href="javascript:void(0);" title="Users Management" data-filter-tags="users management">
                    <i class="fal fa-users"></i>
                    <span class="nav-link-text" data-i18n="nav.users_management">Users Management</span>
                </a>
                <ul>
                    <li class="{{ request()->is('admin/manage/permissions') ? 'active' : '' }}">
                        <a href="{{route('admin.permissions')}}" title="Permissions" data-filter-tags="user permissions">
                            <span class="nav-link-text" data-i18n="nav.user_permissions">Permissions</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/manage/roles') ? 'active' : '' }}">
                        <a href="{{route('admin.roles')}}" title="Roles" data-filter-tags="user roles">
                            <span class="nav-link-text" data-i18n="nav.user_roles">Roles</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/manage/users') ? 'active' : '' }}">
                        <a href="{{route('admin.users')}}" title="Users" data-filter-tags="user list">
                            <span class="nav-link-text" data-i18n="nav.user">Users List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('*riph*') ? 'active' : '' }}">
                <a href="{{route('admin.riph')}}" title="Master Data RIPH" data-filter-tags="master data riph">
                    <i class="fab fa-stack-overflow"></i>
                    <span class="nav-link-text" data-i18n="nav.home">Master Data RIPH</span>
                </a>
            </li>
            <li class="{{ request()->is('*files*') ? 'active' : '' }}">
                <a href="{{route('admin.files')}}" title="Master Templat" data-filter-tags="create master template">
                    <i class="fal fa-file-upload"></i>
                    <span class="nav-link-text" data-i18n="nav.master_template">Master Template</span>
                </a>
            </li>

            <li class="{{ request()->is('*report*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" title="Data Report" data-filter-tags="data report laporan">
                    <i class="fal fa-landmark"></i>
                    <span class="nav-link-text" data-i18n="nav.files">Data Report</span>
                </a>
                <ul>
                    <li class="{{ request()->is('*report/commitment*') ? 'active' : '' }}">
                        <a href="{{route('admin.report.commitment')}}" title="Commitmen Lists" data-filter-tags="report laporan commitment lists daftar riph">
                            <span class="nav-link-text" data-i18n="nav.my_files">Commitmen Lists</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('*report/verification*') ? 'active open' : '' }}">
                        <a href="javascript:void(0);" title="Verification Report" data-filter-tags="verification report laporan verifikasi">
                            <span class="nav-link-text" data-i18n="nav.verification_report">Verification Report</span>
                        </a>
                        <ul>
                            <li class="{{ request()->is('*onfarm*') ? 'active' : '' }}">
                                <a href="{{route('admin.report.verification.onfarm')}}" title="Onfarm Report" data-filter-tags="laporan report verifikasi verification onfarm lapangan">
                                    <span class="nav-link-text" data-i18n="nav.onfarm_report">Onfarm Report</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('*online*') ? 'active' : '' }}">
                                <a href="{{route('admin.report.verification.online')}}" title="Onfarm Report" data-filter-tags="laporan report verifikasi verification online">
                                    <span class="nav-link-text" data-i18n="nav.online_report">Online Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('*admin/skl*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" title="SKL" data-filter-tags="surat keterangan lunas">
                    <i class="fal fa-file-certificate"></i>
                    <span class="nav-link-text" data-i18n="nav.skl">SKL</span>
                </a>
                <ul>
                    <li class="{{ request()->is('admin/skl') ? 'active' : '' }}">
                        <a href="{{route('admin.sklindex')}}" title="on line verification" data-filter-tags="on line verification">
                            <span class="nav-link-text" data-i18n="nav.admin_skl_list">SKL</span>
                            <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">197 request</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('*skl/create') ? 'active' : '' }}">
                        <a href="{{route('admin.skl.create')}}" title="SKL Issued" data-filter-tags="penerbitan skl surat keterangan lunas">
                            <span class="nav-link-text" data-i18n="nav.skl_create">Create SKL</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <!-- Documentation
                Q: Siapa yang dapat mengakses menu ini?
                A: Administrator
                Q: Data apa yang dilihat
                A:  Administrator   = Read
                    Verifikator     = Read
                    User            = Read
            -->
            <li class="nav-title">Documentations</li>
            <li class="{{ request()->is('v2/howto*') ? 'active' : '' }}">
                <a href="/v2/howto" title="How To" data-filter-tags="how to manual tutorial">
                    <i class="fal fa-books"></i>
                    <span class="nav-link-text" data-i18n="nav.feeds">How To's</span>
                </a>
            </li>
            <li class="{{ request()->is('v2/build*') ? 'active' : '' }}">
                <a href="/v2/build" title="Build Note" data-filter-tags="build note version control">
                    <i class="fal fa-code"></i>
                    <span class="nav-link-text" data-i18n="nav.build">Build Notes</span>
                </a>
            </li>
            <li class="nav-title">Settings</li>
            <!-- Profile & Password
                Q: Siapa yang dapat mengakses menu ini?
                A: Administrator
                Q: Data apa yang dilihat
                A:  Administrator   = CRUD
                    Verifikator     = CRUD
                    User            = CRUD
            -->
            <li class="{{ request()->is('profile*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" title="Profiles" data-filter-tags="Profiles">
                    <i class="fal fa-address-card"></i>
                    <span class="nav-link-text" data-i18n="nav.users_management">Profiles</span>
                </a>
                <ul>
                    <li class="{{ request()->is('*myprofile*') ? 'active' : '' }}">
                        <a href="{{route('myprofile')}}" title="My Profile" data-filter-tags="my profile">
                            <span class="nav-link-text" data-i18n="nav.category">My Profile</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('*password') ? 'active' : '' }}">
                        <a href="{{route('password')}}" title="Change Password" data-filter-tags="change password">
                            <span class="nav-link-text" data-i18n="nav.change_password">Change Password</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-title">Navigation Title</li>
            <li>
                <a href="#" title="Category" data-filter-tags="category">
                    <i class="fal fa-file"></i>
                    <span class="nav-link-text" data-i18n="nav.category">Category</span>
                </a>
                <ul>
                    <li>
                        <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                            <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Sub-category</span>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">
                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item">
                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another Item</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="disabled">
                        <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">
                            <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->
    <div class="nav-footer shadow-top">
        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
            <i class="ni ni-chevron-right"></i>
            <i class="ni ni-chevron-right"></i>
        </a>
        <ul class="list-table m-auto nav-footer-buttons">
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                    <i class="fal fa-comments"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                    <i class="fal fa-life-ring"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                    <i class="fal fa-phone"></i>
                </a>
            </li>
        </ul>
    </div> <!-- END NAV FOOTER -->
</aside>
<!-- END Left Aside -->