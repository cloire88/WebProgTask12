<?php 

include("../config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Database | SMA Garuda</title>
</head>

<body>
	<header>
		<h3>Daftar Guru</h3>
	</header>
	
	<nav>
		<a href="form_pendaftaran_guru.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Jabatan</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM guru";
		$query = mysqli_query($dbPPDB_SMA_Garuda, $sql);
		
		while($guru = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$guru['id']."</td>";
			echo "<td>".$guru['nama']."</td>";
			echo "<td>".$guru['email']."</td>";
			echo "<td>".$guru['alamat']."</td>";
			echo "<td>".$guru['jabatan']."</td>";
			
			echo "<td>";
			echo '<a href="form_edit_guru.php?id='.$guru['id'].'">Edit</a> ';
			echo '<a href="hapus_guru.php?id='.$guru['id'].'">Hapus</a>';
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>