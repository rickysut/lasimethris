@extends ('layouts.global')
@section ('style')
<!-- select2 -->
<link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<form id="js-login" novalidate="" action="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel" id="panel-2">
                <div class="panel-hdr">
                    <h2>
                        Form Isian <span class="fw-300"><i>SKL Manual</i></span>
                    </h2>
                    <div class="panel-toolbar">

                    </div>
                </div>
                <div class="alert alert-info border-0 mb-0">
                    <div class="d-flex align-item-center">
                        <div class="alert-icon">
                            <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0">
                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-400"></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-800"></i>
                                <i class="fa fa-info icon-stack-1x opacity-100 color-white"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <span>Lengkapi kolom-kolom isian berikut sesuai data yang Anda miliki.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="form-label" for="provinsi">Nomor RIPH</label>
                                <div class="input-group">
                                    <select class="selectRiph form-control" id="selectRiph" required>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="help-block">
                                    Pilih No. RIPH yang akan diterbitkan SKL.
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="tgl_terbit">Tanggal Status/Terbit</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" aria-label="Tanggal akhir pelaksanaan pemeriksaan" id="tgl_terbit" placeholder="tanggal status/terbit">
                                </div>
                                <span class="help-block">Tanggal ditetapkan atau tanggal terbit Surat Keterangan Lunas (SKL).</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="no_skl">Nomor Penerbitan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-file-invoice"></i></span>
                                    </div>
                                    <input id="no_skl" type="text" class="font-weight-bold form-control form-control-sm" placeholder="Nomor Surat" />
                                </div>
                                <span class="help-block">Nomor Surat Keterangan Lunas.</span>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="wajib_tanam">Wajib Tanam (ha)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-ruler"></i></span>
                                    </div>
                                    <input id="wajib_tanam" type="number" class="font-weight-bold form-control form-control-sm" placeholder="luas wajib tanam" required />
                                </div>
                                <span class="help-block">Luas Wajib Tanam (dalam satuan hektar) berdasarkan volume import.</span>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="real_tanam">Realisasi Tanam (ha)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-ruler-combined"></i></span>
                                    </div>
                                    <input id="real_tanam" type="number" class="font-weight-bold form-control form-control-sm" placeholder="luas realisasi tanam" required />
                                </div>
                                <span class="help-block">Luas tanam yang direalisasikan dalam satuan hektar.</span>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="wajib_produksi">Wajib Produksi (ton)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-weight-hanging"></i></span>
                                    </div>
                                    <input id="wajib_produksi" type="number" class="font-weight-bold form-control form-control-sm" placeholder="volume wajib produksi" required />
                                </div>
                                <span class="help-block">Volume Wajib Produksi (dalam satuan ton) berdasarkan volume import.</span>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="realisasi_produksi">Realisasi Produksi (ton)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-balance-scale"></i></span>
                                    </div>
                                    <input id="realisasi_produksi" type="number" class="font-weight-bold form-control form-control-sm" placeholder="volume realisasi produksi" required />
                                </div>
                                <span class="help-block">Volume Produksi (dalam satuan ton) yang direalisasikan.</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="signed_by">Pejabat Penandatangan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <select type="text" id="signed_by" class="form-control form-control-sm" placeholder="status..." aria-label="signed_by" aria-describedby="signed_by">
                                        <option hidden>- pilih</option>
                                        <option disabled></option>
                                        <option>Nama - NIP</option> <!-- default adalah direktur yang sedang menjabat -->
                                        <option>Nama - NIP</option>
                                        <option disabled></option>
                                    </select>
                                </div>
                                <span class="help-block">Pejabat yang berwenang menandatangani.</span>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="sign_method">Metode Tandatangan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fal fa-signature"></i></span>
                                    </div>
                                    <select type="text" id="sign_method" class="form-control form-control-sm" placeholder="status..." aria-label="sign_method" aria-describedby="sign_method">
                                        <option hidden>- pilih</option>
                                        <option disabled></option>
                                        <option>Digital Sign</option> <!-- default adalah direktur yang sedang menjabat -->
                                        <option>Manual</option>
                                        <option disabled></option>
                                    </select>
                                </div>
                                <span class="help-block">Pejabat yang berwenang menandatangani.</span>
                            </div>
                            <div class="col-md-4 d-flex p-1 mt-1">
                                <div class="form-group mr-1">
                                    <label class="form-label" for="qrcode"> </label>
                                    <div id="qrcode" class="input-group" data-toggle="tooltip" data-offset="0" data-original-title="Generate QR Code">
                                        <button class="btn btn-sm btn-info btn waves-effect waves-themed" role="button"><i class="fal fa-file-certificate mr-1"></i>Generate QR Code</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!--
									Yang ingin dicapai pada tombol Cetak Draft ini adalah:
									men-generate Draft SKL untuk Diperiksa dan ditandangani secara Manual/Offline jika tandatangan dilakukan secara manual. Tombol ini tidak merubah status menjadi TERBIT
								-->
                                    <label class="form-label" for="print_draft"> </label>
                                    <div id="print_draft" class="input-group" data-toggle="tooltip" data-offset="0" data-original-title="Cetak Draft untuk ditandatangani">
                                        <a href="/skl/lunas" class="btn btn-sm btn-warning btn waves-effect waves-themed" role="button"><i class="fal fa-print mr-1"></i>Cetak Draft</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="file_verif">Unggah SKL Tercetak</label>
                                <div class="custom-file input-group input-group-sm">
                                    <input type="file" class="custom-file-input form-control" id="file_verif">
                                    <label class="custom-file-label" for="file_verif">Pilih berkas...</label>
                                </div>
                                <span class="help-block">Unggah berkas SKL yang telah dicetak dan ditandatangani oleh Pejabat terkait.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="confirm">Konfirmasi</label>
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control " placeholder="type your username here">
                                    <div class="input-group-append">
                                        <a class="btn btn-sm btn-danger" href="/verifikasi" role="button"><i class="fal fa-times text-align-center mr-1"></i> Batalkan</a>
                                    </div>
                                    <!--
									Yang ingin dicapai pada tombol TERBITKAN ini adalah:
									status RIPH menjadi TERBIT, men-generate SKL untuk dicetak sebagai Cetakan Asli
								-->
                                    <div class="input-group-append">
                                        <a href="/verification/skl/success" class="btn btn-sm btn-primary" role="button" type="submit">
                                            <i class="fas fa-file-certificate text-align-center mr-1"></i> Terbitkan
                                        </a>
                                    </div>
                                </div>
                                <span class="help-block">Pastikan Anda menekan tombol bukan karena ketidak-sengajaan.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('js/datagrid/datatables/datatables.export.js') }}"></script>
<script src="{{ asset('js/formplugins/select2/select2.bundle.js') }}"></script>
<script src="{{ asset('js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

<script>
    $(document).ready(function() {
        $(function() {
            $(".selectRiph").select2({
                placeholder: "Select #RIPH"
            });
            $(".select2-kab").select2({
                placeholder: "Select Kabupaten"
            });
            $(".select2-kec").select2({
                placeholder: "Select Kecamatan"
            });
            $(".select2-des").select2({
                placeholder: "Select Desa"
            });
        });
    });
</script>
<script>
    $("#js-login-btn").click(function(event) {

        // Fetch form to apply custom Bootstrap validation
        var form = $("#js-login")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.addClass('was-validated');
        // Perform ajax submit here...
    });
</script>
<!-- datepicker -->
<script>
    // Class definition

    var controls = {
        leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
        rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
    }

    var runDatePicker = function() {
        // range picker
        $('#datepickerstart').datepicker({
            todayHighlight: true,
            templates: controls
        });
        // range picker
        $('#datepickerend').datepicker({
            todayHighlight: true,
            templates: controls
        });
    }

    $(document).ready(function() {
        runDatePicker();
    });
</script>
@endsection