@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
{{-- @include('partials.subheader') --}}
@can('dashboard_access')
<!-- Page Title Heading -->
<div class="subheader d-print-none">
	<h1 class="subheader-title">
		<i class="subheader-icon {{ ($heading_class ?? '') }}"></i><span class="fw-700 mr-2">{{  ($page_heading ?? '') }}</span><span class="fw-300">Verifikasi</span>
	</h1>
	
	<div class="subheader-block d-lg-flex align-items-center">
		<div class="d-inline-flex flex-column justify-content-center ">
			<select type="text" id="statusTanam" class="form-control form-control-sm" data-toggle="tooltip" title data-original-title="pilih tahun awal laporan" placeholder="Task..." aria-label="statusTanam" aria-describedby="statusTanam">
				<option hidden>- pilih tahun laporan</option>
					<option disabled></option>
					<option>2022</option>
					<option>2023</option>
					<option disabled></option>
			</select>
		</div>
	</div>
	<div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
		<div class="d-inline-flex flex-column justify-content-center mr-3">
			<button class="btn btn-primary ">Lihat
			</button>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<div id="new_request" class="p-3 bg-danger-300 rounded overflow-hidden position-relative text-white mb-g">
			<div class="">
				<h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah pengajuan yang BELUM ditindaklanjuti">
					<!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang belum diverifikasi. where status = 1 (user) -->
					20
					<small class="m-0 l-h-n">Pengajuan</small>
				</h3>
			</div>
			<i class="fal fa-download position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:4rem"></i>
		</div>
	</div>
	<div class="col-md-3">
		<div id="onprogress" class="p-3 bg-warning-300 rounded overflow-hidden position-relative text-white mb-g">
			<div class="">
				<h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah pengajuan yang SEDANG diverifikasi.">
					<!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang SEDANG diverifikasi. where status = 2 (mulai/on progress) -->
					5
					<small class="m-0 l-h-n">Diverifikasi</small>
				</h3>
			</div>
			<i class="fal fa-hourglass position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:4rem"></i>
		</div>
	</div>
	<div class="col-md-3">
		<div id="verified" class="p-3 bg-info-300 rounded overflow-hidden position-relative text-white mb-g">
			<div class="">
				<h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah pengajuan yang TELAH diverifikasi.">
					<!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang TELAH diverifikasi. where status = 3 & 4 (Verified OK & Verified Perbaikan) -->
					7
					<small class="m-0 l-h-n">Terverifikasi</small>
				</h3>
			</div>
			<i class="fal fa-check-circle position-absolute pos-right pos-bottom opacity-40 mb-n1 mr-n1" style="font-size:4rem"></i>
		</div>
	</div>
	<div class="col-md-3">
		<div id="accomplished" class="p-3 bg-success-300 rounded overflow-hidden position-relative text-white mb-g">
			<div class="">
				<h4 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah SKL diterbitkan.">
					<!-- nilai ini diperoleh dari jumlah seluruh pengajuan yang TELAH LUNAS. where status = 5 (LUNAS) -->
					7
					<small class="m-0 l-h-n">Lunas</small>
				</h4>
			</div>
			<i class="fal fa-award position-absolute pos-right pos-bottom opacity-40 mb-n1 mr-n1" style="font-size:4rem"></i>
		</div>
	</div>
