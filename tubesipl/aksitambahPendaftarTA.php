<?php
	$koneksi=mysqli_connect("localhost","root","","dbadministrasita") or die("Gagal Koneksi Database");
	$noDaftar=$_POST['noDaftar'];
	$nimMhsw=$_POST['nimMhsw'];
	$nidDosBing=$_POST['nidDosBing'];
	$tglDaftar=$_POST['tglDaftar'];
	$query="insert into pendaftaranta values('$noDaftar','$nimMhsw','$nidDosBing','$tglDaftar')";
	$sql=mysqli_query($koneksi,$query) or die("gagal input".$query);
	header("location:tampilPendaftarTA.php");
?>