<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
</head>
<body> 
	<form method="POST" action="t2.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
	<?php
	date_default_timezone_set("asia/jakarta");
	$tgl=date("l, d M Y");
	$wkt=date("H:i:s")
	?>
</body>
</html>