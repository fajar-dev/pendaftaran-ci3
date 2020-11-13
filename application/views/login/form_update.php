<script type="text/javascript">
	function cekform()
	{
		if(!$("#nama_lengkap").val())
		{
			alert('nama tidak boleh kosong')
			$("#nama_lengkap").focus()
			return false;
		}

		if(!$("#username").val())
		{
			alert('username tidak boleh kosong')
			$("#username").focus()
			return false;
		}

		if(!$("#password").val())
		{
			alert('password tidak boleh kosong')
			$("#password").focus()
			return false;
		}

		if(!$("#repeat_password").val())
		{
			alert('Repeat password tidak boleh kosong')
			$("#repeat_password").focus()
			return false;
		}

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

<?= validation_errors(); ?>
<?php echo $this->session->flashdata('sukses'); ?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>login/update_data/<?= $data->id_user ?>" enctype="multipart/form-data" onsubmit="return cekform(); ">
	<div class="control-group">
	<label class="control-label">Nama Lengkap</label>
	<div class="controls">
		<input type="text" name="nama_lengkap" id="nama_lengkap" minlength="3" value='<?= $data->nama_lengkap ?>' placeholder="Nama" class="span5">
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Username</label>
	<div class="controls">
		<input type="text" name="username" id="username" minlength="4" value='<?= $data->username ?>' placeholder="username" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">password</label>
	<div class="controls">
		<input type="password" name="password" id="password" minlength="8" value='' placeholder="password" class="span5">	
	</div>	
	</div>

	<div class="control-group">
	<label class="control-label">Repeat Password</label>
	<div class="controls">
		<input type="password" name="repeat_password" id="repeat_password" minlength="8" value='' placeholder="Ulangi Password" class="span5">
	</div>	
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
		<button type="submit" class="btn btn-primary btn-small">Update Data</button>
		<a a href="<?php echo base_url(); ?>login/admin" class="btn btn-primary btn-small">tutup</a>
	</div>
</form>