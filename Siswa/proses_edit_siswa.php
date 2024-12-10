<?php

include ("../config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $update_data = "UPDATE calon_siswa SET nama='$nama' , jenis_kelamin='$jk', alamat='$alamat', jurusan='$jurusan' WHERE id=$id";
    $query = mysqli_query($dbPPDB_SMA_Garuda, $update_data);

    if($query){
        header ('Location: list_siswa.php?status=sukses');
    }
    else{
        header ('Location: list_siswa.php?status=gagal');
    }

}
else{
    die ("akses dilarang");
}

?>