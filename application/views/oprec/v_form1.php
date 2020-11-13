<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Form Pendaftran| Forum Share File & Tanya Jawab</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css-form/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-form/css/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css-form/creative.min.css">
    <link rel="shortcut icon" type="image/ico" href="<?= base_url(); ?>/assets/img/logo.png"/>
    <style>
      
    </style>
    <script language="javascript">
        function getkey(e)
        {
        if (window.event)
           return window.event.keyCode;
        else if (e)
           return e.which;
        else
           return null;
        }
        function goodchars(e, goods, field)
        {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
         
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
         
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
           return true;
            
        if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
        // else return false
        return false;
        }
        </script>
  </head>
  <body class="bg-info" >
    
    

      <header>
        <div class=" bg-info">
            <div class="container mt-2">
                <div class="row">
                    <div class="col">
                        <center><img src="<?= base_url(); ?>/assets/img/logo.png" style="width: 18rem;"></center>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-2">
      <h3 class="text-center text-white"><b>SELAMAT DATANG DI FORM PENDAFTARAN TRYOUT ONLINE<br>FORUM SHARE FILE & TANYA JAWAB</b></h3><center><span  class="form-text text-white"><u> Supported By <a href="http://chanofficial.my.id"  class="text-white">Chanofficial</u></a></span></center><br><br>  
      <center><?php echo $this->session->flashdata('gagal'); ?></center><br/>
      <form class="form-horizontal" method="POST" action="<?php echo base_url();?>form/insertform" enctype="multipart/form-data">

        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Nama Lengkap :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_depan" id="nama_depan"  placeholder="Contoh: Fajar Rivaldi Chan " class="span5" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.\',',this)" required>
          </div>
        </div>
		<div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Jenis Kelamin :</label>
          <div class="col-sm-10">
		         <tr>
                   <text class="form-text text-white"> <td><input type="radio" name="jenis_kelamin" value="laki laki" checked ="checked"> Laki Laki</td>
                </tr>
                <tr>
                    <td><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</td></p>
                </tr>

          </div>
        </div>
		
		 <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Tanggal Lahir :</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"  class="span5" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Asal Daerah :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_belakang" id="nama_belakang"  placeholder="Contoh: Medan" class="span5" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.\',',this)" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Asal Sekolah :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Contoh: Fasilkom Universitas Indonesia" class="span5" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">No HP/WA :</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="nohp" id="nohp"  placeholder="Contoh: 0895611024559" class="span5" onKeyPress="return goodchars(event,'0123456789',this)" required>    
          </div>
        </div>
		
		<div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Instagram :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="instagram" id="instagram"  placeholder="Contoh: @fajar.chaniago_" class="span5" required>    
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Email :</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" maxlength="100" minlength="5" placeholder="Contoh: fajarrivaldi2015@gmail.com" class="span5" required>
            <small class="form-text text-white">
              *Email digunakan sebagai username untuk login ke aplikasi tryout, mohon gunakan email aktif.
            </small>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Buat Password :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pass_apl" id="pass_apl"  maxlength="100" minlength="5" placeholder="contoh: masukptn2020" class="span5" required>  
            <small class="form-text text-white">
              *Password digunakan untuk login ke aplikasi tryout, isi minimal 6 huruf atau angka. mohon untuk diingat.
            </small>
          </div>
        </div>  

        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-white">Upload Foto :</label>
          <div class="col-sm-10">
            <div class="controls">
              <input type="file" name="gambar" id="gambar" placeholder="Browse" class="span5" required>  
              <small class="form-text text-white">
              *Upload Foto dirimu. latar  bebas, Ukuran Gambar max 2MB. Format gbr jpg, jpeg atau png.
            </small>

            </div>
          </div>
        </div>      

		<div class="form-group row">
         
          <div class="col-sm-12">
		 <text class="form-text text-white"><input type="checkbox" name="checkbox" class="span5"> Saya Telah Mengisi Form dengan data sebenarnya, dan menyetujui peraturan yang ada.</input></p>
          </div>
        </div>
		
        <div>
        <button type="submit" class="btn btn-danger" onclick="if(!this.form.checkbox.checked){alert('Kamu harus menyetuhui persyaratan pendaftaran');return false}">DAFTAR</button><br/><br/>
         </div>
		 <p class="form-text text-white">NB. Apabila ada Kendala saat pengisian form pendaftaran, hub whatsapp:
		 <a href="https://wa.me/0895611024559" class="text-white"><u>0895611024559 (Fajar)</u></a> </p>
       </form>

    </div>

    <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

  </div>
  <!-- Footer Elements -->

 

</footer>
  </body>
</html>
