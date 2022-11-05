@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('onfarm_access')
@if (!empty($pagedata['alerttitle']))
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div id="panel-1" class="panel">
            <!-- diakses melalui menu verificator tasks > ONFARM 
			yang ingin dicapai adalah:
			menampilkan daftar pengajuan verifikasi lapangan
		    -->
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-map mr-1"></i>VERIFIKASI LAPANGAN
                </h2>
                <div class="panel-toolbar">
                    <a class="text-muted mr-1" data-toggle="tooltip" data-offset="0,10" data-original-title="Ini adalah daftar Pengajuan Verifikasi Lapangan yang telah diajukan oleh pelaku usaha dan siap untuk ditindaklanjuti."><i class="fal fa-info-circle"></i></a>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table id="dt-onsiteList" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="bg-warning-50">
                                <tr>
                                    <th id="" hidden>Nama Perusahaan</th>
                                    <th id="">No. Pengajuan</th>
                                    <th id="">No. RIPH</th>
                                    <th id="">Tanggal diajukan</th>
                                    <th id="">Tanggal Status</th>
                                    <th id="">Status</th>
                                    <th id="">Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td hidden>API Nama Perusahaan</td>
                                    <!-- field berikut ini berasal dari Nomor RIPH (jika pengajuan RIPH), PKS (jika pks), tanam/produksi (jika tanam/produksi) -->
                                    <td>API No. Pengajuan</td>
                                    <td>API No. RIPH</td>
                                    <td>API Time stamp pengajuan</td>
                                    <td>API time stamp status</td>
                                    <!-- khusus status lunas, icon tertaut dengan Surat Keterangan Lunas DIgital -->
                                    <td>API last status</td>
                                    <td>API Result</td>
                                </tr>
                                <tr>
                                    <td hidden>Nama Perusahaan</td>
                                    <!-- field berikut ini berasal dari Nomor RIPH (jika pengajuan RIPH), PKS (jika pks), tanam/produksi (jika tanam/produksi) -->
                                    <td class="fw-900">
                                        <a href="/verification/onfarm/detail">No. Pengajuan</a>
                                    </td>
                                    <td>No. RIPH</td>
                                    <td>31-03-2022</td>
                                    <td>31-03-2022</td>
                                    <!-- khusus status lunas, icon tertaut dengan Surat Keterangan Lunas DIgital -->
                                    <td class="text-center">
                                        <a class="badge btn-sm btn-warning">On Progress
                                            <i></i>
                                        </a>
                                    </td>
                                    <!-- khusus status lunas, icon tertaut dengan Surat Keterangan Lunas DIgital -->
                                    <td class="text-center">
                                        <a class="text-muted">
                                            <i class="fas fa-ban"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@endsection

@section('scripts')
@parent
<script>
	
	$(document).ready(function() {
        // initialize datatable
        $('#dt-onsiteList').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
            ],
            rowGroup: {
                dataSrc: 0
            }
        });

    });

</script>


@endsection