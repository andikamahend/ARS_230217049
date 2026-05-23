<?php
include 'koneksi.php';

$no_reg          = $_POST['no_reg'];
$no_rm           = $_POST['no_rm'];
$id_poli         = $_POST['id_poli'];
$id_dokter       = $_POST['id_dokter'];
$tgl_pendaftaran = $_POST['tgl_pendaftaran'];

$update = mysqli_query($konek, "UPDATE pendaftaran SET 
    no_rm = '$no_rm', 
    id_poli = '$id_poli', 
    id_dokter = '$id_dokter', 
    tgl_pendaftaran = '$tgl_pendaftaran' 
    WHERE no_reg = '$no_reg'");

if($update){
    echo "<script>alert('Data Pendaftaran Berhasil Diperbarui'); window.location='index.php?aksi=register';</script>";
}else{
    echo "<script>alert('Data Gagal Diperbarui'); window.location='index.php?aksi=register';</script>";
}
?>