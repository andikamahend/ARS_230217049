


<?php
	include 'koneksi.php';

$nama			= $_POST['nama_klinik'];
	
$simpan = mysqli_query($konek,"INSERT INTO klinik (nama_klinik)VALUES ('$nama')");
if($simpan){
	echo "
	 <script>
	 	alert('Data Berhasil Disimpan');
		window.location='poli_form.php';
	 </script>
	";
}else{
	echo "
	 <script>
	 	alert('Data Gagal Disimpan');
		window.location='poli_form.php';
	 </script>
	";

}
?>