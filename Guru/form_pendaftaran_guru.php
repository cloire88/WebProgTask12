<!-- Updated file: form_pendaftaran_guru.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Pendaftaran Guru</title>
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center">Formulir Pendaftaran Guru</h3>
    <form action="proses_pendaftaran_guru.php" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat">
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatan">
        </div>

        <button type="submit" class="btn btn-success">Daftar</button>
    </form>
    <div class="mt-3">
        <a href="list_guru.php" class="btn btn-secondary">Kembali</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
