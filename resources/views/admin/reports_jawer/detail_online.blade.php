@extends ('layouts.admin')
@section ('style')
<link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
<link rel="stylesheet" media="screen, print" href="{{ asset('css/miscellaneous/lightgallery/lightgallery.bundle.css') }}">
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<!-- Page Content -->
<!--
	Yang ingin dicapai pada Halaman ini adalah:
	Halaman ini menitikberatkan pada pemeriksaan yang bersifat administratif, terutama pada kelengkapan berkas-berkas yang diunggah, format data geolokasi, data hasil verifikasi.
	Pemeriksaan ini dapat dianggap sebagai pemeriksaan akhir sebelum SKL dapat diterbitkan.
-->
<div class="row">
    <div class="col-lg-12">
        <!-- hanya UNTUK verifikator online -->
        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <!--
								Yang ingin dicapai pada bagian ini adalah:
								Administrator/verifikator menentukan status dimulainya proses verifikasi online. merubah status dari submitted menjadi mulai/progress/running
							-->
                            <label class="form-label" for="statusVerif">Status Verifikasi</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <!-- STATUS VALUE
									0 = not submitted
									1 = submitted
									2 = Start/running
									3 = Verified - OK
									4 = Verified - Not OK
								-->
                                <select type="text" id="statusVerif" class="form-control form-control-sm" placeholder="Task..." aria-label="statusVerif" aria-describedby="statusVerif">
                                    <option hidden>- pilih status periksa</option>
                                    <option disabled></option>
                                    <option value="2">Mulai/On-progress</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status progress dan hasil akhir pemeriksaan lapangan. <span class="text-danger">status hasil pemeriksaan enabled saat status pemeriksaan bernilai "SELESAI"</span></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label class="form-label" for="tgl_mulai">Tanggal Pelaksanaan</label>
                            <div class="input-group input-group-multi-transition">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_mulai" placeholder="dari tanggal">
                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal akhir pelaksanaan pemeriksaan" id="tgl_akhir" placeholder="s.d tanggal">
                            </div>
                            <span class="help-block">Tanggal pelaksanaan pemeriksaan.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ringkasan -->
        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>RINGKASAN REALISASI KEWAJIBAN
                </h2>
                <div class="panel-toolbar">
                    <button class="mr-1 btn btn-info btn-xs btn-icon rounded-circle waves-effect waves-themed" role="button" data-toggle="modal" data-target=".modal-info-right">
                        <a data-toggle="tooltip" data-offset="0,10" data-original-title="Lihat Data Pengajuan">
                            <i class="fal fa-info-circle"></i>
                        </a>
                    </button>
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
                        <span>Berikut ini adalah ringkasan data wajib tanam-produksi yang dilaporkan oleh pelaku usaha.</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table id="dt-checkSum" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="bg-warning-50">
                                <tr>
                                    <th id="" rowspan="2" hidden>No. RIPH</th>
                                    <th id="" class="text-center" colspan="2">Beban</th>
                                    <th id="" class="text-center" colspan="2">Realisasi</th>
                                    <th id="" class="text-center" colspan="2">Verifikasi</th>
                                </tr>
                                <tr>
                                    <th id="">Produksi (ton)</th>
                                    <th id="">Tanam (ha)</th>
                                    <th id="">Produksi (ton)</th>
                                    <th id="">Tanam (ha)</th>
                                    <th id="">Produksi (ton)</th>
                                    <th id="">Tanam (ha)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td hidden>xxxx/PP.240/D/MM/YYY</td>
                                    <!-- field berikut ini berasal dari Nomor RIPH (jika pengajuan RIPH), PKS (jika pks), tanam/produksi (jika tanam/produksi) -->
                                    <td>API Produksi Wajib</td>
                                    <td>API Luas Wajib</td>
                                    <td>API Produksi lapor
                                        <span data-toggle="tooltip" data-offset="0,10" data-original-title="Lebih rendah dari kewajiban">
                                            <i class="fas fa-arrow-down text-danger"></i>
                                        </span>
                                    </td>
                                    <td>API Luas lapor
                                        <span data-toggle="tooltip" data-offset="0,10" data-original-title="Lebih rendah dari kewajiban">
                                            <i class="fas fa-arrow-down text-warning"></i>
                                        </span>
                                    </td>
                                    <td>API Produksi verif
                                        <span data-toggle="tooltip" data-offset="0,10" data-original-title="Lebih tinggi dari realisasi">
                                            <i class="fas fa-arrow-up text-success"></i>
                                        </span>
                                    </td>
                                    <td>API Luas verif
                                        <span data-toggle="tooltip" data-offset="0,10" data-original-title="Lebih rendah dari realisasi">
                                            <i class="fas fa-arrow-down text-warning"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kelengkapan Berkas -->
        <div id="panel-3" class="panel">
            <!--
				Yang ingin dicapai pada panel ini adalah:
				sistem melakukan pemeriksaan kelengkapan berkas yang harus diunggah
			-->
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>KELENGKAPAN BERKAS
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
                        <span>Berikut ini adalah daftar berkas-berkas yang harus dilampirkan oleh pelaku usaha.</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table class="table table-striped table-bordered" id="dt-filecheck">
                            <thead>
                                <tr>
                                    <th scope="row">Form</th>
                                    <th scope="row">Nama Berkas</th>
                                    <th scope="row">Tanggal Unggah</th>
                                    <th scope="row">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Penerbitan RIPH</td>
                                    <td>
                                        <a href="scan_riph_015PP240DMMMMYYYY.pdf">scan_riph_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form SPTJM</td>
                                    <td>
                                        <a href="scan_sptjm_015PP240DMMMMYYYY.pdf">scan_sptjm_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Logbook</td>
                                    <td>
                                        <a href="scan_logbook_015PP240DMMMMYYYY.pdf">scan_logbook_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form RT</td>
                                    <td>
                                        <a href="scan_formrt_015PP240DMMMMYYYY.pdf">scan_formrt_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form RTA</td>
                                    <td>
                                        <a href="scan_formrta_015PP240DMMMMYYYY.pdf">scan_formrta_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form RPO</td>
                                    <td>
                                        <a href="scan_formrpo_015PP240DMMMMYYYY.pdf">scan_formrpo_015PP240DMMMMYYYY.pdf</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-success"><i class="fas fa-check mr-1"></i> Ada</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Form LA</td>
                                    <td>
                                        <a class="text-danger" title="Berkas tidak ditemukan">Berkas tidak ada!</a>
                                    </td>
                                    <td>31-12-2022</td>
                                    <td>
                                        <a class="text-danger" href="/riphlist/detail"><i class="fas fa-times mr-1"></i>Tidak Ada!</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Berkas PKS -->
        <div id="panel-4" class="panel">
            <!--
				Yang ingin dicapai pada Panel ini adalah:
				sistem memeriksa kelengkapan berkas dari setiap kelompok tani. berkas yang diperiksa adalah unggahan PKS dan Form-5 = not null. misal jika ada 10 poktan maka harus ada 10 PKS dan 10 Form-5
			-->
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>BERKAS PERJANJIAN KERJASAMA
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
                        <span>Berikut ini adalah daftar berkas perjanjian kerjasama antara pelaku usaha dengan kelompoktani yang harus dilampirkan.</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table class="table table-striped table-bordered" id="dt-filePks">
                            <thead>
                                <tr>
                                    <th scope="row">Kelompoktani</th>
                                    <th scope="row">PKS</th>
                                    <th scope="row">Form-5</th>
                                    <th scope="row">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>API Kelompoktani</td>
                                    <td><a href="scan_pks_015PKSMMMMYYYY.pdf">scan_pks_015PKSMMMMYYYY.pdf</a></td>
                                    <td><a href="scan_form5_015PKSMMMMYYYY.pdf">scan_form5_015PKSMMMMYYYY.pdf</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>API Kelompoktani</td>
                                    <td><a class="text-danger"><i class="fas fa-ban mr-1"></i> Tidak Ada!</a></td>
                                    <td><a href="scan_form5_015PKSMMMMYYYY.pdf">scan_form5_015PKSMMMMYYYY.pdf</a></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>API Kelompoktani</td>
                                    <td><a href="scan_pks_015PKSMMMMYYYY.pdf">scan_pks_015PKSMMMMYYYY.pdf</a></td>
                                    <td><a class="text-danger"><i class="fas fa-ban mr-1"></i> Tidak Ada!</a></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Geolokasi -->
        <div id="panel-5" class="panel">
            <!--
				Yang ingin dicapai pada Panel ini adalah:
				Seluruh Lokasi yang diajukan dan diverifikasi tampil pada tabel ini. Kolom tombol Tindakan/Action digunakan untuk melakukan perubahan pemeriksaan pada data yang diajukan.
			-->
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>DATA GEOLOKASI & REALISASI
                </h2>
                <div class="panel-toolbar">
                    <a href="{{route('admin.report.verification.online.add')}}" class="mr-1 btn btn-primary btn-xs btn-icon rounded-circle waves-effect waves-themed" data-toggle="tooltip" data-offset="0,10" data-original-title="Tambah Pemeriksaan Kelompoktani">
                        <i class="fal fa-users"></i>
                    </a>
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
                        <span>Berikut ini adalah daftar geolokasi dan laporan realisasi yang telah dilaporkan oleh pelaku usaha.</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <table id="dt-geoCheck" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="bg-warning-50">
                                <tr>
                                    <th id="" rowspan="2" hidden>Kelompoktani</th>
                                    <th id="" rowspan="2">Lokasi Bidang</th>
                                    <th id="" class="text-center" colspan="2">Luas (ha)</th>
                                    <th id="" class="text-center" colspan="2">Volume (ton)</th>
                                    <th id="" rowspan="2">Status</th>
                                    <th id="" rowspan="2">Tindakan</th>
                                </tr>
                                <tr>
                                    <th id="">Dilaporkan</th>
                                    <th id="">Verifikasi</th>
                                    <th id="">Dilaporkan</th>
                                    <th id="">Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td hidden>Kelompoktan</td>
                                    <!-- field berikut ini berasal dari Nomor RIPH (jika pengajuan RIPH), PKS (jika pks), tanam/produksi (jika tanam/produksi) -->
                                    <td>API Nama Lokasi</td>
                                    <td>API Luas</td>
                                    <td>API Luas</td>
                                    <td>API Vol</td>
                                    <td>API Vol</td>
                                    <td class="text-center">
                                        <a class="mr-1 text-warning" data-toggle="tooltip" data-original-title="Sedang diverifikasi"><i class="fas fa-clock"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.report.verification.online.show')}}"><i class="fal fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktan</td>
                                    <!-- field berikut ini berasal dari Nomor RIPH (jika pengajuan RIPH), PKS (jika pks), tanam/produksi (jika tanam/produksi) -->
                                    <td>API Nama Lokasi</td>
                                    <td>API Luas</td>
                                    <td>API Luas</td>
                                    <td>API Vol</td>
                                    <td>API Vol</td>
                                    <td class="text-center">
                                        <a class="mr-1 text-success" data-toggle="tooltip" data-original-title="Selesai"><i class="fas fa-check-circle"></i></a>
                                        <a class="mr-1 text-warning" data-toggle="tooltip" data-original-title="Data harus diperbaiki/lengkapi"><i class="fal fa-wrench"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.report.verification.online.show')}}"><i class="fal fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktan</td>
                                    <!-- field berikut ini berasal dari Nomor RIPH (jika pengajuan RIPH), PKS (jika pks), tanam/produksi (jika tanam/produksi) -->
                                    <td>API Nama Lokasi</td>
                                    <td>API Luas</td>
                                    <td>API Luas</td>
                                    <td>API Vol</td>
                                    <td>API Vol</td>
                                    <td class="text-center">
                                        <a class="mr-1 text-success" data-toggle="tooltip" data-original-title="Selesai"><i class="fas fa-check-circle"></i></a>
                                        <a class="mr-1 text-primary" data-toggle="tooltip" data-original-title="Sesuai"><i class="fas fa-award"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.report.verification.online.show')}}"><i class="fal fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="form-label" for="luas">Luas dilaporkan (ha)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-map-marked"></i></span>
                                </div>
                                <input id="luas" type="text" class="font-weight-bold form-control form-control-sm" value="107.89" disabled />
                            </div>
                            <span class="help-block">Luas bidang dilaporkan oleh pelaku usaha</span>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label" for="luas_verif">Luas Verifikasi (ha) <sup class="text-danger"> *</sup></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-map-marked-alt"></i></span>
                                </div>
                                <input id="luas_verif" type="text" class="form-control form-control-sm" value="107.89" disabled />
                            </div>
                            <span class="help-block">(autocalculate hasil verifikasi) Luas bidang hasil pengukuran oleh tim verifikasi</span>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label" for="panen">Panen dilaporkan (ton)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-balance-scale-left"></i></span>
                                </div>
                                <input id="panen" type="text" class="font-weight-bold form-control form-control-sm" value="107.89" disabled />
                            </div>
                            <span class="help-block">Panen dilaporkan oleh pelaku usaha</span>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label" for="panen_verif">Panen Verifikasi (ton) <sup class="text-danger"> *</sup></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-balance-scale"></i></span>
                                </div>
                                <input id="panen_verif" type="text" class="form-control form-control-sm" value="107.89" disabled />
                            </div>
                            <span class="help-block">(autocalculate hasil verifikasi) Panen hasil penimbangan oleh tim verifikasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Documentation Gallery -->
        <div id="panel-6" class="panel">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-images mr-1"></i> DOKUMENTASI
                </h2>
                <div class="panel-toolbar">
                    <button class="mr-1 btn btn-info btn-xs btn-icon rounded-circle waves-effect waves-themed" role="button" data-toggle="modal" data-target=".modal-image-right"><a data-toggle="tooltip" data-offset="0,10" data-original-title="Unggah foto dokumentasi"><i class="fal fa-plus"></i></a></button>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="alert alert-info border-0 mb-0">
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div id="js-lightgallery">
                        <a class="" href="/img/demo/gallery/1.jpg" data-sub-html="Keterangan foto">
                            <img class="img-responsive" src="/img/demo/gallery/thumb/1.jpg" alt="Judul foto">
                        </a>
                        <a class="" href="/img/demo/gallery/2.jpg" data-sub-html="Keterangan foto">
                            <img class="img-responsive" src="/img/demo/gallery/thumb/2.jpg" alt="Judul foto">
                        </a>
                        <a class="" href="/img/demo/gallery/3.jpg" data-sub-html="Keterangan foto">
                            <img class="img-responsive" src="/img/demo/gallery/thumb/3.jpg" alt="Judul foto">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kesimpulan & Keterangan Tambahan -->
        <div id="panel-5" class="panel">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i> KESIMPULAN & KETERANGAN
                </h2>
                <div class="panel-toolbar">
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="alert alert-danger border-0 mb-0">
                Bagian ini untuk menambahkan Kesimpulan hasil pemeriksaan serta keterangan lainnya yang diperlukan.
            </div>
            <div class="panel-container show">
                <div class="js-summernote" id="kesimpulan"></div>
            </div>
        </div>
        <div id="panel-6" class="panel">
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="form-label" for="statusVerif">Status Verifikasi</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <!-- FINAL STATUS VALUE this will change the current value of status_online field.
									0 = not submitted
									1 = submitted
									2 = Start/running
									3 = Verified - OK
									4 = Verified - Perbaikan
								-->
                                <select type="text" id="statusVerif" class="form-control form-control-sm" placeholder="Task..." aria-label="statusVerif" aria-describedby="statusVerif">
                                    <option hidden>- pilih status hasil</option>
                                    <option disabled></option>
                                    <option value="3">Verified - OK</option>
                                    <option value="4">Verified - Perbaikan</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status progress dan hasil akhir pemeriksaan lapangan. <span class="text-danger">status hasil pemeriksaan enabled saat status pemeriksaan bernilai "SELESAI"</span></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="tgl">Tanggal Penetapan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_status" placeholder="dd/mm/yyyy">
                            </div>
                            <span class="help-block">Tanggal ditetapkannya status pemeriksaan.</span>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label" for="file_verif">Berkas Laporan Verifikasi</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="file_verif">
                                <label class="custom-file-label" for="file_verif">Pilih berkas...</label>
                            </div>
                            <span class="help-block">Unggah berkas Laporan hasil verifikasi lapangan. Ukuran maksimum berkas ... mb</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 my-1">
                            <a href="{{route('admin.report.verification.online')}}" class="btn btn-sm btn-primary btn-block waves-effect waves-themed" data-toggle="tooltip" data-offset="0,10" data-original-title="Simpan dan submit data"><i class="fas fa-save"></i> Simpan</a>
                        </div>
                        <div class="col-md-6 my-1">
                            <a href="{{route('admin.report.verification.online')}}" class="btn btn-sm btn-warning btn-block waves-effect waves-themed" data-toggle="tooltip" data-offset="0,10" data-original-title="Batalkan"><i class="fas fa-undo mr-1"></i>Batalkan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Right -->
    <div class="modal fade modal-info-right" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"><i class="subheader-icon fas fa-file-invoice text-info"></i> Data Pengajuan Verifikasi</h5>
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
                        <label class="form-label" for="no_aju">Nomor Pengajuan</label>
                        <div class="readonly input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-file-invoice"></i></span>
                            </div>
                            <input id="no_aju" class="form-control" placeholder="nomor pengajuan" aria-label="no_aju" aria-describedby="no_aju">
                        </div>
                        <span class="help-block">Nomor pengajuan verifikasi</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="no_riph">Nomor RIPH</label>
                        <div class="readonly input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">RIPH</span>
                            </div>
                            <input id="no_riph" class="form-control" placeholder="no. riph" aria-label="no_riph" aria-describedby="no_riph">
                        </div>
                        <span class="help-block">Nomor penerbitan rekomendasi import produk hortikultura</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tgl_aju">Tanggal Pengajuan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" id="tgl_aju" class="form-control" placeholder="Task date" aria-label="date" aria-describedby="tgl_aju">
                        </div>
                        <span class="help-block">Tanggal diajukan.</span>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-image-right" tabindex="-1" role="dialog" aria-hidden="true">
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
</div>
<!-- End Page Content -->
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
<script src="{{ asset('/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('/js/formplugins/summernote/summernote.js') }}"></script>
<script src="{{ asset('js/miscellaneous/lightgallery/lightgallery.bundle.js') }}"></script>

