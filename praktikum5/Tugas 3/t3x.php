<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	date_default_timezone_set("asia/jakarta");
	echo "Biodata diubah pada ";
	echo date("l, d M Y");
	echo " pukul ";
	echo date("H:i:s");
	echo "<h1>BIODATA</h1>";
	echo "Halo ".$_POST['np']." <br><br>biodata anda: <br><br>Nama Lengkap: ".$_POST['nama']."<br><br>Nama Panggilan: ".$_POST['np']. "<br><br>Email: ".$_POST['email']."<br><br> Jenis Kelamin".$_POST['jk']."<br><br>Tempat, Tanggal Lahir: ".$_POST['ttl'].", ".$_POST['ttlx']."<br><br>Alamat: ".$_POST['alamat']."<br><br>Agama: ".$_POST['agama']."<br><br>No Telepon: ".$_POST['no']."<br><br>Hobi: ".$_POST['hobi']."<br><br>Pekerjaan: ".$_POST['pekerjaan'];	
	?>
</body>
</html>