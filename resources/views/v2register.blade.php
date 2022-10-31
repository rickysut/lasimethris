<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Simethris 2021 | Account Registration
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <meta name="description" content="Page Title">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- smartadmin base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/vendors.bundle.css') }}">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/app.bundle.css') }}">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('css/smartadmin/skins/skin-master.css') }}">

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
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
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
                                                        Pendaftaran ini hanya diperuntukkan bagi Pelaku Usaha yang akan melakukan pelaporan realisasi tanam-produksi untuk RIPH periode 2021 dan sebelumnya. Bagi Anda Pemegang RIPH periode 2022 dan setelahnya, silahkan gunakan Tautan ini (link).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="js-login" novalidate="" action="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2" >
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                                    <img src="{{ asset('img/avatars/farmer.png') }}" class="img-thumbnail rounded-circle shadow-2" alt="">
                                                                    <h5 class="mb-0 fw-700 text-center mt-3 mb-3">
                                                                        Your Picture
                                                                    </h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="firstname">Change Your Picture</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="assetImage" aria-describedby="assetImage" value="">
                                                                        <label class="custom-file-label" for="assetImage"></label>
                                                                    </div>
                                                                    <span class="help-block">Some help content goes here</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="panel-content">
                                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                                    <img src="{{ asset('img/logo-big.png') }}" class="img-thumbnail rounded-circle shadow-2" alt="">
                                                                    <h5 class="mb-0 fw-700 text-center mt-3 mb-3">
                                                                        Your Company Logo
                                                                    </h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="firstname">Change Company Logo</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="assetImage" aria-describedby="assetImage" value="">
                                                                        <label class="custom-file-label" for="assetImage"></label>
                                                                    </div>
                                                                    <span class="help-block">Some help content goes here</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                                                    <div class="panel-hdr">
                                                        <h2>
                                                            Contact Information <span class="fw-300"></span>
                                                        </h2>
                                                        
                                                    </div>
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="fname">Your first and last name <span class="text-danger">*</span></label>
                                                                <div class="col-6 pr-1">
                                                                    <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                                <div class="col-6 pl-1">
                                                                    <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-12 form-label" for="fname">Email <span class="text-danger">*</span></label>
                                                                <div class="col-lg-12">
                                                                    <input type="email" id="emailverify" class="form-control" placeholder="Email for verification" required>
                                                                    <div class="invalid-feedback">Please type your correct email address.</div>
                                                                    <div class="help-block">Use your COMPANY EMAIL ADDRESS</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-12 form-label" for="fname">Phone <span class="text-danger">*</span></label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" id="mobile_phone" class="form-control" placeholder="Mobilie phone number" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                    <div class="help-block">Please do not use your own private number.</div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <input type="text" id="landline" class="form-control" placeholder="Land line number">
                                                                    <div class="help-block">Company Phone Number</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="panel-2" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                                                    <div class="panel-hdr">
                                                        <h2>
                                                            Your Company Information <span class="fw-300"></span>
                                                        </h2>
                                                        
                                                    </div>
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="company_name">Company Name <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" id="company_name" class="form-control" placeholder="Company Name" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="nama_direktur">Nama Direktur <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" id="nama_direktur" class="form-control" placeholder="Nama Direktur/Penanggungjawab Perusahaan" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="npwp">Nomor Pokok Wajib Pajak (NPWP) <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" id="fname" class="form-control" placeholder="Nomor Pokok Wajib Pajak (NPWP) Perusahaan" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="nib">Nomor Induk Berusaha (NIB) <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <input type="text" id="nib" class="form-control" placeholder="Nomor Induk Berusaha" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <label class="col-xl-12 form-label" for="address">Company Address <span class="text-danger">*</span></label>
                                                                <div class="col-md-12 pr-1">
                                                                    <textarea type="text" id="address" class="form-control" placeholder="Company Address" rows="3" required></textarea>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="province">Province <span class="text-danger">*</span></label>
                                                                    <select class="select2-prov form-control w-100" id="province" required>
                                                                        <optgroup label="Province">
                                                                            <option>Prov. Aceh</option>
                                                                            <option>Prov. DKI Jakarta</option>
                                                                            <option>Prov. Jawa Barat</option>
                                                                            <option>Prov. Jawa Tengah</option>
                                                                            <option>Prov. DI Yogyakarta</option>
                                                                            <option>Prov. Jawa Timur</option>
                                                                        </optgroup>
                                                                    </select>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                                                                    <select class="select2-kab form-control w-100" id="kabupaten" required>
                                                                        <option>Kab. Bandung</option>
                                                                        <option>Kab. Garut</option>
                                                                        <option>Kab. Wonosobo</option>
                                                                        <option>Kab. Temanggung</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                                                    <select class="select2-kec form-control w-100" id="kecamatan" required>
                                                                        <option>kec. Bandung</option>
                                                                        <option>kec. Garut</option>
                                                                        <option>kec. Wonosobo</option>
                                                                        <option>kec. Temanggung</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="form-label" for="desa">Desa <span class="text-danger">*</span></label>
                                                                    <select class="select2-des form-control w-100" id="desa" required>
                                                                        <option>Desa Bandung</option>
                                                                        <option>Desa Garut</option>
                                                                        <option>Desa Wonosobo</option>
                                                                        <option>Desa Temanggung</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="panel-3" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
                                                    <div class="panel-hdr">
                                                        <h2>
                                                            Files <span class="fw-300"></span>
                                                        </h2>
                                                        
                                                    </div>
                                                    <div class="panel-container show">
                                                        <div class="panel-content">
                                                            <div class="form-group">
                                                                <label class="form-label" for="idcard_file">ID Card/KTP</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="idcard_file" aria-describedby="idcard_file" value="" required>
                                                                    <label class="custom-file-label" for="idcard_file"></label>
                                                                </div>
                                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                                <span class="help-block">Some help content goes here</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="assignment">Assignment/Surat Tugas</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="assignment" aria-describedby="assignment" value="" required>
                                                                    <label class="custom-file-label" for="assignment"></label>
                                                                </div>
                                                                <div class="invalid-feedback">No, you missed this one.</div>
                                                                <span class="help-block">Some help content goes here</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="panel-4" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
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
                                                                    <input type="text" id="username" class="form-control" placeholder="username" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                    <div class="help-block">Your username must not contain spaces, or emoji.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-12 form-label" for="userpassword">Create Username and Password<span class="text-danger">*</span></label>
                                                                <div class="col-md-6 pr-1">
                                                                    <input type="password" id="userpassword" class="form-control" placeholder="password minimum 8 characters" required>
                                                                    <div class="invalid-feedback">No, you missed this one.</div>
                                                                </div>
                                                                <div class="col-md-6 pr-1">
                                                                    <input type="password" id="passwordconfirm" class="form-control" placeholder="confirm your password" required>
                                                                    <div class="invalid-feedback">Sorry, you missed this one.</div>
                                                                </div>
                                                                <div class="col-lg-12 help-block">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="panel-5">
                                            <div class="form-group demo">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="terms" required>
                                                    <label class="custom-control-label" for="terms"> Kami menyatakan bahwa data yang kami berikan adalah benar dan dapat dipertanggungjawabkan.</label>
                                                    <div class="invalid-feedback">Anda belum memberikan pernyataan</div>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="newsletter" required>
                                                    <label class="custom-control-label" for="newsletter">Kami setuju dengan syarat dan ketentuan yang diberlakukan</label>
                                                    <div class="invalid-feedback">Anda belum memberikan persetujuan.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-4 ml-auto text-right">
                                                <button id="js-login-btn" type="submit" class="btn btn-block btn-danger btn-sm mt-3">Daftar</button>
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