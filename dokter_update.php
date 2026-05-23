<?php
include 'koneksi.php';
$id        = $_POST['id_dokter'];
$nama      = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];

// Catatan: Pada kode lama Anda terdapat bug spesialis='spesialis', sudah diperbaiki menjadi spesialis='$spesialis'
$update = mysqli_query($konek,"UPDATE dokter SET nama_dokter='$nama', spesialis='$spesialis' WHERE id_dokter='$id'");

if($update){
    echo "<script>alert('Data Berhasil Diperbarui'); window.location='index.php?aksi=dokter';</script>";
}else{
    echo "<script>alert('Data Gagal Diperbarui'); window.location='index.php?aksi=dokter';</script>";
}
?>