<?php
	$koneksi=mysqli_connect("localhost","root","","dbadministrasita") or die ("Gagal Koneksi Database");
	$kodeNilai=$_GET['kodeNilai'];
	$query="select * from penilaianta where kodeNilai='$kodeNilai'";
	$data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query);
	$sql=mysqli_fetch_array($data);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran TA</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" href="Foto Home/unajni.png">
        <style>
            h1{
                font-family: mungil;
                text-align: center;
                text-shadow: 2px 2px white;
            }
        
            p{
                font-family: mungil;
            }
            fieldset{
                font-family: mungil;
                background-color: rgb(215, 210, 210);
                margin: 30px 150px;
                padding: 20px 50px;
                text-shadow: 1px 1px white;
            }
            .warnalink{
                color: rgb(125, 161, 205);
                }
            .warnalink:hover{
                color: rgb(82, 120, 168);
            }
            input, textarea, select{
                border: 2px solid rgb(125, 161, 205);
                border-radius: 4px;
            }
        </style>
    </head>
	<body> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <img src="Foto Home/unajni.png" width="50"> <br>
                <div class="juduls"><a id="Unjani" class="navbar-brand" href="tampilPenilaianTA.php">⬅ Nilai TA</a></div>
            </div>
        </nav>
        <fieldset>
            <legend><h1>Ubah Nilai</h1></legend>
                <table>
                    <form action="aksiupdatePenilaianTA.php" method="post">
                    <tr>
                        <td>Kode Nilai</td>
                        <td>:</td>
                        <td><input type="text" name="kodeNilai" readonly value="<?php echo $sql['kodeNilai'];?>"/></td>
                    </tr>
                    <tr>
                        <td>NIM Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nimMhsw" readonly value="<?php echo $sql['nimMhsw'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Nilai Rata-Rata</td>
                        <td>:</td>
                        <td><input type="text" name="rerataNilai" readonly value="<?php echo $sql['rerataNilai'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Nilai Mutu</td>
                        <td>:</td>
                        <td><input type="text" name="mutuNilai" readonly value="<?php echo $sql['mutuNilai'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Nilai Pembimbing 1</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiPembimbing1" value="<?php echo $sql['nilaiPembimbing1'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Nilai Pembimbing 2</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiPembimbing2" value="<?php echo $sql['nilaiPembimbing2'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Nilai Penguji</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiPenguji" value="<?php echo $sql['nilaiPenguji'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Nilai Koordinator TA</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiKoordinator" value="<?php echo $sql['nilaiKoordinator'];?>"/></td>
                    </tr> 
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"/></td>
                        <td></td>
                        <td></td>
                    </tr>    
                    </form> 
                </table>
        </fieldset>
    <hr size="8" style="color: rgb(82, 120, 168)">
    <center>
    <p>Untuk info lebih lanjut, silahkan <a href="contact.html" target="_blank" class="warnalink">hubungi kami.</a></p>
    </center>
</body>
</html>