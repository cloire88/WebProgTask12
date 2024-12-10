<?php

include ("../config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM guru WHERE id=$id";
    $query = mysqli_query($dbPPDB_SMA_Garuda, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_guru.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}



?>