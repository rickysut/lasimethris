@extends('layouts.app')
@section('content')
<div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
	<div class="row">
		<div class="col col-md-6 col-lg-7 hidden-sm-down">
			<h2 class="fs-xxl fw-500 mt-4 text-white">
				<small class="h3 fw-300 mt-3 mb-5 text-white opacity-100">
					{{ trans('panel.site_subtitle') }}
					<p>{{ trans('panel.site_registertitle') }} <a href="{{ trans('panel.site_riph') }}" class="fw-700 text-white">{{ trans('panel.site_riph') }}</a></p>
				</small>
			</h2>
			<div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
				<div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
					Associate
				</div>
				<div class="d-flex flex-row opacity-70 align-items-center">
					<a href="{{ trans('panel.site_riph') }}" class="text-white mr-2">
						<img src="{{ asset('img/riphonline.svg') }}" alt="simethris" aria-roledescription="logo" style="width:25px; height:auto;">
					</a>
					
				</div>
			</div>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto shadow-lg">
			<h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
				Secure login
				<div class="help-block text-white">{{  trans('panel.login_title') }}</div>
			</h1>
			<div class="card p-4 rounded-plus bg-faded">
				<div class="d-sm-block d-md-none text-center mt-0 mb-1">
					<img src="{{ asset('img/logo-icon.png') }}" alt="simethris" aria-roledescription="logo" style="width:150px; height:auto;">
				</div>
				<form id="js-login" novalidate="" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="form-group" >
						<label class="form-label" for="roleaccess">{{ trans('panel.role_title') }}</label>
						<div class="input-group" data-toggle="tooltip" title data-original-title="{{ trans('panel.role_tip') }}">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<span class="fal fa-user-lock"></span>
								</div>
							</div>
							<select id="roleaccess" name="roleaccess" type="text" class="form-control form-control-md" required autocomplete="roleaccess" autofocus placeholder="select role" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
								<option hidden>- select Your Role Access</option>
								<option value="">- Kementerian/Direktorat</option>
								<option value="">- Pelaku Usaha</option>
							</select>
							<div class="invalid-feedback">
								No, you missed this one.
							</div>
						</div>
						<div class="help-block text-muted">username untuk meng-akses aplikasi ini</div>
					</div>
					<div class="form-group" >
						<label class="form-label" for="username">Username</label>
						<div class="input-group" data-toggle="tooltip" title data-original-title="Gunakan akun yang sama dengan akun Anda di aplikasi RIPH">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<span class="fal fa-user"></span>
								</div>
							</div>
							<input id="username" name="username" type="text" class="form-control form-control-md" required autocomplete="username" autofocus placeholder="your id or email" value="usernameanda@simethris.com" />
							<div class="invalid-feedback">
								No, you missed this one.
							</div>
						</div>
						<div class="help-block text-muted">username untuk meng-akses aplikasi ini</div>
					</div>
					<div class="form-group">
						<label class="form-label" for="password">Password</label>
						<div class="input-group bg-white shadow-inset-2" data-toggle="tooltip" title data-original-title="Gunakan katakunci yang terhubung dengan akun Anda di aplikasi RIPH">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<span class="fal fa-key"></span>
								</div>
							</div>
							<input id="password" name="password" type="text" class="form-control form-control-md border-right-0 bg-transparent pr-0" required autocomplete="password" autofocus placeholder="your id or email" value="password" />
							<div class="invalid-feedback">
								No, you missed this one.
							</div>
							<div class="input-group-append">
								<span class="input-group-text bg-transparent border-left-0">
									<i class="fal fa-eye"  id="togglePassword"></i>
								</span>
							</div>
						</div>
						<div class="help-block text-muted">kata kunci untuk meng-akses aplikasi ini</div>
					</div>
					<div class="form-group text-left">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="remember" name="remember">
							<label class="custom-control-label" for="remember">
								{{ trans('global.remember_me') }}
							</label>
						</div>
					</div>
					<div class="row no-gutters">
						<div class="col-lg-6 pr-lg-1 my-2">
							<button type="submit" class="btn btn-primary btn-block btn-sm">
								{{ trans('global.login') }}
							</button>
						</div>
						{{-- <div class="col-lg-6 pl-lg-1 my-2">
							@if(Route::has('password.request'))
							<a class="btn btn-block btn-link px-0" href="{{ route('password.request') }}">
								{{ trans('global.forgot_password') }}
							</a><br>
							@endif
						</div> --}}
						
					</div>
					{{-- @if (Route::has('register'))
					<div class="text-center mt-4">
						<label>
							Belum terdaftar ? <a href="{{ route('register') }}"> Daftarkan disini </a>
						</label>	
					</div>
					@endif --}}
				</form>
			</div>
		</div>
	</div>
	
</div>

@endsection