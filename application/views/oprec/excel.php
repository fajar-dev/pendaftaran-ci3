<?php 
        // fungsi header dengan mengirimkan raw data excel
        header("Content-type: application/vnd-ms-excel");
         
        // membuat nama file ekspor "export-to-excel.xls"
        header("Content-Disposition: attachment; filename=peserta.xls");
		 
		  
		?>
		<table border="1">
	
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
	

	
		<tr>
		<?php
		$no = 1;
		foreach($data as $key => $value) { 
		?>
			<td><?= $no++ ?></td>
			<td><?= $value->nama_depan ?></td>
			<td><?= $value->jenis_kelamin ?></td>
			<td><?= $value->agama ?></td>
			<td><?= $value->tanggal_lahir ?></td>
			<td><?= $value->asal ?></td>
			<td><?= $value->asal_sekolah?></td>
			<td><?= $value->nohp ?></td>
			<td><?= $value->instagram ?></td>
			<td><?= $value->email ?></td>
			<td><?= $value->pass_apl ?></td>
		</tr>
		<?php } ?>
	</table>