<?php

$koneksi=mysqli_connect("localhost", "root", "", "dbadministrasita") or die ("Gagal Koneksi Database");
echo "";

?>
<html>
	<head>
        <meta charset="utf-8">
        <title>Daftar Peserta TA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" href="Foto Home/logo_company.png">
	</head>
	<body>
		<center>
		<h1>Daftar Peserta TA</h1>
		<table border="3" cellpadding="8">
			<tr>
				<th>Kode Salon</th>
				<th>Nama Salon</th>
				<th>Lokasi</th>
				<th>No. Telp</th>
				<th colspan='2'>Action</th>
			</tr>
			<?php
				$query = "select * from salon";
				$data = mysqli_query($koneksi,$query) or
				die("Gagal query:".$query);
			?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["Kode_Salon"];?></td>
				<td><?php echo $v["Nama_Salon"];?></td>
				<td><?php echo $v["Lokasi"];?></td>
				<td><?php echo $v["No_Telp"];?></td>
				<td><a href="aksi_hapus_salon.php?kode_salon=<?php echo $v["Kode_Salon"];?>">Hapus</a></td>
				<td><a href="formupdate_salon.php?kode_salon=<?php echo $v["Kode_Salon"];?>">Edit</a></td>
			</tr>
			<?php endwhile;?>
		</table>
		<br><button><a href="tambahPendaftarTA.php">Tambah Data</a></button>
	</center>
	</body>
</html>