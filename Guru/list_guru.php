<!-- Updated file: list_guru.php -->
<?php include("../config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Guru | SMA Garuda</title>
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center">Daftar Guru</h3>
    <div class="mb-3 text-end">
        <a href="form_pendaftaran_guru.php" class="btn btn-primary">+ Tambah Baru</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-dark">
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

            while ($guru = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $guru['id'] . "</td>";
                echo "<td>" . $guru['nama'] . "</td>";
                echo "<td>" . $guru['email'] . "</td>";
                echo "<td>" . $guru['alamat'] . "</td>";
                echo "<td>" . $guru['jabatan'] . "</td>";
                echo "<td>";
                echo '<a href="form_edit_guru.php?id=' . $guru['id'] . '" class="btn btn-warning btn-sm">Edit</a> ';
                echo '<a href="hapus_guru.php?id=' . $guru['id'] . '" class="btn btn-danger btn-sm">Hapus</a>';
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
