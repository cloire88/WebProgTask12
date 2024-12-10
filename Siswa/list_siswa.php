<?php include("../config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMA Garuda</title>
</head>

<body>
    <header>
        <h3>Daftar Siswa</h3>
    </header>
    
    <nav>
        <a href="form_pendaftaran.php">[+] Tambah Baru</a>
    </nav>
    
    <br>
    
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($dbPPDB_SMA_Garuda, $sql);
        $no = 1;
        
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            
            // No
            echo "<td>" . $no++ . "</td>";
            
            // Foto
            
            // Other Data
            echo "<td>" . htmlspecialchars($siswa['nama']) . "</td>";
            echo "<td>" . htmlspecialchars($siswa['jenis_kelamin']) . "</td>";
            echo "<td>" . htmlspecialchars($siswa['alamat']) . "</td>";
            echo "<td>" . htmlspecialchars($siswa['jurusan']) . "</td>";
			if (!empty($siswa['foto'])) {
                echo "<td><img src='uploads/" . htmlspecialchars($siswa['foto']) . "' alt='Foto' width='100' height='100'></td>";
            } else {
                echo "<td><em>No Photo</em></td>";
            }
            
            // Actions
            echo "<td>";
            echo '<a href="form_edit_siswa.php?id=' . $siswa['id'] . '">Edit</a> ';
            echo '<a href="hapus_siswa.php?id=' . $siswa['id'] . '" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>';
            echo "</td>";
            
            echo "</tr>";
        }        
        ?>
        
    </tbody>
    </table>
    
    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
    
</body>
</html>
