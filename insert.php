<html>
<title>insert</title>
<head>
<body>
<?php
	include "koneksi.php";
 
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$pekerjaan = $_POST["pekerjaan"];
 
	date_default_timezone_set("Asia/Jakarta");
 
	$tgl = date("Y:m:d");
 
	// query sql
	$sql = "INSERT INTO formbio (nama, alamat, pekerjaan) VALUES('$nama','$alamat','$pekerjaan')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	if($query){
		echo "Data berhasil di insert!";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	mysqli_close($koneksi);
 
?>
<a href= "awal.php."> KEMBALI</a>
</body>
</head>
</html>