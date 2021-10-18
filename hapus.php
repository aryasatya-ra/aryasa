<?php
	include "koneksi.php";
 
	$id = $_GET["hapus_id"];
 
	// query sql
	$sql = "DELETE FROM formbio WHERE id='$id'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	if($query){
		echo "Data berhasil di Hapus!";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	mysqli_close($koneksi);
?>
<a href= "awal.php."> KEMBALI</a>
