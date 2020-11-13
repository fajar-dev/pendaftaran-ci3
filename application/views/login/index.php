<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null,
				  { "bSortable": false }
				] } );
				
			})
		</script>

	<p><a href="<?php echo base_url(); ?>login/tambah" class="btn btn-primary btn-small">tambah user</a></p>
	<?php echo $this->session->flashdata('sukses'); ?>
	<table id="sample-table-2" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Role</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach($data as $key => $value) { 
		?>
			<th><?= $no++ ?></th>
			<th><?= $value->nama_lengkap ?></th>
			<th><?= $value->username ?></th>
			<th><?= $value->role ?></th>
			<th>
			<a href="<?php echo base_url(); ?>login/update_view/<?= $value->id_user ?>" class="btn btn-warning btn-small">Edit</a>  
			<a href="<?php echo base_url(); ?>login/delete_data/<?= $value->id_user ?>" class="btn btn-danger btn-small"  onclick="return confirm('Anda ingin menghapus User ini bro ???');">Hapus</a>
			</th>
		</tr>
		<?php } ?>
	</tbody>
</table>