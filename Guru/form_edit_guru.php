<!-- Updated file: form_edit_guru.php -->
<?php
include("../config.php");

if (!isset($_GET['id'])) {
    header('Location: list_guru.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM guru WHERE id=$id";
$query = mysqli_query($dbPPDB_SMA_Garuda, $sql);
$guru = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Edit Guru | SMA Garuda</title>
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center">Formulir Edit Guru</h3>
    <form action="proses_edit_guru.php" method="POST" class="mt-4">
        <input type="hidden" name="id" value="<?php echo $guru['id']; ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" value="<?php echo $guru['nama']; ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" value="<?php echo $guru['email']; ?>">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat" value="<?php echo $guru['alamat']; ?>">
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatan" value="<?php echo $guru['jabatan']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>