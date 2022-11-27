@extends ('layouts.admin')
@section ('style')
<link rel="stylesheet" media="screen, print" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
<link rel="stylesheet" media="screen, print" href="{{ asset('css/miscellaneous/lightgallery/lightgallery.bundle.css') }}">
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<!-- Page Content -->
<!--
	Yang ingin dicapai halaman ini adalah:
	Halaman ini menitikberatkan pada pemeriksaan fisik di lapangan. Verifikator melaporkan hasil verifikasi lapangan/onfarm.
	Halaman ini hanyalah sebagai contoh untuk menggambarkan apa yang ingin dicapai. Prosedur, proses dan metode dapat menggunakan teknologi lain yang lebih relevan dan tepat.
-->
<div class="row">
    <div class="col-lg-12">
        <!-- hanya UNTUK verifikator lapangan -->
        <div id="panel-1" class="panel">
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <!-- STATUS NOMOR 1
								Yang ingin dicapai bagian ini adalah:
								Status verifikasi agar dapat ditelusuri progress pemeriksaan. Pemeriksa/Verifikator memilih status verifikasi. Nilai pada Field status Submitted (1) dari pelaku usaha berubah menjadi Mulai/On-progress (2).
							-->
                            <label class="form-label" for="statusVerif">Status Verifikasi</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="statusVerif" class="form-control form-control-sm" placeholder="Task..." aria-label="statusVerif" aria-describedby="statusVerif">
                                    <option hidden>- pilih status</option>
                                    <option disabled></option>
                                    <option value="2">Mulai/On-progress</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status progress dan hasil akhir pemeriksaan lapangan. <span class="text-danger">status hasil pemeriksaan enabled saat status pemeriksaan bernilai "SELESAI"</span></span>
                        </div>
                        <div class="form-group col-md-4">
                            <!--
								Yang ingin dicapai bagian ini adalah:
								Tanggal perubahan Status verifikasi agar dapat ditelusuri progress pemeriksaan. Pemeriksa/Verifikator memilih tanggal verifikasi.
							-->
                            <label class="form-label" for="tgl_mulai">Tanggal Pelaksanaan</label>
                            <div class="input-group input-group-multi-transition">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_mulai" placeholder="dari tanggal">
                            </div>
                            <span class="help-block">Tanggal pelaksanaan pemeriksaan.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-ballot-check mr-1"></i>HASIL PEMERIKSAAN ONFARM
                </h2>
                <div class="panel-toolbar">
                    <button class="mr-1 btn btn-info btn-xs btn-icon rounded-circle waves-effect waves-themed" role="button" data-toggle="modal" data-target=".modal-info-right">
                        <a data-toggle="tooltip" data-offset="0,10" data-original-title="Lihat Data Pengajuan">
                            <i class="fal fa-info-circle"></i>
                        </a>
                    </button>
                    <!--
						Yang ingin dicapai tombol ini adalah:
						menampilkan halaman isian sample lokasi yang akan diperiksa (location_check.php).
					-->
                    <a href="{{route('admin.report.verification.onfarm.add')}}" class="mr-1 btn btn-primary btn-xs btn-icon rounded-circle waves-effect waves-themed" data-toggle="tooltip" data-offset="0,10" data-original-title="Tambah Lokasi Sampling">
                        <i class="fal fa-map-marker-plus"></i>
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
                        <span>Bagian ini digunakan untuk mencatat/melaporkan data-data hasil pemeriksaan secara sampling. Klik Tombol Tambah Lokasi Sampling</span>
                    </div>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="table">
                        <!--
							Yang ingin dicapai bagian ini adalah:
							Menampilkan daftar lokasi yang telah diverifikasi atau dilengkapi data verifikasi.
							tabel ini hanya menampilkan data dengan value pada field status verifikasi tanam-produksi = 1 (selesai diperiksa)
							Data dikolompokkan berdasarkan Kelompoktani (grouping) untuk memudahkan penelusuran.
						-->
                        <table id="dt-locsampling" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="bg-warning-50">
                                <tr>
                                    <th id="" rowspan="2" hidden>Kelompoktani</th>
                                    <th id="" rowspan="2">Lokasi Bidang</th>
                                    <th id="" class="text-center" colspan="2">Luas (ha)</th>
                                    <th id="" class="text-center" colspan="2">Volume (ton)</th>
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
                                    <td>API Nama Lokasi</td>
                                    <td>API Luas</td>
                                    <td>API Luas</td>
                                    <td>API Vol</td>
                                    <td>API Vol</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.report.verification.onfarm.show')}}"><i class="fal fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktan</td>
                                    <td>API Nama Lokasi</td>
                                    <td>API Luas</td>
                                    <td>API Luas</td>
                                    <td>API Vol</td>
                                    <td>API Vol</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.report.verification.onfarm.show')}}"><i class="fal fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>Kelompoktan</td>
                                    <td>API Nama Lokasi</td>
                                    <td>API Luas</td>
                                    <td>API Luas</td>
                                    <td>API Vol</td>
                                    <td>API Vol</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.report.verification.onfarm.show')}}"><i class="fal fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="panel-content">
                    <!--
						Yang ingin dicapai bagian ini adalah:
						Menampilkan data luas-produksi yang dilaporkan oleh pelaku usaha dan telah diverifikasi. Bukan Total Luas Keseluruhan namun luas sampling. Sehingga dapat dilihat Luas/Produksi Sampling vs Luas/Produksi Verifikasi
					-->
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
                            <span class="help-block">(Autocalculate luas diverifikasi) Luas bidang hasil pengukuran oleh tim verifikasi</span>
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
                            <span class="help-block">(Autocalculate panen diverifikasi) Panen hasil penimbangan oleh tim verifikasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="panel-3" class="panel">
            <!--
				Yang ingin dicapai bagian ini adalah:
				Dokumentasi pelaksanaan verifikasi onfarm/lapangan.
			-->
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
        <div id="panel-4" class="panel">
            <!--
				Yang ingin dicapai bagian ini adalah:
				Kesimpulan dan keterangan pelaksanaan pemeriksaan/verifikasi lapangan
			-->
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
        <div id="panel-5" class="panel">
            <!--
				Yang ingin dicapai bagian ini adalah:
				Status Akhir dari seluruh rangkaian pelaksanaan verifikasi pada 1 nomor RIPH
			-->
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <!-- STATUS NOMOR 2
									Yang ingin dicapai bagian ini adalah:
									Status Verifikasi Tanam secara keseluruhan. status ini akan digunakan/diperlukan untuk menelusuri progress verifikasi tanam. dan sebagai status untuk syarat penerbitan SKL
								-->
                            <label class="form-label" for="statusTanam">Status Verifikasi Tanam</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="statusTanam" class="form-control form-control-sm" placeholder="Task..." aria-label="statusTanam" aria-describedby="statusTanam">
                                    <option hidden>- pilih status hasil</option>
                                    <option disabled></option>
                                    <option>Verified - OK</option>
                                    <option>Verified - Perbaikan</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status progress dan hasil akhir pemeriksaan tanam.</span>
                        </div>
                        <div class="form-group col-md-4">
                            <!-- STATUS NOMOR 3
									Yang ingin dicapai bagian ini adalah:
									Status Verifikasi Produksi secara keseluruhan. status ini akan digunakan/diperlukan untuk menelusuri progress verifikasi produksi. dan sebagai status untuk syarat penerbitan SKL
								-->
                            <label class="form-label" for="statusProduksi">Status Verifikasi Produksi</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="statusProduksi" class="form-control form-control-sm" placeholder="Task..." aria-label="statusProduksi" aria-describedby="statusProduksi">
                                    <option hidden>- pilih status hasil</option>
                                    <option disabled></option>
                                    <option>Verified - OK</option>
                                    <option>Verified - Perbaikan</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status progress dan hasil akhir pemeriksaan lapangan.</span>
                        </div>
                        <div class="form-group col-md-4">
                            <!--
									Yang ingin dicapai bagian ini adalah:
									Status pelaksanaan Verifikasi secara keseluruhan. status ini akan digunakan/diperlukan untuk menelusuri progress verifikasi. Saat status dinyatakan SELESAI, maka akan merubah status Mulai/Onprogress. Status SELESAI hanya dapat dilakukan jika:
									1. Status Verifikasi (NOMOR 1) = not null
									1. Status Verifikasi Tanam (NOMOR 2) = not null
									2. Status Verifikasi Produksi (NOMOR 3)= not null
								-->
                            <label class="form-label" for="statusVerif">Status Verifikasi</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-tasks-alt"></i></span>
                                </div>
                                <select type="text" id="statusVerif" class="form-control form-control-sm" placeholder="Task..." aria-label="statusVerif" aria-describedby="statusVerif">
                                    <option hidden>- pilih status hasil</option>
                                    <option disabled></option>
                                    <option value="3">Selesai</option>
                                    <option disabled></option>
                                </select>
                            </div>
                            <span class="help-block">Status progress dan hasil akhir pemeriksaan lapangan.</span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="tgl">Tanggal Ditetapkan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" aria-label="Tanggal mulai pelaksanaan pemeriksaan" id="tgl_status" placeholder="dd/mm/yyyy">
                            </div>
                            <span class="help-block">Tanggal ditetapkannya status pemeriksaan.</span>
                        </div>
                        <div class="form-group col-md-8">
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
                            <a href="/verification/onfarm" class="btn btn-sm btn-primary btn-block waves-effect waves-themed" data-toggle="tooltip" data-offset="0,10" data-original-title="Simpan dan submit data"><i class="fas fa-save"></i> Simpan</a>
                        </div>
                        <div class="col-md-6 my-1">
                            <a href="/verification/onfarm" class="btn btn-sm btn-warning btn-block waves-effect waves-themed" data-toggle="tooltip" data-offset="0,10" data-original-title="Batalkan"><i class="fas fa-undo"></i> Batalkan</a>
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