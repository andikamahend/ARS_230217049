
<?php
include 'koneksi.php';
$id            =$_POST['id_dokter'];
$nama          =$_POST['nama_dokter'];
$spesialis     =$_POST['spesialis'];

$simpan     = mysqli_query($konek,"UPDATE dokter SET nama_dokter='$nama',spesialis='spesialis' WHERE id_dokter='$id'");

if($simpan){
    echo "
    <script>
        alert('Data Berhasil Perbarui');
        window.location='dokter_form.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data Gagal Perbarui');
        window.location='dokter_form.php';
    </script>
    ";
}
?>