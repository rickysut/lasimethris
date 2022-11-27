@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-lg-12">
        <div class="mb-2">
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item"><a class="btn-sm nav-link active" data-toggle="pill" href="#queue"><i class="fas fa-clock mr-1"></i>Verification Queue</a></li>
                <li class="nav-item"><a class="btn-sm nav-link" data-toggle="pill" href="#verified"><i class="fas fa-check mr-1"></i>Verified</a></li>
            </ul>
        </div>
        <div class="tab-content py-3">
            <div class="tab-pane fade active show" id="queue" role="tabpanel">
                <div id="panel-1" class="panel">
                    <!-- diakses melalui menu verificator tasks > ONLINE 
			            yang ingin dicapai adalah:
			            menampilkan daftar pengajuan verifikasi online
		             -->
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="table">
                                <table id="queue_tbl" class="table table-sm table-bordered table-hover table-striped w-100">
                                    <thead class="bg-warning-50">
                                        <tr>
                                            <th id="">No. Pengajuan</th>
                                            <th id="">Nama Perusahaan</th>
                                            <th id="">No. RIPH</th>
                                            <th id="">Tanggal diajukan</th>
                                            <th id="">Tanggal Status</th>
                                            <th id="">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>API No. Pengajuan</td>
                                            <td>API Nama Perusahaan</td>
                                            <td>API No. RIPH</td>
                                            <td>API Time stamp pengajuan</td>
                                            <td>API time stamp status</td>
                                            <td>API last status</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-900">
                                                <a href="{{route('admin.report.verification.online.detail')}}">No. Pengajuan</a>
                                            </td>
                                            <td>Nama Perusahaan</td>
                                            <td>No. RIPH</td>
                                            <td>31-03-2022</td>
                                            <td>31-03-2022</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="badge btn-sm btn-warning">
                                                    <i class="fa fa-clock mr-1"></i>
                                                    Proccess
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-900">
                                                <a href="{{route('admin.report.verification.online.detail')}}">No. Pengajuan</a>
                                            </td>
                                            <td>Nama Perusahaan</td>
                                            <td>No. RIPH</td>
                                            <td>31-03-2022</td>
                                            <td>31-03-2022</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="badge btn-sm btn-danger">
                                                    <i class="fa fa-hourglass mr-1"></i>
                                                    Waiting
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
            <div class="tab-pane fade" id="verified" role="tabpanel">
                <div id="panel-2" class="panel">
                    <!-- diakses melalui menu verificator tasks > ONLINE 
			            yang ingin dicapai adalah:
			            menampilkan daftar pengajuan verifikasi online
		             -->
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="table">
                                <table id="verified_tbl" class="table table-sm table-bordered table-hover table-striped w-100">
                                    <thead class="bg-success-50">
                                        <tr>
                                            <th id="">No. Pengajuan</th>
                                            <th id="">Nama Perusahaan</th>
                                            <th id="">No. RIPH</th>
                                            <th id="">Tanggal diajukan</th>
                                            <th id="">Tanggal Status</th>
                                            <th id="">Status</th>
                                            <th id="">Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>API No. Pengajuan</td>
                                            <td>API Nama Perusahaan</td>
                                            <td>API No. RIPH</td>
                                            <td>API Time stamp pengajuan</td>
                                            <td>API time stamp status</td>
                                            <td>API last status</td>
                                            <td>API result</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-900">
                                                <a href="{{route('admin.report.verification.online.detail')}}">No. Pengajuan</a>
                                            </td>
                                            <td>Nama Perusahaan</td>
                                            <td>No. RIPH</td>
                                            <td>31-03-2022</td>
                                            <td>31-03-2022</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="badge btn-sm btn-success">
                                                    <i class="fa fa-check mr-1"></i>
                                                    Verified
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="badge btn-sm btn-success">
                                                    <i class="fas fa-check mr-1"></i>
                                                    Sesuai
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-900">
                                                <a href="{{route('admin.report.verification.online.detail')}}">No. Pengajuan</a>
                                            </td>
                                            <td>Nama Perusahaan</td>
                                            <td>No. RIPH</td>
                                            <td>31-03-2022</td>
                                            <td>31-03-2022</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="badge btn-sm btn-success">
                                                    <i class="fa fa-check mr-1"></i>
                                                    Verified
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="badge btn-sm btn-danger">
                                                    <i class="fas fa-ban mr-1"></i>
                                                    Perbaikan
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
        //datatabel que
        $('#queue_tbl').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
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

        //datatabel verified
        $('#verified_tbl').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
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