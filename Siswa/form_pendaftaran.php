<form method="POST" action="proses_pendaftaran.php" enctype="multipart/form-data">
    <p>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" placeholder="Masukkan nama" required>
    </p>
    <p>
        <label for="jk">Jenis Kelamin:</label>
        <label><input type="radio" name="jk" value="L" required> Laki-laki</label>
        <label><input type="radio" name="jk" value="P" required> Perempuan</label>
    </p>
    <p>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" placeholder="Masukkan alamat" required>
    </p>
    <p>
        <label for="jurusan">Jurusan:</label>
        <select name="jurusan" required>
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
            <option value="Bahasa">Bahasa</option>
        </select>
    </p>
    <p>
        <label for="photo">Foto:</label>
        <input type="file" name="photo" accept="image/*">
    </p>
    <button type="submit" name="daftar">Daftar</button>
</form>
