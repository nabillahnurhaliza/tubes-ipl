<?php

$koneksi=mysqli_connect("localhost", "root", "", "dbadministrasita") or die ("Gagal Koneksi Database");
echo "";

?>
<html>
	<head>
        <meta charset="utf-8">
        <title>Daftar Peserta TA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" href="Foto Home/unajni.png">
		<style>
			body{
				background-color: lightblue;
			}
			h1{
				font-family: 'Fredoka One', cursive;
				font-size: 70px;
				color: grey;
				text-shadow: 3px 3px #565656;
				margin-left: 30px;
			}
			table{
				font-family: 'Fredoka One', cursive;
				padding: 5px;
				margin-left: 30px;
				background-color: white;
				font-size: 17px;
				color: grey;
				border-collapse: collapse;
			}
			table tr:hover {
				background-color: grey;
				color: white;
			}
			button{
				font-family: 'Fredoka One', cursive;
				margin-left: 30px;
				padding: 10px 20px;
				font-size: 20px;
			}
			a{
				text-decoration: none;
				color: lightpink;
			}
			a:hover{
				text-decoration: none;
				color: #FA8072;
			}
			p, ul{
				margin-left: 30px;
				color: grey;
			}
		</style>
	</head>
	<body>
		<center>
		<h1>Daftar Peserta TA</h1>
		<table border="3" cellpadding="8">
			<tr>
				<th>No. Pendaftaran</th>
				<th>NIM Mahasiswa</th>
				<th>NID Dosen Pembimbing</th>
				<th>Tanggal Pendaftaran</th>
				<th colspan='2'>Action</th>
			</tr>
			<?php
				$query = "select * from pendaftaranta";
				$data = mysqli_query($koneksi,$query) or
				die("Gagal query:".$query);
			?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["noDaftar"];?></td>
				<td><?php echo $v["nimMhsw"];?></td>
				<td><?php echo $v["nidDosBing"];?></td>
				<td><?php echo $v["tglDaftar"];?></td>
				<td><a href="aksihapusPendaftarTA.php?noDaftar=<?php echo $v["noDaftar"];?>">Hapus</a></td>
				<td><a href="updatePendaftarTA.php?noDaftar=<?php echo $v["noDaftar"];?>">Edit</a></td>
			</tr>
			<?php endwhile;?>
		</table>
		<br><button><a href="tambahPendaftarTA.php">Tambah Data</a></button>
	</center>
	</body>
</html>