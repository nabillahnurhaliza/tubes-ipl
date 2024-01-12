<?php

$koneksi=mysqli_connect("localhost", "root", "", "dbadministrasita") or die ("Gagal Koneksi Database");
echo "";

?>
<html>
	<head>
        <meta charset="utf-8">
        <title>Daftar Peserta TA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styletampilan.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" href="Foto Home/unajni.png">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <img src="Foto Home/unajni.png" width="50"> <br>
                <div class="juduls"><a id="Unjani" class="navbar-brand" href="home.html">⬅Back to Home</a></div>
            </div>
        </nav>
		<center>
		<h1>Jadwal Seminar</h1>
		<table border="3" cellpadding="8">
			<tr>
				<th>Nomor Seminar</th>
				<th>Waktu Seminar</th>
			</tr>
			<?php
				$query = "select * from jadwalseminar";
				$data = mysqli_query($koneksi,$query) or
				die("Gagal query:".$query);
			?>
			<?php while($v=mysqli_fetch_array($data)):;?>
			<tr>
				<td><?php echo $v["noSeminar"];?></td>
				<td><?php echo $v["tglSeminar"];?></td>
			</tr>
			<?php endwhile;?>
		</table>
	</center>
	</body>
</html>