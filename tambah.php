<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data</h3>
 
	<form action="insert.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="SIMPAN">
					<input type="reset" name="clear" value="BATAL">
				</td>
			</tr>
		</table>
	</form>
 
</body>
</html>

<a href= "awal.php."> KEMBALI</a>