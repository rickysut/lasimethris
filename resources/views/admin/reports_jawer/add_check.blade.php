@extends ('layouts.global')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<!-- Page Content -->

<div class="row">
    <div class="form-group col-md-6">
        <label class="form-label" for="pks">Pilih Kelompoktani</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
            </div>
            <select type="text" id="pks" class="form-control" placeholder="Task..." aria-label="pks" aria-describedby="pks">
                <option hidden>- pilih kelompoktani</option>
                <option>Keltan 1</option>
                <option>Keltan 2</option>
                <option>Keltan 3</option>
                <option>dst</option>
            </select>
        </div>
        <span class="help-block">Pilih kelompoktani untuk menentukan lokasi bidang lahan. Kelompok tani yang muncul adalah kelompoktani yang telah diajukan verifikasi oleh pelaku usaha.</span>
    </div>
    <div class="form-group col-md-6">
        <label class="form-label" for="lokasi">Pilih Lokasi</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
            </div>
            <select type="text" id="lokasi" class="form-control" placeholder="Task..." aria-label="lokasi" aria-describedby="lokasi">
                <option hidden>- pilih lokasi</option>
                <option>ID - Nama Lokasi</option>
                <option>ID - Nama Lokasi</option>
                <option>ID - Nama Lokasi</option>
                <option>ID - Nama Lokasi</option>
                <option>ID - Nama Lokasi</option>
            </select>
        </div>
        <span class="help-block">Lokasi bidang lahan yang diperiksa. Lokasi yang muncul adalah lokasi yang telah diajukan verifikasi oleh pelaku usaha.</span>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="panel" id="panel-1">
            <div class="panel-hdr">
                <h2>
                    Data Geolokasi
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab_userMap" role="tab"><i class="fas fa-map mr-1"></i> Peta Dilaporkan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_verifMap" role="tab"><i class="fal fa-map mr-1"></i> Peta Verifikasi</a>
                        </li>
                    </ul>
                    <div class="tab-content border border-top-0 p-3">
                        <div class="tab-pane fade show active" id="tab_userMap" role="tabpanel">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="gmap">Berikut adalah peta yang dilaporkan/dibuat oleh pelaku usaha untuk lokasi yang dipilih.</label>
                                    <iframe id="gmap" src="https://www.google.com/maps/d/embed?mid=1sTXQ7FGmyNhF9ROGa2ZRtQxwu0Jp48o&ehbc=2E312F" width="100%" height="300px"></iframe>
                                    <span class="help-block"> </span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="table">
                                    <table id="dt-locsampling" class="table table-sm table-bordered table-hover table-striped w-100">
                                        <thead class="bg-warning-50">
                                            <tr>
                                                <th id="">Latitude</th>
                                                <th id="">Longitude</th>
                                                <th id="">Altitude</th>
                                                <th id="">Poygon</th>
                                                <th id="">Luas (ha)</th>
                                                <th id="">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>API Latitude</td>
                                                <td>API Longitude</td>
                                                <td>API Altitude</td>
                                                <td>API Polygon</td>
                                                <td>API Luas</td>
                                                <td class="text-center">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Nama Lokasi <sup class="text-danger"> *</sup></label>
                                    <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="Lokasi Pak Hadi, Petak 1" readonly />
                                    <span class="help-block">Nama Lokasi tanam</span>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Tanggal Tanam </label>
                                    <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="31-01-2022" readonly />
                                    <span class="help-block">Tanggal tanam dimulai.</span>
                                </div>
                                <div class="form-group col-3">
                                    <label>Varietas </label>
                                    <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="Lumbu Hijau" />
                                    <span class="help-block">Varietas yang ditanam</span>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Luas dilaporkan (ha)</label>
                                        <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="0.80" readonly />
                                        <span class="help-block">Luas yang dilaporkan oleh pelaku usaha (dalam satuan Ha)</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Produksi dilaporkan (ton)</label>
                                    <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="6.20" readonly />
                                    <span class="help-block">Produksi yang dilaporkan oleh pelaku usaha (dalam satuan Ton)</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_verifMap" role="tabpanel">
                            Mohon maaf! Data verifikasi lapangan tidak ditemukan. Hal ini dapat terjadi karena Verifikator lapangan belum melaporkan hasil verifikasi pemetaan onfarm.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="panel-content">
                    <a href="/verification/online/notes" class="btn btn-sm btn-info" role="button" type="submit"><i class="fa fa-farm"></i> Lihat Catatan Kegiatan</a>
                </div>
            </div>
        </div>
        <div class="panel" id="panel-2">
            <div class="panel-hdr">
                <h2>
                    BERITA ACARA PEMERIKSAAN
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label" for="pks">Tanggal Pemeriksaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <input type="date" class="font-weight-bold form-control form-control-sm bg-white" />
                            </div>
                            <span class="help-block">Tanggal data laporan diperiksa/verifikasi.</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="statusverif">Status Pemeriksaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="statusverif" class="form-control" placeholder="status pemeriksaan" aria-label="status pemeriksaan" aria-describedby="status pemeriksaan">
                                    <option hidden>- pilih status</option>
                                    <option disabled></option>
                                    <option>Mulai/on-progress</option>
                                    <option>Selesai</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status progress pemeriksaan.</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="hasilverif">Hasil Pemeriksaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="hasilverif" class="disabled form-control" placeholder="hasil pemeriksaan..." aria-label="hasil pemeriksaan" aria-describedby="hasil pemeriksaan">
                                    <option hidden>- pilih hasil</option>
                                    <option disabled></option>
                                    <option>Sesuai</option>
                                    <option>Tidak Sesuai (Perbaikan)</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status hasil pemeriksaan. Disable saat status pemeriksaan On-progress.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-content py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                    <div class="justify-content-end">
                        <a href="/verification/online/detail" class="btn btn-sm btn-info" role="button" type="submit"><i class="fa fa-save"></i> Simpan</a>
                        <a href="/verification/online/detail" class="btn btn-sm btn-warning" role="button" type="submit"><i class="fa fa-undo"></i> Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dt-locus').dataTable({
            responsive: true,
            pageLength: 15,
            order: [
                [0, 'desc']
            ],
        });
    });
</script>
@endsection