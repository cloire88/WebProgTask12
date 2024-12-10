<?php
include("../config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_gur.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM guru WHERE id=$id";
$query = mysqli_query($dbPPDB_SMA_Garuda, $sql);
$guru = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Guru | SMA Garuda</title>
    </head>
    <body>
        <header>
            <h3>Formulir Edit Guru</h3>
        </header>

        <form action="proses_edit_guru.php" method="POST">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $guru['id'] ?>" />

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
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
</html>