<?php

include ("../config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];

    $insert_data = "INSERT INTO guru (nama, email, alamat, jabatan) VALUE ('$nama', '$email', '$alamat', '$jabatan')";
    $query_insert_data = mysqli_query($dbPPDB_SMA_Garuda, $insert_data);

    if($query_insert_data){
        header ('Location: list_guru.php?status=sukses');
    }
    else{
        header ('Location: list_guru.php?status=gagal');
    }

}
else{
    die ("akses dilarang");
}

?>