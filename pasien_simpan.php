<?php
include 'koneksi.php';

$no_rm			= $_POST['no_rm'];
$nama_pasien	= $_POST['nama_pasien'];
$Tempat_Lahir	= $_POST['Tempat_Lahir'];
$Tgl_Lahir		= $_POST['Tgl_Lahir'];
$Alamat			= $_POST['Alamat'];
$jenkel			= $_POST['jenkel'];
$agama			= $_POST['agama'];
	
$simpan = mysqli_query($konek,"INSERT INTO pasien (no_rm,nama_pasien,Tempat_Lahir,Tgl_Lahir,alamat,jenkel,agama)
VALUES ('$no_rm','$nama_pasien','$Tempat_Lahir','$Tgl_Lahir','$Alamat','$jenkel','$agama')");

// Tambahkan kode di bawah ini agar halaman kembali ke form setelah sukses
if($simpan){
	echo "
	 <script>
	 	alert('Data Pasien Berhasil Disimpan');
		window.location='index.php?aksi=pasien'; 
	 </script>
	";
}else{
	echo "
	 <script>
	 	alert('Data Gagal Disimpan');
		window.location='index.php?aksi=pasien';
	 </script>
	";
}
?>