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

<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>
<?= !empty($error) ? $error : null ?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>form/insert" enctype="multipart/form-data" onsubmit="return cekform(); ">
	<div class="control-group">
	<label class="control-label">Nama Lengkap</label>
	<div class="controls">
		<input type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" class="span5" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.\',',this)">	
	</div>	
	</div>
	
	<div class="control-group">
	<label class="control-label">Jenis Kelamin</label>
	<div class="controls">
				 <select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" class="span5" required="">             
             <option>-- jenis kelamin --</option>
             <option value="laki laki">laki laki</option>
             <option value="perempuan">perempuan</option>
			 </select>
	</div>	
	</div>
	<div class="control-group">
	<label class="control-label">Agama</label>
	<div class="controls">
				 <select type="text" class="form-control" name="agama" id="agama" class="span5" required="">             
             <option>-- Agama --</option>
             <option value="islam">islam</option>
             <option value="kristen">kristen</option>
             <option value="hindu">hindu</option>
             <option value="budha">budha</option>
             <option value="konghucu">konghucu</option>
			 </select>
	</div>	
	</div>
	<div class="control-group">
	<label class="control-label">Tanggal lahir</label>
	<div class="controls">
	<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"  class="span5" required>	</div>	
	</div>
	
	<div class="control-group">
	<label class="control-label">Asal Daerah</label>
	<div class="controls">
		<input type="text" name="nama_belakang" id="nama_belakan" placeholder="Nama Belakang" class="span5">
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Asal Sekolah</label>
	<div class="controls">
		<input type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" class="span5">
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">No HP</label>
	<div class="controls">
		<input type="text" name="nohp" id="nohp" placeholder="No HP" class="span5">	
	</div>	
	</div>
	
	<div class="control-group">
	<label class="control-label">Instagram</label>
	<div class="controls">
		<input type="text" name="instagram" id="instagram" placeholder="No HP" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Email</label>
	<div class="controls">
		<input type="email" name="email" id="email" placeholder="contoh: fikihfirmansyah43@gmail.com" class="span5" required="">
	</div>	
	</div>	

	<div class="control-group">
	<label class="control-label">Password</label>
	<div class="controls">
		<input type="text" name="pass_apl" id="pass_apl" placeholder="Password Aplikasi" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Foto</label>
	<div class="controls">
		<input type="file" name="gambar" id="gambar" placeholder="" class="span5">	
	</div>	
	</div>		

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
		<button type="submit" name="submit" class="btn btn-primary btn-small">simpan</button>
		<a a href="<?php echo base_url(); ?>form" class="btn btn-primary btn-small">tutup</a>
	</div>
</form>