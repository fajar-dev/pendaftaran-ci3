<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Form Pendaftran| Forum Share File & Tanya Jawab</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/assets/css-form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url(); ?>/assets/css-form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/assets/css-form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url(); ?>assets/css-form/css/main.css" rel="stylesheet" media="all">
    <style>
        .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

</style>
</head>

<body>
    <div class="page-wrapper bg-gra-04 p-t-45 p-b-50">
        <div class="wrapper wrapper--w1000">
            <div class="card card-5">
                <div class="card-heading">
                    <h4 class="title">REGISTRASI TRYOUT ONLINE<br>Mr. EduBot</h4>
                </div>
                <p style="text-align: center; padding-top: 10px;"><b><u> Supported By <a href="http://chanofficial.my.id" style="color: black;">Chanofficial</u></b></a></p>
                <div class="card-body">
                    <div class="card-heading1">
                    <h4 class="subtitle">Biodata</h4>
                </div>
                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>form/insertform" enctype="multipart/form-data">
                        <center><h5 style="color:red;"><?php echo $this->session->flashdata('gagal'); ?></h5></center><br/>
						<div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama_depan" id="nama_depan"  placeholder="Nama Lengkap" class="span5" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.\',',this)" required>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="input-group">
                                     <label class="radio-container m-r-55">Laki Laki
                                    <input type="radio" checked="checked" name="jenis_kelamin" value="laki laki" checked ="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Perempuan
                                    <input type="radio" name="jenis_kelamin" value="perempuan">
                                    <span class="checkmark"></span>
                                </label>
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Agama</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="agama">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>islam</option>
                                            <option>kristen</option>
                                            <option>hindu</option>
                                            <option>budha</option>
                                            <option>konghucu</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="tanggal_lahir" id="tanggal_lahir"  class="span5" required>
                                </div>
                            </div>
                        </div>
						<div class="form-row m-b-55">
                            <div class="name">Asal</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nama_belakang" id="nama_belakang"  placeholder="Asal Daerah" class="span5" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.\',',this)" required>
                                            <label class="label--desc">Daerah</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" class="span5" required>
                                            <label class="label--desc">sekolah</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">NO HP/WA</div>
								<div class="value">
										<div class="input-group">
                                            <input class="input--style-5" type="number" name="nohp" id="nohp"  placeholder="NO HP/WA" class="span5" onKeyPress="return goodchars(event,'0123456789',this)" required> 
                                        </div>
                                  </div>
                            </div>
						<div class="form-row">
                            <div class="name">Instagram</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="instagram" id="instagram"  placeholder="Instagram" class="span5" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-row-1">
                             <div class="jancok">
                                <p class="form-text text-white">*Upload foto dengan maxmimal ukuran gambar 2MB. dengan Format gbr jpg, jpeg atau png</p>
                             </div>
                         </div>
                        <div class="form-row m-b-55">
                            <div class="name">Upload Foto</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input type="file" name="gambar" id="gambar" placeholder="Browse" class="span5" required>
                                        <label class="label--desc">screenshot bukti follow instagram @mr.edubot.</small></label>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="card-heading1">
                    <h6 class="subtitle">create account</h6>
                </div>
                <br>
                 <div class="form-row-1">
                            <div class="jancok">
                                <p class="form-text text-white">*Email dan Password digunakan untuk login ke aplikasi Tryout, Isi password minimal 6 karakter huruf atau angka. Mohon untuk diingat !</p>
                             </div>
                         </div>
						<div class="form-row ">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email"  name="email" id="email" maxlength="100" minlength="5" placeholder="Email" class="span5" required>
									
								</div>
                            </div>
                        </div>
						<!--<div class="form-row m-b-55">
                            <div class="name">Buat Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pass_apl" id="pass_apl"  maxlength="100" minlength="5" placeholder="contoh: masukptn2020" class="span5" required>
									<label class="label--desc-1">*Password digunakan untuk login ke aplikasi tryout, isi minimal 6 huruf atau angka. mohon untuk diingat.</small></label>
								</div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">ulangi Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pass_apl" id="pass_apl1"  maxlength="100" minlength="5" placeholder="contoh: masukptn2020" class="span5" required>
                                    <label class="label--desc-1">*Password digunakan untuk login ke aplikasi tryout, isi minimal 6 huruf atau angka. mohon untuk diingat.</small></label>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-row m-b-55">
                            <div class="name">Buat Password</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="pass_apl" id="pass_apl"  maxlength="100" minlength="5" placeholder="contoh: masukptn2020" class="span5" required>
                                            <label class="label--desc">password baru</label>
                                            
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password"  id="pass_apl1"  maxlength="100" minlength="5" placeholder="contoh: masukptn2020" class="span5" required>
                                            <label class="label--desc">ulangi password</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
 <script>  var password = document.getElementById("pass_apl")
  , confirm_password = document.getElementById("pass_apl1");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("password tidak sama");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

                       
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                        <div class="form-row-1">
                            <div class="name">
                                <p class="form-text text-white">NB. Apabila ada Kendala saat pengisian form pendaftaran, hub whatsapp:
                                <a href="https://wa.me/0895611024559" class="text-white"><u>0895611024559 (Fajar)</u></a> </p>
                             </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url(); ?>/assets/css-form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url(); ?>/assets/css-form/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>/assets/css-form/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/css-form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url(); ?>/assets/css-form/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
