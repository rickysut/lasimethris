@extends('layouts.admin')
@section('content')
{{-- @include('partials.subheader') --}}
@can('landing_access')
<!-- welcome message -->
<div class="row mb-5">
	<div class="col text-center">
		<h1 class="display-4 hidden-md-down">Selamat Datang di Simethris, <span class="fw-700">{{ Auth::user()->name }}</span></h1>
		<h1 class="display-4 hidden-sm-up">Hallo, <span class="fw-700">{{ Auth::user()->name }}</span></h1>
		<h4 class="hidden-md-down">If the world is to big for you to hold, then make it smaller to fits in your hands!</h4>
		<span class="text-muted js-get-date"></span>
	</div>
</div>
<!-- end welcome message -->
<!-- Page Content -->

<div class="row">
	<div class="col-lg-7">
		<div id="panel-1" class="panel">
			<!--
				Yang ingin dicapi pada panel ini adalah:
				
				Berita/Feed adalah informasi yang disampaikan oleh Administrator kepada seluruh pengguna sesuai role. bersifat Umum Terbatas.
				Feed ditampilkan sesuai dengan role pengguna.
				Fitur Pembuatan Berita/Feed pada halaman lainnya.
			-->
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-rss mr-1"></i>New Feeds
				</h2>
				<div class="panel-toolbar">
					<a href="/feeds" data-toggle="tooltip" title data-original-title="Lihat semua Feeds" class="btn btn-xs btn-primary waves-effect waves-themed" type="button" href="/">Lihat</a>
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content p-0">
					<div class="row no-gutters row-grid">
					<!-- thread -->
						<div class="col-12">
							<ul class="notification">
								<li class="unread">
									<div class="p-3">
										<div class="d-flex flex-column">
											<div class="d-block">
												<span class="name d-flex align-items-center">Administrator</span>
											</div>
											<a href="/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
												Nam viverra diam magna, eget lobortis orci tincidunt sed<span class="badge badge-danger ml-auto"> <span class="hidden-md-down">New</span></span>
											</a>
											<div class="d-block text-muted fs-sm">
												<span class="text-muted js-get-date"></span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="p-3">
										<div class="d-flex flex-column">
											<div class="d-block">
												<span class="name d-flex align-items-center">Administrator</span>
											</div>
											<a href="/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
												Nam viverra diam magna, eget lobortis orci tincidunt sed<span class="badge badge-danger ml-auto"> <span class="hidden-md-down">New</span></span>
											</a>
											<div class="d-block text-muted fs-sm">
												<span class="text-muted js-get-date"></span>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="p-3">
										<div class="d-flex flex-column">
											<div class="d-block">
												<span class="name d-flex align-items-center">Administrator</span>
											</div>
											<a href="/feeds/read" class="fs-lg fw-500 d-flex align-items-start">
												Nam viverra diam magna, eget lobortis orci tincidunt sed<span class="badge badge-danger ml-auto"> <span class="hidden-md-down">New</span></span>
											</a>
											<div class="d-block text-muted fs-sm">
												<span class="text-muted js-get-date"></span>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-5">
		<div id="panel-2" class="panel">
			<!--
				Yang ingin dicapi pada panel ini adalah:
				
				Menampilkan daftar percakapan/perpesanan/messages baru dan atau terakhir antara Administrator dengan Pengguna. Bersifat Private per user.
			-->
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-envelope mr-1"></i>New Messages
				</h2>
				<div class="panel-toolbar">
					<a href="/messenger" data-toggle="tooltip" title data-original-title="Lihat semua pesan" class="btn btn-xs btn-primary waves-effect waves-themed" type="button" href="/">Lihat</a>
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content p-0">
					<ul class="notification">
						<li class="unread">
							<a href="#" class="d-flex align-items-center">
								<span class="status mr-2">
									<img src="{{ asset('/img/avatars/farmer.png') }}" class="profile-image rounded-circle" alt="">
								</span>
								<span class="d-flex flex-column flex-1 ml-1">
									<span class="name">Administrator <span class="badge badge-danger fw-n position-absolute pos-top pos-right mt-1">NEW</span></span>
									<span class="msg-a fs-sm">Re: New security codes</span>
									<span class="msg-b fs-xs">Hello again and thanks for being part...</span>
									<span class="fs-nano text-muted mt-1">56 seconds ago</span>
								</span>
							</a>
						</li>
						<li class="unread">
							<a href="#" class="d-flex align-items-center">
								<span class="status mr-2">
									<img src="{{ asset('/img/demo/avatars/avatar-j.png') }}" class="profile-image rounded-circle" alt="">
								</span>
								<span class="d-flex flex-column flex-1 ml-1">
									<span class="name">Adison Lee (Verificator)</span>
									<span class="msg-a fs-sm">Msed quia non numquam eius</span>
									<span class="fs-nano text-muted mt-1">2 minutes ago</span>
								</span>
							</a>
						</li>
						<li>
							<a href="#" class="d-flex align-items-center">
								<span class="status status-success mr-2">
									<img src="{{ asset('/img/demo/avatars/avatar-a.png') }}" class="profile-image rounded-circle" alt="">
								</span>
								<span class="d-flex flex-column flex-1 ml-1">
									<span class="name">Sarah McBrook</span>
									<span class="msg-a fs-sm">Msed quia non numquam eius</span>
									<span class="fs-nano text-muted mt-1">3 days ago</span>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Page Content -->
@endcan
@endsection
@section('scripts')
@parent



@endsection