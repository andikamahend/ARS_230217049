
<?php
include 'koneksi.php';
$id            =$_GET['id'];


$simpan     = mysqli_query($konek,"DELETE FROM klinik WHERE id_klinik='$id'");

if($simpan){
    echo "
    <script>
        alert('Data Berhasil Dihapus');
        window.location='poli_form.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data Gagal Dihapus');
        window.location='poli_form.php';
    </script>
    ";
}
?>