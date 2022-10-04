@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<style>
    
/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
}

#msform fieldset .form-card {
    background: rgb(255, 255, 255);
    border: 0 none;
    border-radius: 10px;
    //box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;

    /*stacking fieldsets above each other*/
    position: relative;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E;
}

#msform input, #msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    //font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0;
}

/*Blue Buttons*/
#msform .action-button {
    width: 130px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px rgb(147, 135, 235);
}

/*Previous Buttons*/
#msform .action-button-previous {
    width: 130px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
}

/*Dropdown List Exp Date*/
select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px;
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue;
}

/*The background card*/
.card {
    z-index: 0;
    border: none;
    border-radius: 10px;
    position: relative;
}

/*FieldSet headings*/
.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
}

#progressbar .active {
    color: #000000;
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative;
}

/*Icons in the ProgressBar*/
#progressbar #school:before {
    font-family: FontAwesome;
    content: "\f0fd";
}

#progressbar #contact:before {
    font-family: FontAwesome;
    content: "\f007";
}

#progressbar #access:before {
    font-family: FontAwesome;
    content: "\f023";
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c";
}

/*ProgressBar before any progress*/
#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: skyblue;
}

/*Imaged Radio Buttons*/
.radio-group {
    position: relative;
    margin-bottom: 25px;
}

.radio {
    display:inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor:pointer;
    margin: 8px 2px; 
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
}

/*Fit image in bootstrap div*/
.fit-image{
    width: 100%;
    object-fit: cover;
}
</style>


<div class="container">
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 text-center p-0 mt-2 mb-4">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Pendaftaran Sekolah</strong></h2>
                <p><h3>Isikan data-data sekolah anda dibawah ini dengan benar</h3></p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" method="POST" action="{{ route('registersch') }}">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="school"><strong>Info Sekolah</strong></li>
                                <li id="contact"><strong>Kontak</strong></li>
                                <li id="access"><strong>Akses</strong></li>
                                <li id="confirm"><strong>Selesai</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title mb-4">Informasi Sekolah</h2>
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="school">Nama Sekolah*</label>
                                            <input type="text" id="schoolname" name="schoolname" placeholder="" required/>
                                        </div>
                                        <div class="col">
                                            <label class="school">NPSN*</label>
                                            <input type="text" id="schoolnpsn" name="schoolnpsn" placeholder="" required/>
                                        </div>
                                    </div>
                                    <label class="school">Alamat*</label>
                                    <input type="text" id="schooladdr" name="schooladdr" placeholder="" required/>
                                    <div class="form-row">   
                                        <div class="col">
                                            <label class="school">Kelurahan</label>
                                            <input type="text" name="schoolkel" placeholder=""/>
                                        </div>
                                        <div class="col">
                                            <label class="school">Kecamatan</label>
                                            <input type="text" id="schoolkec" name="schoolkec" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-row"> 
                                        <div class="col">
                                            <label class="school">Provinsi</label>
                                            <input type="text" id="schoolprov" name="schoolprov" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-row"> 
                                        <div class="col">
                                            <label for="schoolstatus" class="ml-2" style="font-size: 16px">Status :</label> 
                                            <select name="schoolstatus" id="schoolstatus" style="font-size: 16px">
                                                <option value="Swasta">Swasta</option>
                                                <option value="Negeri">Negeri</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="schooljenjang" style="font-size: 16px">Jenjang Pendidikan :</label> 
                                            <select name="schooljenjang" id="schooljenjang" style="font-size: 16px">
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Berikutnya"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title mb-4">Informasi Kontak</h2>
                                    <div class="form-row">
                                        <label class="contact">Nama lengkap*</label>
                                        <input type="text" id="contactname" name="contactname" placeholder="" required/>
                                    </div>
                                    <div class="form-row">
                                        <label class="contact">No Whatsapp*</label>
                                        <input type="text" id="contactwa" name="contactwa" placeholder="" required/>
                                    </div>
                                    <div class="form-row">
                                        <label class="contact">Posisi di sekolah</label>
                                        <input type="text" id="contactjabatan" name="contactjabatan" placeholder=""/>
                                    </div>
                                    <div class="form-row">
                                        <label class="contact">No. telp sekolah*</label>
                                        <input type="text" id="contactphone" name="contactphone" placeholder="" required/>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Sebelumnya"/>
                                <input type="button" name="next" class="next action-button" value="Berikutnya"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title mb-4">Akses</h2>
                                    <div class="form-row">
                                        <label class="access">Nama pengguna*</label>
                                        <input type="text" id="username" name="username" placeholder="" required/>
                                    </div>
                                    <div class="form-row">
                                        <label class="access">Nama login*</label>
                                        <input type="text" id="userlogin" name="userlogin" placeholder="" required/>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label class="access">Password*</label>
                                            <input type="password" id="userpwd" name="userpwd" placeholder="" required/>
                                        </div>
                                    </div>
                                    
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Sebelumnya"/>
                                <input type="button" name="next" class="next action-button" value="Daftar"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Selesai !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="{{ asset("img/success.png") }}" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Pendaftaran anda sudah kami simpan</h5>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="make_register" class="next action-button" value="OK"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function(){
    
        var $validator = $("#msform").validate({
        rules: {
            schoolname: {
                required: true,
                minlength: 3
            },
            schoolnpsn: {
                required: true,
                minlength: 5
            },
            schooladdr: {
                required: true,
                minlength: 3
            },
            contactname: {
                required: true,
                minlength: 3
            },
            contactwa: {
                required: true,
                minlength: 9
            },
            contactphone: {
                required: true,
                minlength: 7
            },
            username: {
                required: true,
                minlength: 3
            },
            userlogin: {
                required: true,
                minlength: 3
            },
            userpwd: {
                required: true,
                minlength: 6
            }
        },
        messages:{
            schoolname:
            {
                required:"Nama sekolah harus diisi !",
                minlength: "minimal {0} karakter"
            },
            schoolnpsn:
            {
                required:"NPSN harus diisi !",
                minlength: "minimal {0} digit"
            },
            schooladdr:
            {
                required:"Alamat harus diisi!",
                minlength: "minimal {0} karakter"
            },
            contactname:
            {
                required:"Nama kontak harus diisi",
                minlength: "minimal {0} karakter"
            },
            contactwa:
            {
                required:"No Whatsapp harus diisi",
                minlength: "minimal {0} karakter"
            },
            contactphone:
            {
                required:"No telp harus diisi",
                minlength: "minimal {0} karakter"    
            },
            username:
            {
                required:"Nama pengguna harus diisi",
                minlength: "minimal {0} karakter"    
            },
            userlogin:
            {
                required:"Nama login harus diisi",
                minlength: "minimal {0} karakter"    
            },
            userpwd:
            {
                required:"Isikan password pilihan",
                minlength: "minimal {0} karakter"    
            }
        }
    });
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        var $valid = $("#msform").valid();
        if (!$valid) {
            $validator.focusInvalid();
            return false;
        }
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    
    
    // $(".submit").click(function(){
    //     return false;
    // })
        
    });
</script>
@endsection