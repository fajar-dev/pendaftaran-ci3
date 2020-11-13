<?php 
        // fungsi header dengan mengirimkan raw data excel
        header("Content-type: application/vnd-ms-excel");
         
        // membuat nama file ekspor "export-to-excel.xls"
        header("Content-Disposition: attachment; filename=peserta.xls");
		 
		 include 'echo"';
		  
		  echo"hello world:;
		?>

	<table border="1">
		<tr>
			
			<th>ID</th>
			<th>Nama Lengkap</th>
			<th>jenis kelamin</th>
			<th>tanggal lahir</th>
			<th>Asal daerah</th>
			<th>Asal Sekolah</th>
			<th>No Hp</th>
			<th>instagram</th>
			<th>email</th>
			<th>password</th>
			
			
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","daftar");
 
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from form");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama_depan']; ?></td>
			<td><?php echo $d['jenis_kelamin']; ?></td>
			<td><?php echo $d['tanggal_lahir']; ?></td>
			<td><?php echo $d['asal']; ?></td>
			<td><?php echo $d['asal_sekolah']; ?></td>
			<td><?php echo $d['nohp']; ?></td>
			<td><?php echo $d['instagram']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['pass_apl']; ?></td>
			
		</tr>
		<?php 
		}
		?>
	</table>
