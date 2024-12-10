<?php
include("../config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($dbPPDB_SMA_Garuda, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa | SMK Coding</title>
    </head>
    <body>
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>

        <form action="proses_edit_siswa.php" method="POST">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
            <label for = "jk" >Jenis Kelamin : </label>
			<label><input type="radio" name="jk" value="L"> Laki-laki</label>
			<label><input type="radio" name="jk" value="P"> Perempuan</label>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
            <label for = "jurusan">Jurusan : </label>
            <select name = "jurusan">
            <option>IPA</option>
            <option>IPS</option>
            <option>Bahasa</option>
            </select>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

            </fieldset>


        </form>

        </body>
</html>