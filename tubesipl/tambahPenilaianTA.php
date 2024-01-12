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
            <legend><h1>Penilaian TA</h1></legend>
                <table>
                    <form action="aksitambahPenilaianTA.php" method="post">
                    <tr>
                        <td>Urutan Seminar</td>
                        <td>:</td>
                        <td><input type="number" name="noSeminar" placeholder="" required/></td>
                    </tr>
                    <tr>
                        <td>NIM Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nimMhsw" placeholder="NIM Mahasiswa" size="30px" required/></td>
                    </tr>
                    <tr>
                        <td>Nilai Pembimbing 1</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiPembimbing1" placeholder="Masukkan Nilai" size="52px" required/></td>
                    </tr>
                     <tr>
                        <td>Nilai Pembimbing 2</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiPembimbing2" placeholder="Masukkan Nilai" size="52px" required/></td>
                    </tr>
                    <tr>
                        <td>Nilai Penguji</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiPenguji" placeholder="Masukkan Nilai" required></td>
                    </tr>  
                    <tr>
                        <td>Nilai Koordinator</td>
                        <td>:</td>
                        <td><input type="number" name="nilaiKoordinator" placeholder="Masukkan Nilai" required></td>
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