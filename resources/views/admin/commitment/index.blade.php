@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('commitment_access')
@if (!empty($pagedata['alerttitle']))
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
@endif
<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Daftar Komitmen <span class="fw-300"><i>Wajib Tanam</i></span>
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <table id="riphList" class="table table-sm table-bordered table-hover table-striped w-100">
                        <thead class="thead-dark">
                            <tr>
                                <th id="status"></th>
                                <th id="year" hidden>Tahun Terbit</th>
                                <th id="no_riph">No. RIPH</th>
                                <th id="date_start">Tanggal.Terbit</th>
                                <th id="locus" width="10%">Lokasi.Tanam</th>
                                <th id="vol_riph">V. RIPH (ton)</th>
                                <th id="crops_target">Target Tanam (ha)</th>
                                <th id="crops_progress">Realisasi Tanam (ha)</th>
                                <th id="harvest_target">Target Produksi (ton)</th>
                                <th id="harvest_progress">Realisasi Produksi (ton)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><i class="fas fa-exclamation-triangle text-warning" data-toggle="tooltip" title data-original-title="WARNING! No Data Available"></i></td>
                                <td hidden>2022</td>
                                <td><a href="/commitment/detail">0155/PP.240/D/03/2022</a></td>
                                <td>2022-03-24</td>
                                <td>3323 - 33</td>
                                <td>5.640</td>
                                <td>autocalculate</td>
                                <td>total tanam</td>
                                <td>autocalculate</td>
                                <td>total produksi</td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fas fa-seedling text-success" data-toggle="tooltip" title data-original-title="Data Tanam is Available"></i></td>
                                <td hidden>2021</td>
                                <td><a href="/commitment/detail">xxxx/PP.240/D/MM/YYYY</a></td>
                                <td>dd mmmm yyyy</td>
                                <td>Kabupaten - Provinsi</td>
                                <td>xx.xxx</td>
                                <td>autocalculate</td>
                                <td>total tanam</td>
                                <td>autocalculate</td>
                                <td>total produksi</td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fas fa-dolly text-warning" data-toggle="tooltip" title data-original-title="Data Produksi is Available"></i></td>
                                <td hidden>2020</td>
                                <td><a href="/commitment/detail">xxxx/PP.240/D/MM/YYYY</a></td>
                                <td>dd mmmm yyyy</td>
                                <td>Kabupaten - Provinsi</td>
                                <td>xx.xxx</td>
                                <td>autocalculate</td>
                                <td>total tanam</td>
                                <td>autocalculate</td>
                                <td>total produksi</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <i class="fas fa-upload text-danger" data-toggle="tooltip" title data-original-title="Data diajukan verifikasi"></i>
                                </td>
                                <td hidden>2022</td>
                                <td><a href="/commitment/detail">xxxx/PP.240/D/MM/YYYY</a></td>
                                <td>dd mmmm yyyy</td>
                                <td>Kabupaten - Provinsi</td>
                                <td>xx.xxx</td>
                                <td>autocalculate</td>
                                <td>total tanam</td>
                                <td>autocalculate</td>
                                <td>total produksi</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <a href="/" class="fs-xl">
                                        <i class="fas fa-award text-warning" data-toggle="tooltip" title data-original-title="LUNAS! Lihat Sertifikat Keterangan Lunas"></i>
                                    </a>
                                </td>
                                <td hidden>2019</td>
                                <td><a href="">xxxx/PP.240/D/MM/YYYY</a></td>
                                <td>dd mmmm yyyy</td>
                                <td>Kabupaten - Provinsi</td>
                                <td>xx.xxx</td>
                                <td>autocalculate</td>
                                <td>total tanam</td>
                                <td>autocalculate</td>
                                <td>total produksi</td>
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
		$('#dt-riph').dataTable(
		{
			responsive: true,
			pageLength: 15,
			order: [
				[1, 'desc']
			],
			rowGroup:
			{
				dataSrc: 1
			},
			dom: 
					"<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'l>>" +
					"<'row'<'col-sm-12'tr>>" +
					"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			
		});
	});

</script>


@endsection