@extends('layouts.admin')
@section('content')
@can('landing_access')
@php($unreadmsg = \App\Models\QaTopic::unreadCount())
@php($msgs = \App\Models\QaTopic::unreadMsg())
<div class="row mb-5">
	<div class="col text-center">
		<h3 class="display-4 hidden-md-down">Selamat Datang di Simethris, <span class="fw-700">{{ Auth::user()->name }}</span></h3>
		<h2 class="display-4 hidden-sm-up">Hallo, <span class="fw-700">{{ Auth::user()->name }}</span></h2>
		<h4 class="hidden-md-down"><p> {{ $quote }}</p></h4>
		<span class="text-muted js-get-date"></span>
	</div>
</div>

<!-- Page Content -->
<div class="row">
	<div class="col-lg-7">
		<div id="panel-1" class="panel">
			
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-rss mr-1"></i>New Feeds
				</h2>
				<div class="panel-toolbar">
					<a href="{{ route('admin.feeds.index') }}" data-toggle="tooltip" title data-original-title="Lihat semua Feeds" class="btn btn-xs btn-primary waves-effect waves-themed" type="button" href="/">Lihat</a>
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
			
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-envelope mr-1"></i>Pesan baru
				</h2>
				<div class="panel-toolbar">
					<a href="{{ route('admin.messenger.index') }}" data-toggle="tooltip" title data-original-title="Lihat semua pesan" class="btn btn-xs btn-primary waves-effect waves-themed" type="button" href="/">Lihat</a>
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content p-0">
					<ul class="notification">
						@foreach ($msgs as $item)
						<li >
							<a href="#" class="d-flex align-items-center">
								<span class="mr-2">
									@php($user = \App\Models\User::getUserById($item['sender']))
									@if (!empty($user[0]->data_user->logo))
										<img src="{{ Storage::disk('public')->url($user[0]->data_user->logo)}}" class="profile-image rounded-circle" alt="">
									@else
										<img src="{{ asset('/img/favicon.png') }}" class="profile-image rounded-circle" alt="">
									@endif
								</span>
								<span class="d-flex flex-column flex-1 ml-1">
									<span class="name">{{  $user[0]->name  }}<span class="badge badge-danger fw-n position-absolute pos-top pos-right mt-1">NEW</span></span>
									<span class="msg-a fs-sm">{{ $item['subject'] }}</span>
									<span class="msg-b fs-xs">{{ $item['content'] }}</span>
									@if ($item['create_at']->isToday())
										@if ($item['create_at']->diffInHours(date('Y-m-d H:i:s')) > 1)
											<span class="fs-nano text-muted mt-1">{{ $item['create_at']->diffInHours(date('Y-m-d H:i:s')) }} jam yang lalu</span>	
										@else
											@if ($item['create_at']->diffInMinutes(date('Y-m-d H:i:s')) > 1)
												<span class="fs-nano text-muted mt-1">{{ $item['create_at']->diffInMinutes(date('Y-m-d H:i:s')) }} menit yang lalu</span>	
											@else
												<span class="fs-nano text-muted mt-1">{{ $item['create_at']->diffInSeconds(date('Y-m-d H:i:s')) }} detik yang lalu</span>
											@endif
										@endif
									@else
										@if ($item['create_at']->isYesterday())
											<span class="fs-nano text-muted mt-1">Kemarin</span>
										@else
											<span class="fs-nano text-muted mt-1">{{ $item['create_at'] }}</span>
										@endif
									@endif
								</span>
							</a>
						</li>	
						@endforeach
						
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