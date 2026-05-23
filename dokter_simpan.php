


<?php
	include 'koneksi.php';

$nama			= $_POST['nama_dokter'];
$spesialis		= $_POST['spesialis'];
	
$simpan = mysqli_query($konek,"INSERT INTO dokter (nama_dokter,spesialis)VALUES ('$nama','$spesialis')");
if($simpan){
	echo "
	 <script>
	 	alert('Data Berhasil Disimpan');
		window.location='dokter_form.php';
	 </script>
	";
}else{
	echo "
	 <script>
	 	alert('Data Gagal Disimpan');
		window.location='dokter_form.php';
	 </script>
	";

}
?>