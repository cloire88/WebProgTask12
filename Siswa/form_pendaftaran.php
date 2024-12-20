<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulir Pendaftaran Siswa | SMA Garuda</title>
</head>
<body>
    <header class="bg-primary text-white py-3 mb-4">
        <div class="container">
            <h1 class="text-center">SMA Garuda</h1>
            <p class="text-center">Formulir Pendaftaran Siswa Baru</p>
        </div>
    </header>

    <main>
        <form method="POST" action="proses_pendaftaran.php" enctype="multipart/form-data" class="container mt-5">
            <h3 class="text-center mb-4">Formulir Pendaftaran Siswa Baru</h3>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" value="L" id="jkL" required>
                    <label class="form-check-label" for="jkL">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" value="P" id="jkP" required>
                    <label class="form-check-label" for="jkP">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" class="form-select" required>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Bahasa">Bahasa</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Foto</label>
                <input type="file" name="photo" class="form-control" accept="image/*">
            </div>
            <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
        </form>
    </main>

    <footer class="bg-dark text-white py-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 SMA Garuda. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
