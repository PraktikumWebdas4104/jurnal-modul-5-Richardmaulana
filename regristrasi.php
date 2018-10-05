<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form method="POST">
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email"></td>
		</tr>
	</table>
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		include"prosesregris.php";
	}
?>
