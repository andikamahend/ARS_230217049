<?php
include 'koneksi.php';
$id   = $_POST['id_klinik'];
$nama = $_POST['nama_klinik'];

$update = mysqli_query($konek,"UPDATE klinik SET nama_klinik='$nama' WHERE id_klinik='$id'");

if($update){
    echo "<script>alert('Data Berhasil Diperbarui'); window.location='index.php?aksi=poli';</script>";
}else{
    echo "<script>alert('Data Gagal Diperbarui'); window.location='index.php?aksi=poli';</script>";
}
?>