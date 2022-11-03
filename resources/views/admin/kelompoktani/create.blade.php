@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('kelompoktani_create')
@if (!empty($pagedata['alerttitle']))
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
@endif
<div class="row">
    <div class="col-md-12">
        <form id="js-login" novalidate="" action="{{ route('admin.task.kelompoktani.create') }}">
            <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="form-label" for="nama_poktan">Kelompok Tani <span class="text-danger">*</span></label>
                                <input type="text" id="nama_poktan" class="form-control" placeholder="Nama Kelompoktani" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                                <div class="help-block">Nama Kelompoktani binaan.</div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label" for="id_simluhtan">ID Simluhtan <span class="text-danger">*</span></label>
                                <input type="text" id="id_simluhtan" class="form-control" placeholder="ID Simluhtan">
                                <div class="help-block">Nomor ID Kelompoktani pada aplikasi SIMLUHTAN (jika ada).</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="form-label" for="address">Alamat <span class="text-danger">*</span></label>
                                <textarea type="text" id="address" class="form-control" placeholder="Alamat lengkap" rows="3"></textarea>
                                <div class="help-block">Alamat lengkap domisili kelompoktani.</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <select class="select2-prov form-control w-100" id="province">
                                    <option>Provinsi</option>
                                    <option>Prov. Aceh</option>
                                    <option>Prov. DKI Jakarta</option>
                                    <option>Prov. Jawa Barat</option>
                                    <option>Prov. Jawa Tengah</option>
                                    <option>Prov. DI Yogyakarta</option>
                                    <option>Prov. Jawa Timur</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="select2-kab form-control w-100" id="kabupaten">
                                    <option>Kabupaten</option>
                                    <option>Kab. Bandung</option>
                                    <option>Kab. Garut</option>
                                    <option>Kab. Wonosobo</option>
                                    <option>Kab. Temanggung</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <select class="select2-kec form-control w-100" id="kecamatan">
                                    <option>Kecamatan</option>
                                    <option>kec. Bandung</option>
                                    <option>kec. Garut</option>
                                    <option>kec. Wonosobo</option>
                                    <option>kec. Temanggung</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="select2-des form-control w-100" id="desa">
                                    <option>Desa/Kelurahan</option>
                                    <option>Desa Bandung</option>
                                    <option>Desa Garut</option>
                                    <option>Desa Wonosobo</option>
                                    <option>Desa Temanggung</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="form-label" for="pimpinan">Pimpinan</label>
                                <input type="text" id="pimpinan" class="form-control" placeholder="Nama Pimpinan">
                                <div class="help-block">Nama Pimpinan/Ketua/Penanggungjawab Kelompok Tani.</div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label" for="no_hp">No. HP</label>
                                <input type="text" id="no_hp" class="form-control" placeholder="Nomor HP">
                                <div class="help-block">Nomor kontak pimpinan yang dapat dihubungi (jika ada).</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 ml-auto text-right">
                    <button id="js-login-btn" type="submit" class="btn btn-block btn-danger btn-sm mt-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endcan
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="/js/formplugins/select2/select2.bundle.js"></script>
<script>
    $(document).ready(function() {
        $(function() {
            $(".select2-prov").select2({
                placeholder: "Select Province",
                allowClear: true
            });
            $(".select2-kab").select2({
                placeholder: "Select Kabupaten",
                allowClear: true
            });
            $(".select2-kec").select2({
                placeholder: "Select Kecamatan",
                allowClear: true
            });
            $(".select2-des").select2({
                placeholder: "Select Desa",
                allowClear: true
            });
        });
    });
</script>
@endsection