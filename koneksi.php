<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ars_230217049';

$konek = mysqli_connect($host,$user,$pass,$db);

if(!$konek){
    echo 'koneksi gagal';
}

?>