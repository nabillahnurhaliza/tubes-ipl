<?php
	$koneksi=mysqli_connect("localhost","root","","dbadministrasita") or die("Gagal Koneksi Database");
	$noDaftar=$_GET['noDaftar'];
	$query="delete from pendaftaranta where noDaftar='$noDaftar'";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:tampilPendaftarTA.php");
?>