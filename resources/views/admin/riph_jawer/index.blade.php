@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Data Master <span class="fw-300"><i>RIPH</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a href="{{route('admin.riph.create')}}" class="mr-1 btn btn-danger btn-xs waves-effect waves-themed" role="button" data-toggle="tooltip" data-offset="0,10" data-original-title="Buat Master RIPH Baru">
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
                            <tr>
                                <td>[year]</td>
                                <td>[date_create or date_modified]</td>
                                <td>[v_riph]</td>
                                <td>[beban_tanam]</td>
                                <td>[beban_[produksi]]</td>
                                <td>[count_importir]</td>
                                <td>
                                    <a>Edit</a>
                                    <a>Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2020</td>
                                <td>05-02-2020</td>
                                <td>1.000.000</td>
                                <td>8.333</td>
                                <td>50.000</td>
                                <td>100</td>
                                <td>
                                    <a class="btn btn-xs btn-primary btn-icon waves-effect waves-themed" href="{{route('admin.riph.show')}}" data-toggle="tooltip" data-offset="0,10" data-original-title="Ubah Data"><i class="fal fa-edit"></i></a>
                                    <a class="btn btn-xs btn-danger btn-icon waves-effect waves-themed" href="" data-toggle="tooltip" data-offset="0,10" data-original-title="Hapus Data"><i class="fal fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>08-02-2021</td>
                                <td>868.324</td>
                                <td>7.236</td>
                                <td>43.416</td>
                                <td>117</td>
                                <td>
                                    <a class="btn btn-xs btn-primary btn-icon waves-effect waves-themed" href="{{route('admin.riph.show')}}" data-toggle="tooltip" data-offset="0,10" data-original-title="Ubah Data"><i class="fal fa-edit"></i></a>
                                    <a class="btn btn-xs btn-danger btn-icon waves-effect waves-themed" href="" data-toggle="tooltip" data-offset="0,10" data-original-title="Hapus Data"><i class="fal fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
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
                /*	--- Layout Structure 
                	--- Options
                	l	-	length changing input control
                	f	-	filtering input
                	t	-	The table!
                	i	-	Table information summary
                	p	-	pagination control
                	r	-	processing display element
                	B	-	buttons
                	R	-	ColReorder
                	S	-	Select

                	--- Markup
                	< and >				- div element
                	<"class" and >		- div with a class
                	<"#id" and >		- div with an ID
                	<"#id.class" and >	- div with an ID and a class

                	--- Further reading
                	https://datatables.net/reference/option/dom
                	--------------------------------------
                 */
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