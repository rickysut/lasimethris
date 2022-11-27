@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>

<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <!--
				Yang ingin dicapai bagian ini adalah:
				Dokumentasi kegiatan wajib tanam-produksi.
			-->
            <div class="panel-hdr">
                <h2>
                    Berkas-berkas <span class="fw-300"><i>Unggahan</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="mr-1 btn btn-info btn-xs waves-effect waves-themed" role="button" data-toggle="modal" data-target=".modal-image-right"><a data-toggle="tooltip" data-offset="0,10" data-original-title="Unggah foto dokumentasi"><i class="fal fa-plus mr-1"></i>Unggah Berkas baru</a></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table id="templateList" class="table table-sm table-hover table-striped table-bordered w-100">
                            <thead>
                                <tr>
                                    <th>Berkas</th>
                                    <th>Nama Berkas</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal diunggah</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Form-5</td>
                                    <td><a href="/files/template_form_5.docx" download>template_form_5.docx</a></td>
                                    <td>Formulir Kesanggupan Pelaksanaan Wajib Tanam - Produksi</td>
                                    <td>dd/mm/yyyy</td>
                                    <td>
                                        <a class="text-info mr-1" title="unduh" role="button"><i class="fal fa-download"></i></a>
                                        <!-- tombol berikut ini hanya untuk Administrator -->
                                        <a class="text-danger mr-1" title="hapus" role="button"><i class="fal fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal upload -->
    <div class="modal fade modal-image-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-upload text-info"></i> Unggah Dokumen Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="alert alert-info border-0 mb-0">
                    <div class="d-flex align-item-center">
                        <div class="alert-icon">
                            <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0" style="font-size: 20px;">
                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                                <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <span>Beri nama pada berkas yang diunggah untuk memudahkan penggunaan-pencarian dikemudian hari.</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Berkas </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-image-polaroid"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" placeholder="Nama berkas" />
                        </div>
                        <span class="help-block">misal Form-SPTJM.</span>
                    </div>
                    <div class="form-group">
                        <label>Keterangan Berkas </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" placeholder="Keterangan" />
                        </div>
                        <span class="help-block">Beri keterangan berkas yang diunggah.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="customControlValidation7">
                            <label class="custom-file-label" for="customControlValidation7">Unggah template...</label>
                        </div>
                        <span class="help-block">Disarankan dokumen berekstensi yang dapat dibuka dan edit oleh pengguna.</span>
                    </div>
                    <hr>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-info waves-effect waves-themed" type="submit"><i class="fal fa-save mr-1"></i>Unggah</button>
                    <button class="btn btn-sm btn-warning waves-effect waves-themed"><i class="fal fa-undo mr-1"></i>Batal</button>
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
        $('#templateList').dataTable({
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