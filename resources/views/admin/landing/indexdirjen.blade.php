@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('dashboard_access')
<div class="row">
	<div class="col-12">
		<div class="panel" id="panel-1">
			<div class="panel-hdr">
				<h2>
					<span class="badge badge-danger fw-n mr-1">5</span> Pengajuan Baru </span>
				</h2>
				<div class="panel-toolbar">
					@include('layouts.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<table id="dt-ajulunas" class="table table-sm table-hover table-striped w-100">
						<thead>
							<tr>
								<th></th>
								<th>Perusahaan</th>
								<th>RIPH</th>
								<th>Target</th>
								<th>Completed</th>
								<th>Submitted</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">
									<span class="mr-2">
										<img src="{{ asset('/img/logo-big.png') }}" class="profile-image rounded-circle" alt="company logo">
									</span>
								</td>
								<td><span class="badge badge-danger fw-n mr-1">NEW</span><a href="{{ route('admin.verifikasi.dir_check_b') }}">Company Name</a></td>
								<td>xxxx/PP.240/D/MM/YYY</td>
								<td>
									<div class="">Prod.: 1.000 ton</div>
									<div class="">Area: 100 ha</div>
								</td>
								<td>
									<div class="">Prod.: 950 ton</div>
									<div class="">Area: 95 ha</div>
								</td>
								<td>
									<div class="">Date: 30-04-2022</div>
									<div class="">by: Verificator Name</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">
									<span class="mr-2">
										<img src="{{ asset('/img/logo-big.png') }}" class="profile-image rounded-circle" alt="company logo">
									</span>
								</td>
								<td><span class="badge badge-danger fw-n mr-1">NEW</span><a href="{{  route('admin.verifikasi.dir_check_c') }}">Company Name</a></td>
								<td>xxxx/PP.240/D/MM/YYY</td>
								<td>
									<div class="">Prod.: 1.000 ton</div>
									<div class="">Area: 100 ha</div>
								</td>
								<td>
									<div class="">Prod.: 950 ton</div>
									<div class="">Area: 95 ha</div>
								</td>
								<td>
									<div class="">Date: 30-04-2022</div>
									<div class="">by: Verificator Name</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Content -->

@endcan
@endsection
@section('scripts')
@parent



@endsection