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
        <fieldset>
            <legend><h1>Pendaftaran TA</h1></legend>
                <table>
                    <form action="aksitambahPendaftarTA.php" method="post">
                    <tr>
                        <td>NIM Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nimMhsw" placeholder="NIM Mahasiswa" size="52px" required/></td>
                    </tr>
        
                     <tr>
                        <td>NID Dosen Pembimbing</td>
                        <td>:</td>
                        <td><input type="text" name="nidDosBing" placeholder="NID Dosen Pembimbing" size="52px" required/></td>
                    </tr>
                     <tr>
                        <td>Tanggal Pendaftaran</td>
                        <td>:</td>
                        <td><input type="date" name="tglDaftar" placeholder="Tanggal Pendaftaran" required> </td>
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