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
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>form/update_data/<?= $data->id ?>" enctype="multipart/form-data" onsubmit="return cekform(); ">
	<div class="control-group">
	<label class="control-label">Nama Lengkap</label>
	<div class="controls">
		<input type="text" name="nama_depan" id="nama_depan" placeholder="" value="<?= $data->nama_depan ?>" class="span5" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.\',',this)">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Jenis Kelamin</label>
	<div class="controls">
		<input type="text" name="nama_belakang" id="nama_belakang" placeholder="" value="<?= $data->jenis_kelamin ?>" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Agama</label>
	<div class="controls">
		<input type="text" name="agama" id="agama" placeholder="" value="<?= $data->agama ?>" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Tanggal Lahir</label>
	<div class="controls">
		<input type="text" name="nama_belakang" id="nama_belakang" placeholder="" value="<?= $data->tanggal_lahir ?>" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Asal Daerah</label>
	<div class="controls">
		<input type="text" name="nama_belakang" id="nama_belakang" placeholder="" value="<?= $data->asal ?>" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Asal Sekolah</label>
	<div class="controls">
		<input type="text" name="asal_sekolah" id="asal_sekolah" placeholder="" value="<?= $data->asal_sekolah ?>" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">No HP</label>
	<div class="controls">
		<input type="text" name="nohp" id="nohp" placeholder="" value="<?= $data->nohp ?>" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Instagram</label>
	<div class="controls">
		<input type="text" name="nama_belakang" id="nama_belakang" placeholder="" value="<?= $data->instagram ?>" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Email</label>
	<div class="controls">
		<input type="email" name="email" id="email" value="<?= $data->email ?>" placeholder="" class="span5" required="">
	</div>	
	</div>	

	<div class="control-group">
	<label class="control-label">Password</label>
	<div class="controls">
		<input type="text" name="pass_apl" id="pass_apl" placeholder="" value="<?= $data->pass_apl ?>" class="span5">	
	</div>	
	</div>	

	<div class="control-group">
	<label class="control-label">foto</label>
	<div class="controls">
		<input type="file" name="gambar" id="gambar" placeholder="" value="<?= $data->gambar ?>" class="span5">	
	</div>	
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
		<button type="submit" name="submit" class="btn btn-primary btn-small">update</button>
		<a a href="<?php echo base_url(); ?>form" class="btn btn-primary btn-small">tutup</a>
	</div>
</form>