<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Simethris | Account Registration RIPH 2021
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <meta name="description" content="Register">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- smartadmin base css -->
    <link name="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/vendors.bundle.css') }}">
    <link name="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/app.bundle.css') }}">
    <link name="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link name="myskin" rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/skins/skin-master.css') }}">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('css/smartadmin/skins/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">
    <link rel="mask-icon" href="{{ asset('img/safari-pinned-tab.svg') }}">

    <!-- Font Awsome -->
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/fa-brands.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/fa-regular.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/fa-solid.css') }}">

    <!-- select2 -->
    <link rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/formplugins/select2/select2.bundle.css') }}">

    <!-- Intro.js -->
    <link rel="stylesheet" media="screen, print" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.css">
    <link rel="stylesheet" media="screen, print" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">
    <link rel="stylesheet" media="screen, print" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css.map">







</head>
<!-- Apa yang ingin dicapai pada halaman ini
		
	-->

<body>
    <div class="page-wrapper auth">
        <div class="page-inner bg-brand-gradient">
            <div class="page-content-wrapper bg-transparent m-0">
                <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                    <div class="d-flex align-items-center container p-0">
                        <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                <img src="{{ asset('img/favicon.png') }}" alt="simethris" aria-roledescription="logo">
                                <span class="page-logo-text mr-1 hidden-sm-down">
                                    <img src="{{ asset('img/logo-icon.png') }}" alt="simethris" aria-roledescription="logo" style="width:150px; height:auto;">
                                </span>
                                <span class="page-logo-text mr-1 d-sm-block d-md-none">Simethris MobileApp</span>
                            </a>
                        </div>
                        <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down">
                            Sudah memiliki akun?
                        </span>
                        <a href="{{ route('admin.home') }}" class="btn-link text-white ml-auto ml-sm-0">
                            Login di sini
                        </a>
                    </div>
                </div>
                <div class="flex-1" style="background: url('{{ asset('img/svg/pattern-1.svg') }}' no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-2 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <div class="row">
                            {{-- <div class="col-xl-12">
                                <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                                    Pendaftaran Akun!
                                    <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60 hidden-sm-down">
                                        Pendaftaran Akun untuk Pelaporan Realisasi Wajib Tanam-Produksi Bawang Putih bagi Pelaku Usaha.
                                        <br>Lengkapi kolom-kolom isin di bawah untuk mendaftar.
                                    </small>
                                </h2>
                            </div> --}}
                            <div class="col-xl-12 ml-auto mr-auto">
                                <div class="card p-4 rounded-plus bg-faded">
                                    <div class="alert alert-danger">
                                        <div class="d-flex flex-start w-100">
                                            <div class="mr-2 hidden-md-down">
                                                <span class="icon-stack icon-stack-lg">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-danger-500"></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-danger-300 fa-flip-vertical"></i>
                                                    <i class="fas fa-exclamation icon-stack-1x opacity-100 color-white"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-fill">
                                                <div class="flex-fill">
                                                    <span class="h5">PERHATIAN</span>
                                                    <p>
                                                        Pendaftaran ini hanya diperuntukkan bagi Pelaku Usaha yang akan melakukan pelaporan realisasi tanam-produksi untuk RIPH periode 2021 dan sebelumnya. Bagi Anda Pemegang RIPH periode 2022 dan setelahnya, silahkan gunakan Tautan ini (<a href="/">link</a>).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div name="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2" >
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                                    <img src="{{ asset('img/avatars/farmer.png') }}" class="img-thumbnail rounded-circle shadow-2" alt="">
                                                                    <h5 class="mb-0 fw-700 text-center mt-3 mb-3">
                                                                        Foto Anda
                                                                    </h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="firstname">Ganti foto</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" name="assetImage" aria-describedby="assetImage" value="">
                                                                        <label class="custom-file-label" for="assetImage"></label>
                                                                    </div>
                                                                    <span class="help-block">Klik browse untuk memilih file</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="panel-content">
                                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                                    <img src="{{ asset('img/logo-big.png') }}" class="img-thumbnail rounded-circle shadow-2" alt="">
                                                                    <h5 class="mb-0 fw-700 text-center mt-3 mb-3">
                                                                        Logo Perusahaan
                                                                    </h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="firstname">Ganti Logo Perusahaan</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" name="assetImage" aria-describedby="assetImage" value="">
                                                                        <label class="custom-file-label" for="assetImage"></label>
                                                                    </div>
                                                                    <span class="help-block">Klik browse untuk mengganti logo</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div name="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                                                    <div class="panel-hdr">
                                                        <h2>
                                                            Informasi Biodata <span class="fw-300"></span>
                                                        </h2>
                                                        
                                                    </div>
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="first_name">Nama Depan dan Belakang <span class="text-danger">*</span></label>
                                                                <div class="col-6 pr-1">
                                                                    <input type="text" name="first_name"  class="form-control" placeholder="Nama Depan" required>
                                                                    <div class="invalid-feedback">Nama Depan harus diisi.</div>
                                                                    {{-- @if($errors->has('first_name'))
                                                                        <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                                                                    @endif --}}
                                                                    
                                                                        
                                                                </div>
                                                                <div class="col-6 pl-1">
                                                                    <input type="text" name="last_name"  class="form-control" placeholder="Nama Belakang" required>
                                                                    <div class="invalid-feedback">Nama belakang harus diisi.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-12 form-label" for="email">Email <span class="text-danger">*</span></label>
                                                                <div class="col-lg-12">
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    {{-- @if($errors->has('email'))
                                                                        <div class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></div>
                                                                    @endif
                                                                    <div class="help-block">Gunakan Email Perusahaan</div> --}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-12 form-label" for="mobile_phone">No. Handphone <span class="text-danger">*</span></label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="mobile_phone" class="form-control" placeholder="No. Handphone" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                    <div class="help-block">Jangan menggunakan no. pribadi.</div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="fix_phone" class="form-control" placeholder="No. Telp">
                                                                    <div class="help-block">No. Telp Kantor</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div name="panel-2" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                                                    <div class="panel-hdr">
                                                        <h2>
                                                            Informasi Perusahaan <span class="fw-300"></span>
                                                        </h2>
                                                        
                                                    </div>
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="company_name">Nama Perusahaan <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" name="company_name" class="form-control" placeholder="Nama Perusahaan" required>
                                                                    <div class="invalid-feedback">Nama perusahaan belum diisi.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="direktur_name">Nama Direktur <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" name="direktur_name" class="form-control" placeholder="Nama Direktur/Penanggungjawab Perusahaan" required>
                                                                    <div class="invalid-feedback">Nama direktur belum diisi.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="npwp_company">Nomor Pokok Wajib Pajak (NPWP) <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" name="npwp_company" class="form-control" placeholder="Nomor Pokok Wajib Pajak (NPWP) Perusahaan" required>
                                                                    <div class="invalid-feedback">NPWP harus diisi.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="nib_company">Nomor Induk Berusaha (NIB) <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" name="nib_company" class="form-control" placeholder="Nomor Induk Berusaha" required>
                                                                    <div class="invalid-feedback">NIB harus diisi.</div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="address_company">Alamat  <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <textarea type="text" name="address_company" class="form-control" placeholder="Alamat" rows="3" required></textarea>
                                                                    <div class="invalid-feedback">Alamat belumm diisi.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="provinsi">Provinsi <span class="text-danger">*</span></label>
                                                                    <select class="select2-prov form-control w-100" name="provinsi" required>
                                                                        <optgroup label="Provinsi">
                                                                            <option>Prov. Aceh</option>
                                                                            <option>Prov. DKI Jakarta</option>
                                                                            <option>Prov. Jawa Barat</option>
                                                                            <option>Prov. Jawa Tengah</option>
                                                                            <option>Prov. DI Yogyakarta</option>
                                                                            <option>Prov. Jawa Timur</option>
                                                                        </optgroup>
                                                                    </select>
                                                                    <div class="invalid-feedback">Pilih provisi</div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                                                                    <select class="select2-kab form-control w-100" name="kabupaten" required>
                                                                        <option>Kab. Bandung</option>
                                                                        <option>Kab. Garut</option>
                                                                        <option>Kab. Wonosobo</option>
                                                                        <option>Kab. Temanggung</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">Pilih kabupaten.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                                                    <select class="select2-kec form-control w-100" name="kecamatan" required>
                                                                        <option>kec. Bandung</option>
                                                                        <option>kec. Garut</option>
                                                                        <option>kec. Wonosobo</option>
                                                                        <option>kec. Temanggung</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">Pilih kecamatan.</div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="desa">Desa <span class="text-danger">*</span></label>
                                                                    <select class="select2-des form-control w-100" name="desa" required>
                                                                        <option>Desa Bandung</option>
                                                                        <option>Desa Garut</option>
                                                                        <option>Desa Wonosobo</option>
                                                                        <option>Desa Temanggung</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">Pilih Desa</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div name="panel-3" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                                                    <div class="panel-hdr">
                                                        <h2>
                                                            Berkas-berkas <span class="fw-300"></span>
                                                        </h2>
                                                        
                                                    </div>
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="form-group">
                                                                <label class="form-label" for="ktp">ID Card/KTP</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="ktp" aria-describedby="ktp" value="" required>
                                                                    <label class="custom-file-label" for="ktp"></label>
                                                                </div>
                                                                <div class="invalid-feedback">KTP harus diunggah</div>
                                                                <span class="help-block">Unggah foto KTP</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="assignment">Assignment/Surat Tugas</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="assignment" aria-describedby="assignment" value="" required>
                                                                    <label class="custom-file-label" for="assignment"></label>
                                                                </div>
                                                                <div class="invalid-feedback">Surat tugas harus diunggah </div>
                                                                <span class="help-block">Unggah surat tugas</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div name="panel-4" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                                                    <div class="panel-hdr">
                                                        <h2>
                                                            Credentials <span class="fw-300"></span>
                                                        </h2>
                                                        
                                                    </div>
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="form-group row">
                                                                <label class="col-lg-12 form-label" for="username">Username<span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" name="username" class="form-control" placeholder="username" required>
                                                                    <div class="invalid-feedback">Username harus diisi.</div>
                                                                    <div class="help-block">tidak boleh mengandung spasi dan tanda baca</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-12 form-label" for="password">Password<span class="text-danger">*</span></label>
                                                                <div class="col-md-6 pr-1">
                                                                    <input type="password" name="password"  class="form-control" placeholder="password" required>
                                                                    <div class="invalid-feedback">Password harus diisi.</div>
                                                                </div>
                                                                <div class="col-md-6 pr-1">
                                                                    <input type="password" name="password_confirmation"  class="form-control" placeholder="password konfirmasi" required>
                                                                    <div class="invalid-feedback">Konfirmasi password anda.</div>
                                                                </div>
                                                                <div class="col-lg-12 help-block">password harus 8-20 karakter</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div name="panel-5">
                                            <div class="form-group demo">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="terms" required>
                                                    <label class="custom-control-label" for="terms"> Kami menyatakan bahwa data yang kami berikan adalah benar dan dapat dipertanggungjawabkan.</label>
                                                    <div class="invalid-feedback">Anda belum memberikan pernyataan</div>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="newsletter" required>
                                                    <label class="custom-control-label" for="newsletter">Kami setuju dengan syarat dan ketentuan yang diberlakukan</label>
                                                    <div class="invalid-feedback">Anda belum memberikan persetujuan.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-4 ml-auto text-right">
                                                <button name="js-login-btn" type="submit" class="btn btn-block btn-danger btn-sm mt-3">Daftar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                        2022 © Direktorat Sayuran dan Tanaman Obat - Direktorat Jenderal Hortikultura by&nbsp;<a href='#' class='text-white opacity-40 fw-500' title='web application developer' target='_blank'>rebrandz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Smartadmin core -->
    <script src="{{ asset('js/vendors.bundle.js') }}"></script>
    <script src="{{ asset('js/app.bundle.js') }}"></script>
    <!-- Smartadmin plugin -->
    <script src="{{ asset('js/smartadmin/datagrid/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/moment/moment.min.js') }}"></script>
    <script src="{{ asset('js/smartadmin/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/smartadmin/formplugins/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('js/smartadmin/formplugins/select2/select2.bundle.js') }}"></script>
    <script src="{{ asset('js/smartadmin/formplugins/summernote/summernote.js') }}"></script>
    <!-- Smartadmin misc -->
    <script src="{{ asset('js/miscellaneous/nestable/nestable.js') }}"></script>
    <!-- smartadmin statistics -->
    <script src="{{ asset('js/smartadmin/statistics/c3/c3.js') }}"></script>
    <script src="{{ asset('js/smartadmin/statistics/chartist/chartist.js') }}"></script>
    <script src="{{ asset('js/smartadmin/statistics/chartjs/chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/smartadmin/statistics/d3/d3.js') }}"></script>
    <script src="{{ asset('js/smartadmin/statistics/echart/echarts.min.js') }}"></script>
    <script src="{{ asset('js/smartadmin/statistics/easypiechart/easypiechart.bundle.js') }}"></script>
    <script src="{{ asset('js/smartadmin/statistics/sparkline/sparkline.bundle.js') }}"></script>
    <script src="{{ asset('js/smartadmin/statistics/flot/flot.bundle.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js.map"></script>


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
</body>

</html>