</div>
<div class="row">
	<!-- Bar Chart
		Nilai Bar chart ini diperoleh dari tabel verifikasi (temporary) yang mem-populate data dengan status verifikasi = 3 & 4 (verified ok & perbaikan), contoh:
		____________________________________________________________________________________________________
		| No. RIPH | Wajib Tanam | Realisasi Tanam | Verifikasi | Wajib Prod | Realisasi Prod | Verifikasi |
		----------------------------------------------------------------------------------------------------
		| xxxxxxxx |     nnnn    |      nnnnnn     |   nnnnnnn  |     nnnn   |    nnnnnn      |   nnnnnnn  |
		
		Nilai KEWAJIBAN: adalah jumlah luas/produksi seluruh wajib tanam yang telah diverifikasi
		Nilai REALISASI: adalah jumlah luas/produksi seluruh realisasi yang telah diverifikasi
		Nilai VERIFIKASI: adalah jumlah luas/produksi seluruh hasil verifikasi.
		Proses dan metode hanyalah contoh untuk menggambarkan apa yang ingin dicapai. Dapat menggunakan teknologi lain yang lebih relevan dan lebih baik.
	-->
	<div class="col-md-6">
		<div class="panel" id="panel-1">
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-seedling mr-1"></i>Verifikasi <span class="fw-300"><i>Wajib Tanam</i></span>
				</h2>
				<div class="panel-toolbar">
					<i class="fal fa-lightbulb-on text-info" data-toggle="tooltip" title data-original-title="Nilai Realisasi pada diagram ini bukan nilai total realisasi, melainkan nilai realisasi yang dilaporkan oleh pelaku usaha dan telah diverifikasi."></i>
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div id="barTanam" style="width:100%; height:250px;"></div>
					
				</div>
			</div>
			<div class="card-footer">
				<div class="text-medium-emphasis small d-flex justify-content-between">
					<div class="d-none d-md-block">
						<span class="text-muted">Nilai Verifikasi diperoleh dari hasil verifikasi lapangan. Dalam satuan ha.</span>
					</div>
					<div class="text-muted"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel" id="panel-2">
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-balance-scale-left mr-1"></i>Verifikasi <span class="fw-300"><i>Wajib Produksi</i></span>
				</h2>
				<div class="panel-toolbar">
					<i class="fal fa-lightbulb-on text-info" data-toggle="tooltip" title data-original-title="Nilai Realisasi pada diagram ini bukan nilai total realisasi, melainkan nilai realisasi yang dilaporkan oleh pelaku usaha dan telah diverifikasi."></i>
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div id="barProduksi" style="width:100%; height:250px;"></div>
					<!-- Row -->
				</div>
			</div>
			<div class="card-footer">
				<div class="text-medium-emphasis small d-flex justify-content-between">
					<div class="d-none d-md-block">
						<span class="text-muted">Nilai Verifikasi diperoleh dari hasil verifikasi lapangan. Dalam satuan ton.</span>
					</div>
					<div class="text-muted"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<!-- Tabel Verifikasi
		Nilai Tabel chart ini diperoleh dari kueri data verifikasi dengan status mulai dari 0 s. d 5. Temporary tabel sesuai dengan tampilan pada layar html.
		Setiap status merupakan pintasan cepat ke halaman terkait.
	-->
	<div class="col-md-12">
		<div class="panel" id="panel-2">
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-ballot-check mr-1"></i>Verification <span class="fw-300"><i>Tasks</i></span>
				</h2>
				<div class="panel-toolbar">
					@include('layouts.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					
                    <table id="sum_verif"  class="table table-bordered ajaxTable table-hover datatable table-sm w-100">
                        <thead  class="bg-primary-100 text-white text-center">
								<tr>
									<th rowspan="2">Perusahaan</th>
									<th rowspan="2">Nomor RIPH</th>
									<th colspan="2">Tahap 1 <sup>(Lapangan)</sup></th>
									<th rowspan="2">Tahap 2 <sup>(Online)</sup></th>
									<th rowspan="2">Tahap 3 <sup>SKL</sup></th>
									<th rowspan="2">Status</th>
								</tr>
								<tr>
									<th>Tanam</th>
									<th>Produksi</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td class="text-left">PT. Bawang Nusantara</td>
									<td>xxxx/PP.240/D/MM/YYY</td>
									<td><a class="badge btn-sm btn-info" href="/verifikasi/onfarm">Submitted</a></td>
									<td><a class="badge btn-sm btn-info" href="/verifikasi/onfarm">Submitted</a></td>
									<td><a class="badge btn-sm btn-info" href="/verifikasi/online">Submitted</a></td>
									<td><a class="badge btn-sm btn-default">No Status</a></td>
									<td>-</td>
								</tr>
								<tr>
									<td class="text-left">PT. Bawang Nusantara</td>
									<td>xxxx/PP.240/D/MM/YYY</td>
									<td><a class="badge btn-sm btn-warning" href="/verifikasi/onfarm">On progress</a></td>
									<td><a class="badge btn-sm btn-info" href="/verifikasi/onfarm">Submitted</a></td>
									<td><a class="badge btn-sm btn-info" href="/verifikasi/online">Submitted</a></td>
									<td><a class="badge btn-sm btn-default">No Status</a></td>
									<td>Verifying</td>
								</tr>
								<tr>
									<td class="text-left">PT. Bawang Nusantara</td>
									<td>xxxx/PP.240/D/MM/YYY</td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-warning" href="/verifikasi/onfarm">On progress</a></td>
									<td><a class="badge btn-sm btn-info" href="/verifikasi/online">Submitted</a></td>
									<td><a class="badge btn-sm btn-default">No Status</a></td>
									<td>Verifying</td>
								</tr>
								<tr>
									<td class="text-left">PT. Bawang Nusantara</td>
									<td>xxxx/PP.240/D/MM/YYY</td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-danger" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-warning" href="/verifikasi/online">On progress</a></td>
									<td><a class="badge btn-sm btn-default">No Status</a></td>
									<td>Verifying</td>
								</tr>
								<tr>
									<td class="text-left">PT. Bawang Nusantara</td>
									<td>xxxx/PP.240/D/MM/YYY</td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/online">Verified</a></td>
									<td><a class="badge btn-sm btn-info" href="/verifikasi/lunas_check">Submitted</a></td>
									<td>Verifying</td>
								</tr>
								<tr>
									<td class="text-left">PT. Bawang Nusantara</td>
									<td>xxxx/PP.240/D/MM/YYY</td>
									<td><a class="badge btn-sm btn-danger" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/online">Verified</a></td>
									<td><a class="badge btn-sm btn-danger" href="/verifikasi/lunas_check">Rejected</a></td>
									<td>Verifying</td>
								</tr>
								<tr>
									<td class="text-left">PT. Bawang Nusantara</td>
									<td>xxxx/PP.240/D/MM/YYY</td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/onfarm">Verified</a></td>
									<td><a class="badge btn-sm btn-success" href="/verifikasi/online">Verified</a></td>
									<td><a class="badge btn-sm btn-success" href="/skl/skl">Accomplished</a></td>
									<td>-</td>
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
		let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        // @can('user_delete')
        // 	let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
        // 	let deleteButton = {
        // 		text: deleteButtonTrans,
        // 		url: "{{ route('admin.users.massDestroy') }}",
        // 		className: 'btn-danger  waves-effect waves-themed  btn-sm mr-1',
        // 		action: function (e, dt, node, config) {
        // 			var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
        // 				return entry.id
        // 			});

        // 			if (ids.length === 0) {
        // 				alert('{{ trans('global.datatables.zero_selected') }}')

        // 				return
        // 			}

        // 			if (confirm('{{ trans('global.areYouSure') }}')) {
        // 				$.ajax({
        // 				headers: {'x-csrf-token': _token},
        // 				method: 'POST',
        // 				url: config.url,
        // 				data: { ids: ids, _method: 'DELETE' }})
        // 				.done(function () { location.reload() })
        // 			}
        // 		}
        // 	}
        // 	dtButtons.push(deleteButton)
        // @endcan

        let dtOverrideGlobals = {
            processing: true,
            serverside: true,
            responsive: true,
            lengthChange: false,
            pageLength: 10,
            order: [
                [0, 'asc']
            ],
            buttons: dtButtons,
            
            //aaSorting: [],
            
            //ajax: "#",
            // columns: [
            // 	{ data: 'placeholder', name: 'placeholder' },
            // 	{ data: 'name', name: 'name' },
            // 	{ data: 'username', name: 'username' },
            // 	{ data: 'roleaccess', name: 'roleaccess' },
            // 	{ data: 'email', name: 'email' },
            // 	//{ data: 'email_verified_at', name: 'email_verified_at' },
            // 	{ data: 'roles', name: 'roles.title' },
            // 	{ data: 'actions', name: '{{ trans('global.actions') }}' }
            // ],
            
        };
        let table = $('#sum_verif').DataTable(dtOverrideGlobals);
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
	});
