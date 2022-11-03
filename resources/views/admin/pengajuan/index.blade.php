@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('pengajuan_access')
@if (!empty($pagedata['alerttitle']))
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table id="verifList" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nomor Pengajuan</th>
                                    <th>Detail</th>
                                    <th>Jenis</th>
                                    <th>Tanggal diajukan</th>
                                    <th>Tanggal Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>API Nomor Pengajuan</td>
                                    <td>API Nomor</td>
                                    <td>API Jenis</td>
                                    <td>API Time stamp pengajuan</td>
                                    <td>API time stamp status</td>
                                </tr>
                                <tr>
                                    <td><a href="/v2/pengajuan/submitted">ID PENGAJUAN-1</a></td>
                                    <td>No. RIPH</td>
                                    <td>Verifikasi</td>
                                    <td>31-03-2022</td>
                                    <td>31-03-2022</td>
                                </tr>
                                <tr>
                                    <td><a href="/v2/pengajuan/submitted">ID PENGAJUAN-2</a></td>
                                    <td>No. RIPH</td>
                                    <td>Ket. Lunas</td>
                                    <td>31-03-2021</td>
                                    <td>31-03-2021</td>
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
        $('#verifList').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: true,
            pageLength: 10,
            order: [
                [0, 'asc']
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

