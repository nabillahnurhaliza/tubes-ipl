<?php
	$koneksi=mysqli_connect("localhost","root","","dbadministrasita") or die("Gagal Koneksi Database");
	$kodeNilai=$_POST['kodeNilai'];
	$noSeminar=$_POST['noSeminar'];
	$nilaiPembimbing1=$_POST['nilaiPembimbing1'];
	$nilaiPembimbing2=$_POST['nilaiPembimbing2'];
    $nilaiPenguji=$_POST['nilaiPenguji'];
    $nilaiKoordinator=$_POST['nilaiKoordinator'];
    $rerataNilai=$_POST['rerataNilai'];
    $mutuNilai=$_POST['mutuNilai'];
    $nimMhsw=$_POST['nimMhsw'];
    $rerataNilai = ($nilaiPembimbing1 + $nilaiPembimbing2 + $nilaiPenguji + $nilaiKoordinator) / 4;
    if ($rerataNilai > 80) {
        $mutuNilai = 'A';
    } elseif ($rerataNilai >= 75 && $rerataNilai <= 80) {
        $mutuNilai = 'AB';
    } elseif ($rerataNilai >= 70 && $rerataNilai < 75) {
        $mutuNilai = 'B';
    } elseif ($rerataNilai >= 60 && $rerataNilai < 70) {
        $mutuNilai = 'BC';
    } elseif ($rerataNilai >= 50 && $rerataNilai < 60) {
        $mutuNilai = 'C';
    } elseif ($rerataNilai >= 40 && $rerataNilai < 50) {
        $mutuNilai = 'D';
    } else {
        $mutuNilai = 'E';
    }
	$query="update penilaianta set nilaiPembimbing1='$nilaiPembimbing1', nilaiPembimbing2='$nilaiPembimbing2', nilaiPenguji='$nilaiPenguji', nilaiKoordinator='$nilaiKoordinator', rerataNilai='$rerataNilai', mutuNilai='$mutuNilai', nimMhsw='$nimMhsw' where kodeNilai='$kodeNilai'";
	$sql=mysqli_query($koneksi,$query) or die("gagal ubah".$query); header("location:tampilPenilaianTA.php"); 
?>