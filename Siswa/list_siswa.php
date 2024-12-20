<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Siswa | SMA Garuda</title>
</head>
<body>
<div class="container mt-5">
    <header>
        <h3 class="text-center">Daftar Siswa</h3>
    </header>

    <div class="mb-4">
        <a href="form_pendaftaran.php" class="btn btn-primary">Tambah Baru</a>
        <a href="SToPdf.php" class="btn btn-primary">Download PDF</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-light">
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

        while ($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";

            // No
            echo "<td>" . $no++ . "</td>";

            // Foto
            if (!empty($siswa['foto'])) {
                echo "<td><img src='uploads/" . htmlspecialchars($siswa['foto']) . "' alt='Foto' class='img-thumbnail' style='width:100px;height:100px;'></td>";
            } else {
                echo "<td><em>No Photo</em></td>";
            }

            // Other Data
            echo "<td>" . htmlspecialchars($siswa['nama']) . "</td>";
            echo "<td>" . htmlspecialchars($siswa['jenis_kelamin']) . "</td>";
            echo "<td>" . htmlspecialchars($siswa['alamat']) . "</td>";
            echo "<td>" . htmlspecialchars($siswa['jurusan']) . "</td>";

            // Actions
            echo "<td>";
            echo '<a href="form_edit_siswa.php?id=' . $siswa['id'] . '" class="btn btn-warning btn-sm">Edit</a> ';
            echo '<a href="hapus_siswa.php?id=' . $siswa['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>';
            echo "</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <p class="mt-3">Total: <?php echo mysqli_num_rows($query); ?></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
