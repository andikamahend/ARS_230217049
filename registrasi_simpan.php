<?php
include 'koneksi.php';

$no_rm           = $_POST['no_rm'];
$id_poli         = $_POST['id_poli'];
$id_dokter       = $_POST['id_dokter'];
$tgl_pendaftaran = $_POST['tgl_pendaftaran'];
	
$simpan = mysqli_query($konek,"INSERT INTO pendaftaran (no_rm, id_poli, id_dokter, tgl_pendaftaran) 
          VALUES ('$no_rm', '$id_poli', '$id_dokter', '$tgl_pendaftaran')");

if($simpan){
	echo "<script>alert('Pendaftaran Berhasil Disimpan'); window.location='index.php?aksi=register';</script>";
}else{
	echo "<script>alert('Data Gagal Disimpan'); window.location='index.php?aksi=register';</script>";
}
?>