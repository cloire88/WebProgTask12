<?php

include ("../config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];

    $update_data = "UPDATE guru SET nama='$nama' , email='$email', alamat='$alamat', jabatan='$jabatan' WHERE id=$id";
    $query = mysqli_query($dbPPDB_SMA_Garuda, $update_data);

    if($query){
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