</script>
<!-- barchart Tanam c3 -->
<script>
	var colors = [color.primary._500, color.info._500, color.success._500, color.danger._500, color.warning._500];
	
	var barChart = c3.generate(
	{
		bindto: "#barTanam",
		data:
		{
			columns: [
				['Kewajiban', 157],
				['Realisasi', 149],
				['Verifikasi', 145]
			],
			type: 'bar'
		},
		color:
		{
			pattern: ['#63e9db','#37e2d0','#1dc9b7']
		},
		axis: {
			x: {
				type: 'category',
				categories: 
				[""]
			},
			y:{
				show: true
			}
		},
		bar:
		{
			width:
			{
				ratio: 0.5 // this makes bar width 50% of length between ticks
			},
			space: 0.25
			// or
			//width: 100 // this makes bar width 100px
		}
	});
	
	var barChart = c3.generate(
	{
		bindto: "#barProduksi",
		data:
		{
			columns: [
				['Kewajiban', 157],
				['Realisasi', 149],
				['Verifikasi', 145]
			],
			type: 'bar'
		},
		color:
		{
			pattern: ['#ffd274','#ffc241','#ffb20e']
		},
		axis: {
			x: {
				type: 'category',
				categories: 
				[""]
			},
			y:{
				show: true
			}
		},
		bar:
		{
			width:
			{
				ratio: 0.5 // this makes bar width 50% of length between ticks
			},
			space: 0.25
			// or
			//width: 100 // this makes bar width 100px
		}
	});
</script>


@endsection