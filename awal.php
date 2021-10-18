<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<h3>Tampil Data</h3>
 
	<table border="1">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th colspan="2">Aksi</th>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
 
				// query sql
				$sql = "SELECT * FROM formbio ORDER BY id DESC";
				$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
				$no = 1; // no. urut
 
				while($data = mysqli_fetch_array($query)){
 
					$id = $data["id"];
					$nm = $data["nama"];
					$alm = $data["alamat"];
					$pk = $data["pekerjaan"];
 
					echo <tr>
							<td>$no</td>
							<td>$nm</td>
							<td>$alm</td>
							<td>$pk</td>
							<td>
								<a href='hapus.php?hapus_id=$id'>Hapus</a>
							</td>
						  </tr>;
					$no++;
				}
			?>
 
			
		</tbody>
	</table>
 <a href= "tambah.php."> TAMBAH DATA</a>
</body>
</html>