<!-- Updated file: form_edit_siswa.php -->
<?php
include("../config.php");

if (!isset($_GET['id'])) {
    header('Location: list_siswa.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($dbPPDB_SMA_Garuda, $sql);
$siswa = mysqli_fetch_assoc($query);

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
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center">Formulir Edit Siswa</h3>
    <form action="proses_edit_siswa.php" method="POST" class="mt-4">
        <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $siswa['nama']; ?>">
        </div>

        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" value="L" id="jkL">
                <label class="form-check-label" for="jkL">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" value="P" id="jkP">
                <label class="form-check-label" for="jkP">Perempuan</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3"><?php echo $siswa['alamat']; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select name="jurusan" class="form-select">
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                <option value="Bahasa">Bahasa</option>
            </select>
        </div>

        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
