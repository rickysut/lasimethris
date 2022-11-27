@extends ('layouts.admin')
@section ('style')
<!-- select2 -->
<link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<form id="js-login" novalidate="" action="{{route('admin.riph')}}">
    <div class="row">
        <div class="col-md-12">
            <div class="panel" id="panel-1">
                <div class="panel-hdr">
                    <h2>
                        Ubah Data Isian
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
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
                            <span>Halaman ini adalah form isian data acuan RIPH yang akan digunakan sebagai parameter rujukan/acuan target yang harus dipenuhi. Data diisi secara periodik tahunan.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- add "was-validated" to create validation form style-->
                        <div class="row d-flex">
                            <div class="col-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="simpleinputInvalid">Periode</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3"><i class="fal fa-calendar"></i></span>
                                        </div>
                                        <input type="number" class="form-control " id="simpleinputInvalid" placeholder="tahun RIPH" required>
                                    </div>
                                    <div class="help-block">
                                        Masukkan Tahun Data RIPH.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Tanggal Pembaruan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fal fa-calendar-day"></i></span>
                                        </div>
                                        <input type="text" class="form-control " name="start" placeholder="dd-mm-yyyy" value="[date_create]" readonly>
                                    </div>
                                    <div class="help-block">
                                        Tanggal dibuat atau diubah.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Total Volume RIPH (ton)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fal fa-weight-hanging"></i></span>
                                        </div>
                                        <input type="number" class="form-control " placeholder="total volume" required>
                                    </div>
                                    <div class="help-block">
                                        Total volume import yang direkomendasikan untuk seluruh RIPH Bawang Putih tahun/periode ini.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="simpleinputInvalid">Total Wajib Tanam (ha)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3">
                                                <i class="fal fa-ruler"></i>
                                            </span>
                                        </div>
                                        <input type="number" class="form-control " id="simpleinputInvalid" placeholder="autocalculate" readonly>
                                    </div>
                                    <div class="help-block">
                                        Total wajib tanam pada periode ini, Formula: (Total Import x 5%) / 6.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="simpleinputInvalid">Total Wajib Produksi (ton)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3"><i class="fal fa-balance-scale"></i></span>
                                        </div>
                                        <input type="number" class="form-control " id="simpleinputInvalid" placeholder="autocalculate" readonly>
                                    </div>
                                    <div class="help-block">
                                        Total wajib produksi pada periode ini, formula: Total Import x 5%.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="simpleinputInvalid">Jumlah RIPH</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3"><i class="fal fa-ruler"></i></span>
                                        </div>
                                        <input type="number" class="form-control " id="simpleinputInvalid" required>
                                    </div>
                                    <div class="help-block">
                                        Jumlah RIPH diterbitkan pada periode ini.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-4 ml-auto text-right">
                        <a href="{{route('admin.riph')}}" class="btn btn-warning btn-sm mt-3">Cancel</a>
                        <button id="js-login-btn" type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
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
            $(".select2-prov").select2({
                placeholder: "Select Province"
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