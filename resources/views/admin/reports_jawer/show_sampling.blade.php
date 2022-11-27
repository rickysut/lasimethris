@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<!-- Page Content -->
<!--
	Yang ingin dicapi pada halaman ini adalah:
	Mengumpulkan data terkait verifikasi tanam-produksi, serta lampiran-lampiran bukti.
	Metode SAVE/SUBMIT diberlakukan parsial agar pengguna dapat menyimpan sementara data yang telah diisikan.
	Hasil verifikasi akan menjadi acuan sebagai data realisasi terverifikasi.
-->
<div class="row">
    <div class="col-12">
        <!-- this panel is invisible when user edit -->
        <div class="panel" id="panel-1">
            <div class="panel-container">
                <!--
					Yang ingin dicapi pada bagian ini adalah:
					List pilihan diperoleh dari daftar yang telah diajukan verifikasi oleh pelaku usaha.
				-->
                <div class="panel-content">
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
                        </div>
                        <div class="form-group col-md-12">
                            <span class="help-block">Tentukan kelompok tani dan lokasi yang akan diperiksa/verifikasi. Data yang muncul pada daftar adalah kelompoktani dan lokasi yang telah diajukan verifikasi oleh pelaku usaha.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel" id="panel-1">
            <div class="panel-hdr">
                <h2>
                    Verifikasi Data Geolokasi
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <!--
						Yang ingin dicapi pada bagian ini adalah:
						Verifikator dapat menentukan titik lokasi (center of curve) dan membuat/menggambar kurva bentuk lahan tanam sebagai bagian dari verifikasi.
						
						Kurva hasil verifikasi selanjutnya disandingkan (overlay) dengan kurva yang dibuat oleh pelaku usaha sehingga tampak perbedaan/persamaan pada keduanya untuk dianalisa.
						
						Data titik dan curva yang diberikan akan langsung mengisi field-field input yang sesuai.
						Untuk menghindari kesalahan input, field-field berikut diberlakukan READONLY: LATITUDE, LONGITUDE, LUAS, POLYGON.
						FIELD LUAS diperoleh melalui perhitungan sistem (system autocalculate) pada curva yang dibuat.
						FIELD ALTITUDE, diisi secara manual
						FIELD NAMA LOKASI, dipilih.
						
						Peta ini hanyalah sebagai contoh untuk menggambarkan apa yang ingin dicapai, metode dapat menggunakan metode lain yang lebih tepat.
					-->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label" for="gmap">Buat Peta Polygon bidang lahan dari lokasi yang dipilih<sup class="text-danger"> *</sup></label>
                            <iframe id="gmap" src="https://www.google.com/maps/d/embed?mid=1sTXQ7FGmyNhF9ROGa2ZRtQxwu0Jp48o&ehbc=2E312F" width="100%" height="300px"></iframe>
                            <span class="help-block">Keterangan cara menentukan titik lokasi dan membuat polygon</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Latitude <sup class="text-danger"> *</sup></label>
                            <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="-6.7687586" />
                            <span class="help-block">Koordinat Lintang lokasi</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Longitude <sup class="text-danger"> *</sup></label>
                            <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="107.8918275" readonly />
                            <span class="help-block">Koordinat Bujur lokasi</span>
                        </div>
                        <div class="form-group col-4">
                            <label>Altitude (mdpl) <sup class="text-danger"> *</sup></label>
                            <input type="text" class="font-weight-bold form-control form-control-sm bg-white" value="900" />
                            <span class="help-block">Ketinggian lokasi lahan (rerata)</span>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Polygon</label>
                                <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="1sTXQ7FGmyNhF9ROGa2ZRtQxwu0Jp48o&ehbc=2E312F" readonly />
                                <span class="help-block">system autogenerate</span>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Luas Perkiraan (ha)<sup class="text-danger"> *</sup></label>
                            <input type="text" class="disabled font-weight-bold form-control form-control-sm bg-white" value="0.80" readonly />
                            <span class="help-block">Luas bidang diukur oleh sistem.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-content py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                    <div class="justify-content-end">
                        <button class="btn btn-sm btn-primary waves-effect waves-themed" role="button" type="submit"><i class="fa fa-save"></i> Simpan</button>
                        <button class="btn btn-sm btn-warning waves-effect waves-themed" role="button" type="submit"><i class="fa fa-undo"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel" id="panel-2">
            <div class="panel-hdr">
                <h2>
                    Data Verifikasi
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-6">
                            <!--
								Yang ingin dicapi pada bagian ini adalah:
								bagian ini terutama untuk Verifikator melaporkan hasil pemeriksaan (luas) dan menyatakan selesai diperiksa. radio button dan tanggal berfungsi untuk melakukan penelusuran status pemeriksaan.
							-->
                            <div class="card border m-auto m-lg-0">
                                <div class="card-header bg-success-50">
                                    <span class="h6"><i class="subheader-icon fal fa-seedling mr-1"></i>Hasil Pengukuran Wajib Tanam</span>
                                </div>
                                <div class="carousel slide" data-ride="carousel" id="carouselTanam">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="height:42vh">
                                            <img class="img-responsive card-image-top" src="/img/demo/gallery/16.jpg" alt="Judul foto" style="height:42vh; width:100%;">
                                            <div class="carousel-caption caption d-none d-md-block">
                                                <h5>Judul</h5>
                                                <p>Deskripsi Foto</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" style="height:42vh">
                                            <img class="img-responsive card-image-top" src="/img/demo/gallery/28.jpg" alt="Judul foto" style="height:42vh; width:100%;">
                                            <div class="carousel-caption caption d-none d-md-block">
                                                <h5>Judul 16</h5>
                                                <p>Deskripsi Foto</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselTanam" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselTanam" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <dl class="row">
                                            <dd class="col-sm-4">
                                                Tanggal Tanam
                                            </dd>
                                            <dt class="col-sm-8">
                                                : dd/mmmm/yyyy
                                            </dt>
                                            <dd class="col-sm-4">
                                                Luas dilaporkan
                                            </dd>
                                            <dt class="col-sm-8">
                                                : 100 ha
                                            </dt>
                                        </dl>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <label>Luas Verifikasi (ha)<sup class="text-danger"> *</sup></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fal fa-map-marked-alt"></i></span>
                                                </div>
                                                <input id="luas_verif" type="text" class="form-control form-control-sm" value="107.89" />
                                            </div>
                                            <span class="help-block">Luas bidang hasil pengukuran langsung oleh Verifikator di lokasi.</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="checkTanam">
                                                <label class="custom-control-label" for="checkTanam">SELESAI diperiksa</label>
                                            </div>
                                            <span class="help-block">Status pelaksanaan verifikasi lahan/tanam di lokasi.</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <label class="form-label" for="tgl">Tanggal Ditetapkan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_status" placeholder="dd/mm/yyyy">
                                            </div>
                                            <span class="help-block">Tanggal ditetapkannya status pemeriksaan.</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary waves-effect waves-themed" role="button" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                    <button class="btn btn-sm btn-warning waves-effect waves-themed" role="button" type="submit"><i class="fa fa-undo"></i> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--
								Yang ingin dicapi pada bagian ini adalah:
								bagian ini terutama untuk Verifikator melaporkan hasil pemeriksaan (produksi) dan menyatakan selesai diperiksa. radio button dan tanggal berfungsi untuk melakukan penelusuran status pemeriksaan.
							-->
                            <div class="card border m-auto m-lg-0">
                                <div class="card-header bg-warning-50">
                                    <span class="h6"><i class="subheader-icon fal fa-dolly mr-1"></i>Hasil Pengukuran Wajib Poduksi</span>
                                </div>
                                <div class="carousel slide" data-ride="carousel" id="carouselProduksi">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="height:42vh">
                                            <img class="img-responsive card-image-top" src="/img/demo/gallery/34.jpg" alt="Judul foto" style="height:42vh; width:100%;">
                                            <div class="carousel-caption caption d-none d-md-block">
                                                <h5>Judul</h5>
                                                <p>Deskripsi Foto</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" style="height:42vh">
                                            <img class="img-responsive card-image-top" src="/img/demo/gallery/52.jpg" alt="Judul foto" style="height:42vh; width:100%;">
                                            <div class="carousel-caption caption d-none d-md-block">
                                                <h5>Judul</h5>
                                                <p>Deskripsi Foto</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselProduksi" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselProduksi" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <dl class="row">
                                            <dd class="col-sm-4">
                                                Tanggal Produksi
                                            </dd>
                                            <dt class="col-sm-8">
                                                : dd/mmmm/yyyy
                                            </dt>
                                            <dd class="col-sm-4">
                                                Produksi dilaporkan
                                            </dd>
                                            <dt class="col-sm-8">
                                                : 100 ton
                                            </dt>
                                        </dl>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <label class="form-label" for="panen_verif">Panen diverifikasi (ton) <sup class="text-danger"> *</sup></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fal fa-balance-scale"></i></span>
                                                </div>
                                                <input id="panen_verif" type="text" class="form-control form-control-sm" value="107.89" />
                                            </div>
                                            <span class="help-block">Panen hasil pengukuran langsung oleh Verifikasi di lokasi.</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="checkProduksi">
                                            <label class="custom-control-label" for="checkProduksi">SELESAI diperiksa</label>
                                        </div>
                                        <span class="help-block">Status pelaksanaan verifikasi produksi di lokasi.</span>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <label class="form-label" for="tglVerif">Tanggal Ditetapkan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tglVerif" placeholder="dd/mm/yyyy">
                                            </div>
                                            <span class="help-block">Tanggal ditetapkannya status pemeriksaan.</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary waves-effect waves-themed" role="button" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                    <button class="btn btn-sm btn-warning waves-effect waves-themed" role="button" type="submit"><i class="fa fa-undo"></i> Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Right -->
    <div class="modal fade upload-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-upload text-info"></i> Import Single Location Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
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
                            <span>Pada bagian ini Anda mengunggah data lokasi wajib tanam dan produksi yang telah Anda buat pada aplikasi lain. Berkas yang dapat diterima adalah berkas berekstensi *.xlsx; *.csv yang berisi data lokasi tunggal (1 baris)</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Pilih berkas untuk diimport</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="docFile">
                            <label class="custom-file-label" for="docFile">Pilih berkas...</label>
                        </div>
                        <span class="help-block">Silahkan pilih berkas berisi data geolokasi untuk diunggah.</span>
                    </div>
                    <div class="help-block" hidden>
                        <ul>
                            <li>Jika Anda belum memiliki berkas template standar data, silahkan unduh berkas template ini <a href="/media/data/templategeodata.xlsx" class="badge btn-xs btn-primary"><i class="fas fa-file-excel"></i></a></li>
                            <li>isi data kolom sesuai judul masing-masing kolom</li>
                            <li>JANGAN MERUBAH FORMAT DATA YANG DIBERIKAN</li>
                            <li>PASTIKAN FORMAT DATA ANDA ADALAH <span class="fw-bold fw-900">TEXT</span></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-upload"></i> Send</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal upload -->
    <!-- Modal foto tanam -->
    <div class="modal fade modal-foto-tanam" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-upload text-info"></i> Unggah Foto Dokumentasi</h5>
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
                            <span>Informasi ringkas data pengajuan verifikasi lapangan</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Dokumentasi</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" id="customControlValidation7">
                            <label class="custom-file-label" for="customControlValidation7">Choose file...</label>
                        </div>
                        <span class="help-block">Foto Dokumentasi. ekstensi jpg ukuran maks 2mb.</span>
                    </div>
                    <div class="form-group">
                        <label>Judul Foto </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-image-polaroid"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" placeholder="Judul foto" />
                        </div>
                        <span class="help-block">Beri judul foto yang diunggah.</span>
                    </div>
                    <div class="form-group">
                        <label>Keterangan Foto </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-align-left"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" placeholder="Judul foto" />
                        </div>
                        <span class="help-block">Beri keterangan foto yang diunggah.</span>
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
    <!-- End Modal foto upload -->
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