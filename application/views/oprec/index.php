<!--<?php if($this->session->userdata('role')=='admin')
							{
							  ?>
				<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
				  { "bSortable": false }
				] } );
				
			})
		</script>			
			<?php } ?>

<?php if($this->session->userdata('role')=='user')
							{
							  ?>
				<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, null, null, null, null, null,
				  { "bSortable": false }
				] } );
				
			})
		</script>			
			<?php } ?>	-->		

<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, null,
				  { "bSortable": false }
				] } );
				
			})
		</script>


	<p><a href="<?php echo base_url(); ?>form/insert" class="btn btn-primary btn-small">Tambah</a>
		<a href="<?php echo base_url(); ?>form/cetak" class="btn btn-primary btn-small"  target="_blank">Cetak Data</a>
		<a href="<?php echo base_url(); ?>form/export" class="btn btn-primary btn-small">Export Excel</a>
	</p>
	
	<?php echo $this->session->flashdata('sukses'); ?>
	<table id="sample-table-2" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th>No</th>
			<th>action</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Tanggal Lahir</th>
			<th>Asal daerah</th>
			<th>Asal Sekolah</th>
			<th>No HP</th>
			<th>Instagram</th>
			<th>Email</th>
			<th>Password</th>
			<th>Tgl Daftar</th>
			<th>Foto</th>
		</tr>
	</thead>

	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach($data as $key => $value) { 
		?>
			<th><?= $no++ ?></th>
			<th>
				<?php if($this->session->userdata('role')=='admin')
							{

							  ?>
			<a a href="<?= base_url() ?>form/deletedata/<?= $value->id; ?>" class="btn btn-danger btn-small" onclick="return confirm('Anda ingin menghapus data ini bro ???');">delete</a>
			<a a href="<?= base_url() ?>form/update/<?= $value->id; ?>" class="btn btn-info btn-small">update</a>
				<?php } ?>
			<a a href="<?= base_url() ?>form/print/<?= $value->id; ?>" class="btn btn-success btn-small" target="_blank" >print</a>
			</th>
			<th><?= $value->nama_depan ?></th>
			<th><?= $value->jenis_kelamin ?></th>
			<th><?= $value->agama ?></th>
			<th><?= $value->tanggal_lahir ?></th>
			<th><?= $value->asal ?></th>
			<th><?= $value->asal_sekolah?></th>
			<th><?= $value->nohp ?></th>
			<th><?= $value->instagram ?></th>
			<th><?= $value->email ?></th>
			<th><?= $value->pass_apl ?></th>
			<th><?= $value->tgl_daftar ?></th>
			<th><a a href="<?= base_url() ?>assets/img/data/<?= $value->gambar ?>" class="btn btn-warning btn-small">Lihat</a></th>			
		</tr>
		<?php } ?>
	</tbody>
</table>