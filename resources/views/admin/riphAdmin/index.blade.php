@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')

@can('master_riph_access')
{{-- @if (Session::has('success'))
    <div class="alert alert-success" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">{{ Session::get('success') }}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all('<p>:message</p>') as $error)
            {{ $error }}
        @endforeach
    </div>
@endif --}}
<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Data Master <span class="fw-300"><i>RIPH</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a href="{{route('admin.riphAdmin.create')}}" class="mr-1 btn btn-danger btn-xs waves-effect waves-themed" role="button" data-toggle="tooltip" data-offset="0,10" data-original-title="Buat Master RIPH Baru">
                        <i class="fal fa-plus mr-1"></i>Tambah Data
                    </a>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <table id="riphList" class="table table-sm table-bordered table-hover table-striped w-100">
                        <thead class="thead-dark">
                            <tr>
                                <th>Periode</th>
                                <th>Tanggal Update</th>
                                <th>Total Vol. RIPH</th>
                                <th>Beban Tanam (ha)</th>
                                <th>Beban Produksi (ton)</th>
                                <th>Jumlah Importir</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($riph_admin as $riph )
                                <tr>
                                    <td>{{ $riph->periode }}</td>
                                    <td>{{ $riph->updated_at->format('d/m/Y') }}</td>
                                    <td>{{ number_format($riph->v_pengajuan_import, 0, ',', '.') }}</td>
                                    <td>{{ number_format($riph->v_beban_tanam, 0, ',', '.') }}</td>
                                    <td>{{ number_format($riph->v_beban_produksi, 0, ',', '.') }}</td>
                                    <td>{{ number_format($riph->jumlah_importir, 0, ',', '.') }}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary btn-icon waves-effect waves-themed" href="/admin/riphAdmin/{{ $riph->id }}/edit" data-toggle="tooltip" data-offset="0,10" data-original-title="Ubah Data"><i class="fal fa-edit"></i></a>
                                        <a class="btn btn-xs btn-danger btn-icon waves-effect waves-themed" href="" data-toggle="tooltip" data-offset="0,10" data-original-title="Hapus Data"><i class="fal fa-trash"></i></a>
                                    </td>
                                </tr>    
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')

<script>
    $(document).ready(function() {
        // initialize datatable
        
        $('#riphList').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: false,
            pageLength: 10,
            order: [
                [0, 'desc']
            ],
            dom:
                
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                /*{
                	extend:    'colvis',
                	text:      'Column Visibility',
                	titleAttr: 'Col visibility',
                	className: 'mr-sm-3'
                },*/
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });

    });
</script>
@endsection