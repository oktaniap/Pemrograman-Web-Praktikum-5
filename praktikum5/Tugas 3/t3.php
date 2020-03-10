<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
</head>
<body> 
	<?php
	date_default_timezone_set("asia/jakarta");
	echo "Login pada ";
	echo date("l, d M Y");
	echo " pukul ";
	echo date("H:i:s");
	?>
	<h1>BIODATA</h1>
	Isikan Dengan Benar!
	<br><br>
	<form method="POST" action="t3x.php">
		<table width="400" align="justify" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Nama Panggilan</td>
				<td><input type="text" name="np"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki">Laki-laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td width="130">Tempat</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Tanggal Lahir</td>
				<td><input type="date" name="ttlx"></td>
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Agama</td>
				<td><select name="agama">
					<option name="agama">Islam</option>
					<option name="agama">Kristen Protestan</option>
					<option name="agama">Kristen Katolik</option>
					<option name="agama">Hindu</option>
					<option name="agama">Buddha</option>
					<option name="agama">Konghucu</option>
				</select></td>
			</tr>
			<tr>
				<td width="130">No Telepon</td>
				<td><input type="text" name="no"></td>
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
			<tr>
				<td width="130">Pekerjaan</td>
				<td><select name="pekerjaan">
					<option name="pekerjaan">Belum/Tidak Bekerja</option>
					<option name="pekerjaan">Pelajar/Mahasiswa</option>
					<option name="pekerjaan">Ibu Rumah Tangga</option>
					<option name="pekerjaan">Pegawai Negeri Sipil</option>
					<option name="pekerjaan">Tentara Nasional Indonesia</option>
					<option name="pekerjaan">Pensiunan</option>
					<option name="pekerjaan">Kepolisian RI</option>
					<option name="pekerjaan">Pedagang</option>
					<option name="pekerjaan">Petani/Pekebun</option>
					<option name="pekerjaan">Wirausaha</option>
				</select></td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Kirim">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>