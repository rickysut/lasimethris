@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('commitment_show')
    @if (!empty($pagedata['alerttitle']))
        <div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
    @endif

    <div class="row">
        <!-- Left Panel -->
        <div class="col-md-4">
            <div class="panel" id="panel-1">
                <div class="panel-hdr">
                    <h2>
                        DATA <span class="fw-300"><i>RIPH</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <ul class="list-group mb-3" style="word-break:break-word;">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Perusahaan/Lembaga</span>
                                    <h6 class="fw-500 my-0">Nama Perusahaan/Lembaga</h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Nomor RIPH</span>
                                    <h6 class="fw-500 my-0">xxxx/PP.240/D/MM/YYYY</h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Tanggal Terbit</span>
                                    <h6 class="fw-500 my-0">dd mmmm yyyy</h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Volume RIPH</span>
                                    <h6 class="fw-500 my-0">xx.xxx <sup>ton</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Vol. Wajib Produksi</span>
                                    <h6 class="fw-500 my-0">xx.xxx <sup>ton</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Vol. Wajib Tanam</span>
                                    <h6 class="fw-500 my-0">xx.xxx <sup>ha</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Lokasi Tanam</span>
                                    <h6 class="fw-500 my-0">Kabupaten - Provinsi</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel" id="panel-2">
                <div class="panel-hdr">
                    <h2>
                        DATA <span class="fw-300"><i>Perbenihan (berlabel)</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Kebutuhan</span>
                                    <h6 class="fw-500 my-0">... <sup>ton</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Stok Mandiri</span>
                                    <h6 class="fw-500 my-0">... <sup>ton</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">dari Penangkar</span>
                                    <h6 class="fw-500 my-0">... <sup>ton</sup></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel" id="panel-3">
                <div class="panel-hdr">
                    <h2>
                        DATA <span class="fw-300"><i>Pengendalian</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Pupuk Organik</span>
                                    <h6 class="fw-500 my-0">xx <sup>kg</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Nitrogen Phosfor Kalium (NPK)</span>
                                    <h6 class="fw-500 my-0">xx <sup>kg</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Dolomit</span>
                                    <h6 class="fw-500 my-0">xx <sup>kg</sup></h6>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Zwavelzure Amonium (ZA)</span>
                                    <h6 class="fw-500 my-0">xx <sup>kg</sup></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel" id="panel-4">
                <div class="panel-hdr">
                    <h2>
                        DATA <span class="fw-300"><i>Lainnya</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Saprodi Lainnya</span>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-500 my-0">Item</h6>
                                        <h6 class="fw-500 my-0">xx <sup>kg</sup></h6>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Bagi Hasil</span>
                                    <h6 class="fw-500 my-0">xx% - xx%</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- right Panel -->
        <div class="col-md-8">
            <div class="panel" id="panel-5">
                <div class="panel-hdr">
                    <h2>
                        Daftar <span class="fw-300"><i>Kelompoktani Mitra & PKS</i></span>
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
                        <div class="flex-1 help-block">
                            <span>Berikut ini adalah daftar Kelompoktani Binaan yang telah Anda pilih sebelumnya pada form Komitmen Baru.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- datatable start -->
                        <table id="dt-keltan" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="thead-dark">
                                <tr>
                                    <th id="keltan"></th>
                                    <th id="keltan">Kelompoktani</th>
                                    <th id="jml_anggota">Anggota</th>
                                    <th id="desa" hidden>Desa</th>
                                    <th id="kecamatan" hidden>Kecamatan</th>
                                    <th id="luas">Luas (ha)</th>
                                    <th id="periode_tanam">Periode Tanam</th>
                                    <th id="tindakan">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!--
                                        // opsional column 0: jika dimungkinkan ada metode untuk memeriksa apakah data telah terisi (sebagian atau seluruh field).
                                        // untuk memudahkan operator mengetahui dengan cepat, apakah data pada row telah diisi (sebagian atau seluruh) dan sejauh mana data telah terisi.
                                    -->
                                    <td class="text-center">
                                        <i class="fas fa-exclamation-triangle text-danger" data-toggle="tooltip" title data-original-title="WARNING! No Data Available"></i>
                                    </td>
                                    <td>API Poktan</td>
                                    <td>API Jml</td>
                                    <td hidden>API Desa</td>
                                    <td hidden>API Kecamatan</td>
                                    <td>API Luas</td>
                                    <td>API Periode</td>
                                    <td class="text-center">
                                        <div class="justify-content-center">
                                            {{-- create button only when there are no data available --}}
                                            <a class="text-info mr-1" href="#" role="button" data-toggle="tooltip" data-original-title="buat Rencana Tanam/PKS" data-offset="0,10"><i class="fal fa-plus-circle"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <i class="fas fa-check text-success" data-toggle="tooltip" title data-original-title="Agreement is available"></i>
                                    </td>
                                    <td>API Poktan</td>
                                    <td>API Jml</td>
                                    <td hidden>API Desa</td>
                                    <td hidden>API Kecamatan</td>
                                    <td>API Luas</td>
                                    <td>API Periode</td>
                                    <td class="text-center">
                                        <div class="justify-content-center">
                                            {{-- create button is hidden when user has data --}}
                                            <a class="text-warning mr-1" href="#" role="button" data-toggle="tooltip" data-original-title="ubah Rencana Tanam/PKS" data-offset="0,10"><i class="fal fa-edit"></i></a>
                                            <a class="text-primary mr-1" href="#" role="button" data-toggle="tooltip" data-original-title="Member Management" data-offset="0,10"><i class="fal fa-users"></i></a>
                                            <a class="text-primary mr-1" href="#" role="button" data-toggle="tooltip" data-original-title="Bantuan Saprodi" data-offset="0,10"><i class="fal fa-hands-helping"></i></a>
                                            <a class="text-danger mr-1" href="" role="button" data-toggle="tooltip" data-original-title="hapus Rencana Tanam/PKS" data-offset="0,10"><i class="fal fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                        </div>
                    </div>
                    <div class="panel-content">
                        <h6>Keterangan Status</h6>
                        <div class="col-12">
                            <div class="row small">
                                <a><i class="fas fa-exclamation-triangle text-danger mr-1"></i>: Peringatan bahwa TIDAK DITEMUKAN DATA isian apapun untuk baris ini.</a>
                            </div>
                            <div class="row small">
                                <a><i class="fas fa-exclamation-triangle text-warning mr-1"></i>: Peringatan bahwa HANYA sebagian data yang terisi untuk baris ini.</a>
                            </div>
                            <div class="row small">
                                <a><i class="fas fa-check text-success mr-1"></i>: Sistem menyatakan bahwa data telah terisi.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel" id="panel-6">
                <div class="panel-hdr">
                    <h2>
                        Daftar <span class="fw-300"><i>Penangkar Benih Mitra</i></span>
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
                        <div class="flex-1 help-block">
                            <span>Berikut ini adalah daftar Penangkar Benih yang telah Anda laporkan pada aplikasi RIPH Online sebelumnya.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <!-- datatable start -->
                        <table id="dt-tangkar" class="table table-sm table-bordered table-hover table-striped w-100">
                            <thead class="thead-dark">
                                <tr>
                                    <th id="nama_usaha">Penangkar</th>
                                    <th id="varietas">Varietas</th>
                                    <th id="alamat">Alamat</th>
                                    <th id="pimpinan">Pimpinan</th>
                                    <th id="no_hp">No. Kontak</th>
                                    <th id="ketersediaan">Ketersediaan</th>
                                    <th id="tindakan">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>API Penangkar</td>
                                    <td>API</td>
                                    <td>API</td>
                                    <td>API</td>
                                    <td>API</td>
                                    <td>API</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel" id="panel-7">
                <div class="panel-hdr">
                    <h2>
                        Berkas-berkas <span class="fw-300"><i>Unggahan</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
                    </div>
                </div>
                <div class="alert alert-danger border-0 mb-0">
                    <div class="d-flex align-item-center">
                        <div class="alert-icon">
                            <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0">
                                <i class="base base-7 icon-stack-3x opacity-100 color-danger-400"></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-danger-900"></i>
                                <i class="fa fa-exclamation icon-stack-1x opacity-100 color-white"></i>
                            </div>
                        </div>
                        <div class="flex-1 help-block">
                            <span>Berikut ini adalah berkas-berkas yang <span class="fw-900 text-danger">HARUS Anda unggah </span>(salinan hasil pindai) sebagai syarat wajib pengajuan verifikasi. Klik <a href="javascript:void(0);" class="text-danger fw-700" data-action="panel-collapse">di sini</a> untuk menampilkan/menyembunyikan.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content justify-content-center">
                        <div class="form-group">
                            <label class="form-label h6">RIPH</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="formRiph" required>
                                <label class="custom-file-label" for="formRiph">Choose file...</label>
                            </div>
                            <span class="help-block">Surat Persetujuan RIPH. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label h6">Form SPTJM</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="formSptjm" required>
                                <label class="custom-file-label" for="formSptjm">Choose file...</label>
                            </div>
                            <span class="help-block">Form Pertanggungjawaban Mutlak. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label h6">Logbook</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="logBook" required>
                                <label class="custom-file-label" for="logBook">Choose file...</label>
                            </div>
                            <span class="help-block">Logbook. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label h6">Form-RT</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="formRt" required>
                                <label class="custom-file-label" for="formRt">Choose file...</label>
                            </div>
                            <span class="help-block">Form Rencana Tanam. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label h6">Form-RTA</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="formRta" required>
                                <label class="custom-file-label" for="formRta">Choose file...</label>
                            </div>
                            <span class="help-block">Form Realisasi tanam. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label h6">Form RPO</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="formRpo" required>
                                <label class="custom-file-label" for="formRpo">Choose file...</label>
                            </div>
                            <span class="help-block">Form Realisasi Produksi. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label h6">Form LA</label>
                            <div class="custom-file input-group">
                                <input type="file" class="custom-file-input" id="formLa" required>
                                <label class="custom-file-label" for="formLa">Choose file...</label>
                            </div>
                            <span class="help-block">Form Laporan Akhir. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel" id="panel-8">
                <div class="alert alert-warning border-0 mb-0">
                    <div class="d-flex align-item-center">
                        <div class="alert-icon">
                            <div class="icon-stack icon-stack-sm mr-3 flex-shrink-0">
                                <i class="base base-7 icon-stack-3x opacity-100 color-warning-400"></i>
                                <i class="base base-7 icon-stack-2x opacity-100 color-warning-800"></i>
                                <i class="fa fa-ban icon-stack-1x opacity-100 color-white"></i>
                            </div>
                        </div>
                        <div class="flex-1 help-block">
                            <span>
                                <strong>Lakukan Pengajuan</strong>
                                Verifikasi maupun Surat Keterangan Lunas hanya jika Anda telah
                                <strong>melengkapi seluruh syarat yang diwajibkan. </strong>
                            </span>
                            <span>Tombol <a class="badge btn-warning text-dark">Ajukan Verifikasi</a> untuk mengajukan proses verifikasi lapangan maupun verifikasi data online. </span>
                            <span>Tombol <a class="badge btn-success text-white">Ajukan SKL</a> untuk mengajukan Penerbitan Surat Keterangan Lunas.</span>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content justify-content-center text-center">
                        <div class="row d-flex">
                            <div class="col-md-6 my-1">
                                <a href="#" class="btn btn-sm btn-warning btn-block" data-toggle="tooltip" data-offset="0,10" data-original-title="Ajukan Verifikasi"><i class="fas fa-badge-check"></i> Ajukan Verifikasi</a>
                            </div>
                            <div class="col-md-6 my-1">
                                <a href="#" class="btn btn-sm btn-success btn-block" data-toggle="tooltip" data-offset="0,10" data-original-title="Ajukan Keterangan Lunas"><i class="fas fa-award"></i> Ajukan SKL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
    
        </div>
    </div>
    


@endcan

@endsection

<!-- start script for this page -->
@section('scripts')
@parent


@endsection