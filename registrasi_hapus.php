<?php
include 'koneksi.php';
$id = $_GET['id'];

$hapus = mysqli_query($konek, "DELETE FROM pendaftaran WHERE no_reg='$id'");

if($hapus){
    echo "<script>alert('Data Pendaftaran Dihapus'); window.location='index.php?aksi=register';</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus'); window.location='index.php?aksi=register';</script>";
}
?>