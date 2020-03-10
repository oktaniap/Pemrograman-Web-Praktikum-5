<?php  
if (empty($_POST['nama']) || empty($_POST['email'])) {
	header("Location:t2x.php");
}
else{
	include "t1.php";
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
	echo "<center>Tanggal Login :".$tgl." pukul ".$wkt."</center><br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="t3.php">
		<center><input type="submit" name="lanjut" value="Lanjut"></center>
	</form>
</body>
</html>