<script>
    $(document).ready(function() {
        //datatabel lapangan
        $('#dataTable-onsiteList').dataTable({
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
            ],
            rowGroup: {
                dataSrc: 0
            }
        });

        //datatabel sampling lokasi
        $('#dt-locsampling').dataTable({
            responsive: true,
            pageLength: 10,
            order: [
                [0, 'asc']
            ],
            rowGroup: {
                dataSrc: 0
            }
        });

        //datatable tanam online
        $('#dataTable-tanamList').dataTable({
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
            ],
            rowGroup: {
                dataSrc: 0
            }
        });

        //datatable produksi online
        $('#dataTable-sklList').dataTable({
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
            ],
            rowGroup: {
                dataSrc: 0
            }
        });
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
        // enable clear button 
        $('#tgl_mulai').datepicker({
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: controls
        });

        $('#tgl_akhir').datepicker({
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: controls
        });

        $('#tgl_status').datepicker({
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: controls
        });
    }

    $(document).ready(function() {
        runDatePicker();
    });
</script>

<!-- summernote -->
<script>
    var autoSave = $('#autoSave');
    var interval;
    var timer = function() {
        interval = setInterval(function() {
            //start slide...
            if (autoSave.prop('checked'))
                kesimpulan();

            clearInterval(interval);
        }, 3000);
    };

    //save
    var kesimpulan = function() {
        localStorage.setItem('summernoteData', $('#kesimpulan').summernote("code"));
        console.log("saved");
    }

    //delete 
    var removeFromLocal = function() {
        localStorage.removeItem("summernoteData");
        $('#kesimpulan').summernote('reset');
    }

    $(document).ready(function() {
        //init default
        $('.js-summernote').summernote({
            height: 200,
            tabsize: 2,
            placeholder: "Type here...",
            dialogsFade: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                //restore from localStorage
                onInit: function(e) {
                    $('.js-summernote').summernote("code", localStorage.getItem("summernoteData"));
                },
                onChange: function(contents, $editable) {
                    clearInterval(interval);
                    timer();
                }
            }
        });

        //load emojis
        $.ajax({
            url: 'https://api.github.com/emojis',
            async: false
        }).then(function(data) {
            window.emojis = Object.keys(data);
            window.emojiUrls = data;
        });
    });
</script>

<!-- gallery -->
<script>
    $(document).ready(function() {
        var $initScope = $('#js-lightgallery');
        if ($initScope.length) {
            $initScope.justifiedGallery({
                border: -1,
                rowHeight: 150,
                margins: 8,
                waitThumbnailsLoad: true,
                randomize: false,
            }).on('jg.complete', function() {
                $initScope.lightGallery({
                    thumbnail: true,
                    animateThumb: true,
                    showThumbByDefault: true,
                });
            });
        };
        $initScope.on('onAfterOpen.lg', function(event) {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event) {
            $('body').removeClass("overflow-hidden");
        });
    });
</script>
@endsection