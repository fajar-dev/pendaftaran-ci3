<head>
	<meta charset="utf-8" />
		<title>cetak data</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<script>
		window.print();
		</script>

</head>
<body>
	<h1 style="text-align: center; padding-top: 30px; padding-bottom: 30px;"> DATA PENDAFTAR </h1>

	<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
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
		</tr>
	</thead>

	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach($data as $key => $value) { 
		?>
			<th><?= $no++ ?></th>
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
		</tr>
		<?php } ?>
	</tbody>
</table>
</body>