@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('commitment_show')
    @if (!empty($error))
        <div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
    @endif

    <div class="row">
        <!-- Left Panel -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
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
                                            <h6 class="fw-500 my-0">{{ $pullRiph->nama }}</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Nomor RIPH</span>
                                            <h6 class="fw-500 my-0">{{ $pullRiph->no_ijin }}</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Tanggal Terbit</span>
                                            <h6 class="fw-500 my-0">{{ date('d/m/Y', strtotime($pullRiph->tgl_ijin)) }}</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Volume RIPH</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullRiph->volume_riph,2,',', '.') }} ton</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Vol. Wajib Produksi</span>
                                            <h6 class="fw-500 my-0">{{ number_format( $pullRiph->volume_produksi,2,',', '.') }} ton</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Luas. Wajib Tanam</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullRiph->luas_wajib_tanam,2,',', '.') }} ha</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Status dokumen</span>
                                            <h6 class="fw-500 my-0">
                                            @switch($pullRiph->status)
                                                @case(1)
                                                    <div class="row">
                                                        <div class="col-md-12 my-1">
                                                            Menunggu Review Verifikasi
                                                        </div>
                                                    </div>
                                                    
                                                    @break
                                                @case(2)
                                                    <div class="row">
                                                        <div class="col-md-12 my-1">
                                                            Sudah Diverifikasi
                                                        </div>
                                                        <div class="col-md-12 my-1">
                                                            <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip"><i class="fas fa-badge-check"></i> Ajukan SKL</a>
                                                        </div>        
                                                    </div>
                                                    
                                                    @break
                                                @case(3)
                                                    Pengajuan SKL
                                                    @break
                                                @case(4)
                                                    Review SKL
                                                    @break
                                                @case(5)
                                                    SKL Sudah Terbit
                                                    @break
                                                @default
                                                    <div class="row">
                                                        <div class="col-md-12 my-1">
                                                            Belum diajukan Verifikasi Oleh Importir
                                                        </div>
                                                        <div class="col-md-12 my-1">
                                                            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#verifikasiModal"><i class="fas fa-badge-check"></i> Ajukan Verifikasi</a>
                                                        </div>        
                                                    </div>
                                                    
                                            @endswitch 
                                            
                                            </h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="panel" id="panel-2">
                        <div class="panel-hdr">
                            <h2>
                                DATA <span class="fw-300"><i>Pembenihan</i></span>
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
                                            <span class="text-muted">Kebutuhan Benih</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['kebutuhan_benih'],2,',', '.') }} ton</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Stok Mandiri</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['stok_mandiri'],2,',', '.') }}  ton</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Beli dari Penangkar</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['beli_penangkar'],2,',', '.') }}  ton</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                                            <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['kebutuhan_pupuk']['pupuk_organik'],2,',', '.') }} kg</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Nitrogen Phosfor Kalium (NPK)</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['kebutuhan_pupuk']['npk'],2,',', '.') }} kg</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Dolomit</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['kebutuhan_pupuk']['dolomit'],2,',', '.') }} kg</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            <span class="text-muted">Zwavelzure Amonium (ZA)</span>
                                            <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['kebutuhan_pupuk']['za'],2,',', '.') }} kg</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                                                @isset($pullData['riph']['wajib_tanam']['mulsa'])
                                                    <h6 class="fw-500 my-0">Mulsa:&nbsp;</h6>
                                                    <h6 class="fw-500 my-0">{{ number_format($pullData['riph']['wajib_tanam']['mulsa'],2,',', '.') }} kg</h6>    
                                                @endisset
                                                
                                                
                                            </div>
                                        </div>
                                    </li>
                                    @isset($pullData['riph']['wajib_tanam']['bagi-hasil'])
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            
                                            <span class="text-muted">Bagi Hasil</span>
                                            <h6 class="fw-500 my-0">{{ $pullData['riph']['wajib_tanam']['bagi-hasil'] }}</h6>
                                            
                                        </div>
                                    </li>
                                    @endisset
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- right Panel -->
        
        <div class="col-md-12" show>
            @isset($pullData['riph']['wajib_tanam']['kelompoktani']['pool'])
            <div class="panel" id="panel-6">
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
                                    <th >Kabupaten</th>
                                    <th >Kecamatan</th>
                                    <th >Kelurahan</th>
                                    <th >Nama</th>
                                    <th >Pimpinan</th>
                                    <th >Petani</th>
                                    <th >Luas lahan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $pullData['riph']['wajib_tanam']['kelompoktani']['loop'] as $poktan )
                                    <tr>
                                        <td>{{ $poktan['id_kabupaten'] }}</td>
                                        <td>{{ $poktan['id_kecamatan'] }}</td>
                                        <td>{{ $poktan['id_kelurahan'] }}</td>
                                        <td>{{ $poktan['nama_kelompok'] }}</td>
                                        <td>{{ $poktan['nama_pimpinan'] }}</td>
                                        <td>{{ $poktan['nama_petani'] }}</td>
                                        <td>{{  number_format($poktan['luas_lahan'],2,',', '.') }}</td>
                                        
                                        
                                    </tr>    
                                @endforeach
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
            @endisset
            @isset($pullData['riph']['wajib_tanam']['datapenangkar']['pool'])
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
            @endisset
            
        </div>
        
    </div>
    
    <!-- Modal -->
