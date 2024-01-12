<?php
	$koneksi=mysqli_connect("localhost","root","","dbadministrasita") or die("Gagal Koneksi Database");
	$kodeNilai=$_GET['kodeNilai'];
	$query="delete from penilaianta where kodeNilai='$kodeNilai'";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:tampilPenilaianTA.php");
?>