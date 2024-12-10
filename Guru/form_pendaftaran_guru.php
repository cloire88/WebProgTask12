<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Data Guru</title>
</head>
<body>
    <h2>Formulir Pendaftaran Data Guru</h2>

    <form method = "POST" action = "proses_pendaftaran_guru.php">
    
        <p>
        <label for = "nama" >Nama : </label>
        <input name = "nama" type = "text" placeholder = "masukkan nama">
        </p>

        <p>
        <label for = "email" >Email : </label>
	<input type = "text" name="email" placeholder = "masukkan email">
        </p>

        <p>
        <label for = "alamat" >Alamat : </label>
        <input name = "alamat" type = "text" placeholder = "masukkan alamat">
        </p>

        <p>
        <label for ="jabatan">Jabatan : </label>
	<input type="text" name = "jabatan" placeholder="masukkan jabatan">
        </p>

        <input type="submit" value="Daftar" name="daftar" />

    </form>

    <br>

    <a href = "list_guru.php">kembali</a>

</body>
</html>