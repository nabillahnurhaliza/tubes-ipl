<?php
	$koneksi=mysqli_connect("localhost","root","","dbadministrasita") or die("Gagal Koneksi Database");
	$noDaftar=$_POST['noDaftar'];
	$nimMhsw=$_POST['nimMhsw'];
	$nidDosBing=$_POST['nidDosBing'];
	$tglDaftar=$_POST['tglDaftar'];
	$query="update pendaftaranta set nimMhsw='$nimMhsw',
	nidDosBing='$nidDosBing', tglDaftar='$tglDaftar' where noDaftar='$noDaftar'";
	$sql=mysqli_query($koneksi,$query) or die("gagal ubah".$query); header("location:tampilPendaftarTA.php"); 
?>