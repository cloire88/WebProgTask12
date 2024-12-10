<?php

include ("../config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($dbPPDB_SMA_Garuda, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}



?>