@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('landing_access')
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
<script>
	$(document).ready(function()
	{
		$('#dt-ajulunas').dataTable(
		{
			responsive: true,
			pageLength: 15,
			order: [
				[0, 'desc']
			],
			dom: 
					"<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'l>>" +
					"<'row'<'col-sm-12'tr>>" +
					"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

		});
	});
// $(function () {
//   	let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
// 	@can('user_delete')
// 		let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
// 		let deleteButton = {
// 			text: deleteButtonTrans,
// 			url: "{{ route('admin.users.massDestroy') }}",
// 			className: 'btn-danger  waves-effect waves-themed  btn-sm mr-1',
// 			action: function (e, dt, node, config) {
// 				var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
// 					return entry.id
// 				});

// 				if (ids.length === 0) {
// 					alert('{{ trans('global.datatables.zero_selected') }}')

// 					return
// 				}

// 				if (confirm('{{ trans('global.areYouSure') }}')) {
// 					$.ajax({
// 					headers: {'x-csrf-token': _token},
// 					method: 'POST',
// 					url: config.url,
// 					data: { ids: ids, _method: 'DELETE' }})
// 					.done(function () { location.reload() })
// 				}
// 			}
// 		}
// 		dtButtons.push(deleteButton)
// 	@endcan

//   	let dtOverrideGlobals = {
//     	buttons: dtButtons,
//     	processing: true,
//     	serverSide: true,
//     	retrieve: true,
//     	aaSorting: [],
//     	ajax: "{{ route('admin.users.index') }}",
//     	columns: [
//       		{ data: 'placeholder', name: 'placeholder' },
// 			{ data: 'name', name: 'name' },
// 			{ data: 'username', name: 'username' },
// 			{ data: 'roleaccess', name: 'roleaccess' },
// 			{ data: 'email', name: 'email' },
// 			//{ data: 'email_verified_at', name: 'email_verified_at' },
// 			{ data: 'roles', name: 'roles.title' },
// 			{ data: 'actions', name: '{{ trans('global.actions') }}' }
//     	],
// 		orderCellsTop: true,
// 		order: [[ 1, 'desc' ]],
// 		pageLength: 10,
//   	};
//   	let table = $('#dt-ajulunas').DataTable(dtOverrideGlobals);
// 	$('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
// 		$($.fn.dataTable.tables(true)).DataTable()
// 			.columns.adjust();
// 	});
// });

</script>
@endsection