<div class="modal fade" id="verifikasiModal" tabindex="-1" role="dialog" aria-labelledby="verifikasiModal" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Berkas-berkas <span class="fw-300"><i>Unggahan</i></span>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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
                    <span>Berikut ini adalah berkas-berkas yang <span class="fw-900 text-danger">HARUS Anda unggah </span>(salinan hasil pindai) sebagai syarat wajib pengajuan verifikasi. </span>
                </div>
            </div>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.task.commitment.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label h6">RIPH</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" name="formRiph" required>
                            <label class="custom-file-label" for="formRiph">Choose file...</label>
                        </div>
                        <span class="help-block">Surat Persetujuan RIPH. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                    <div class="form-group col">
                        <label class="form-label h6">Form SPTJM</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" name="formSptjm" required>
                            <label class="custom-file-label" for="formSptjm">Choose file...</label>
                        </div>
                        <span class="help-block">Form Pertanggungjawaban Mutlak. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label h6">Logbook</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" name="logBook" required>
                            <label class="custom-file-label" for="logBook">Choose file...</label>
                        </div>
                        <span class="help-block">Logbook. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                    <div class="form-group col">
                        <label class="form-label h6">Form-RT</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" name="formRt" required>
                            <label class="custom-file-label" for="formRt">Choose file...</label>
                        </div>
                        <span class="help-block">Form Rencana Tanam. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>        
                </div>
                
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label h6">Form-RTA</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" name="formRta" required>
                            <label class="custom-file-label" for="formRta">Choose file...</label>
                        </div>
                        <span class="help-block">Form Realisasi tanam. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                    <div class="form-group col">
                        <label class="form-label h6">Form RPO</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" name="formRpo" required>
                            <label class="custom-file-label" for="formRpo">Choose file...</label>
                        </div>
                        <span class="help-block">Form Realisasi Produksi. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label h6">Form LA</label>
                        <div class="custom-file input-group">
                            <input type="file" class="custom-file-input" name="formLa" required>
                            <label class="custom-file-label" for="formLa">Choose file...</label>
                        </div>
                        <span class="help-block">Form Laporan Akhir. Can be a jpg or pdf file with a maximum file size of 2Mb.</span>
                    </div>
                    <div class="modal-footer col">
                        <button type="button" class="btn btn-secondary align-bottom" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary align-bottom">Unggah</button>
                    </div>    
                </div>
            </form>
            
        </div>
        
      </div>
    </div>
  </div>


@endcan

@endsection

<!-- start script for this page -->
@section('scripts')
@parent


@endsection