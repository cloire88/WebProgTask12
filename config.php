<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "ppdb_sma_garuda";

$dbPPDB_SMA_Garuda = new mysqli($server,$user,$password,$db);

if($dbPPDB_SMA_Garuda == TRUE){
    echo "Berhasil terhubung";
}

?>