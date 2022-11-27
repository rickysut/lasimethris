@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>

<!--
	Yang ingin dicapai halaman ini adalah:
	Halaman ini ditujukan bagi role Administrator.
	Fungsi halaman ini selain sebagai Report (printable), juga untuk mengakses data-data lebih detail per nomor riph (perusahaan). sehingga Administrator mendapat gambaran yang cukup atas kinerja dari setiap perusahaan.
-->
<div class="row">
    <div class="col-md-12">
        <div class="panel" id="panel-1">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon"></i>Daftar RIPH <span class="fw-300"><i>Simethris</i></span>
                </h2>
                <div class="panel-toolbar">
                    <i class="fal fa-lightbulb-on text-info" data-toggle="tooltip" title data-original-title="Sorry, I have no clue for this panel."></i>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="">
                        <table id="dt_tblList" class="table table-sm table-hover table-bordered w-100 dataTable text-center">
                            <thead>
                                <tr class="bg-warning-50">
                                    <th colspan="3">RIPH</th>
                                    <th colspan="3">Perusahaan</th>
                                    <th colspan="3">Tanam (ha)</th>
                                    <th colspan="3">Produksi (ton)</th>
                                    <th rowspan="2">Lihat</th>
                                </tr>
                                <tr class="bg-warning-100">
                                    <th>Nomor</th>
                                    <th>Tgl Terbit</th>
                                    <th>Volume</th>
                                    <th>Nama</th>
                                    <th>Kontak</th>
                                    <th>No. Kontak</th>
                                    <th>Kewajiban</th>
                                    <th>Realisasi</th>
                                    <th>Selisih</th>
                                    <th>Kewajiban</th>
                                    <th>Realisasi</th>
                                    <th>Selisih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>xxxx/PP.240/D/mm/yyyy</td>
                                    <td>dd/mm/yyyy</td>
                                    <td>12.345</td>
                                    <td>Company Name</td>
                                    <td>Contact Name</td>
                                    <td>Phone Number</td>
                                    <td>234</td>
                                    <td>234</td>
                                    <td>function</td>
                                    <td>678</td>
                                    <td>678</td>
                                    <td>function</td>
                                    <td class="col">
                                        <a href="{{route('admin.report.commitment.detail')}}" class="btn btn-xs btn-outline-primary">Data RIPH</a>
                                        <a href="{{route('admin.report.commitment.realisasi')}}" class="btn btn-xs btn-outline-info">Ringkasan Realisasi</a>
                                        <a href="{{route('admin.report.commitment.map')}}" class="btn btn-xs btn-outline-success">Peta Realisasi</a>
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
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>

<script>
    $(document).ready(function() {
        // initialize datatable
        $('#dt_tblList').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details dari:' + '<br>' + data[0] + ' - ' + data[3];
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table table-responsive'
                    })
                }
            },
            lengthChange: false,
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
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'colvis',
                    text: 'Visibility',
                    titleAttr: 'Col visibility',
                    className: 'btn-outline-info btn-xs mr-sm-3 ml-5'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-xs mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-xs mr-1'
                },
                /*{
                	extend: 'csvHtml5',
                	text: 'CSV',
                	titleAttr: 'Generate CSV',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                /*{
                	extend: 'copyHtml5',
                	text: 'Copy',
                	titleAttr: 'Copy to clipboard',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-xs'
                }
            ]
        });

    });
</script>
@endsection