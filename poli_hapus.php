<?php
include 'koneksi.php';
$id = $_GET['id'];

$simpan = mysqli_query($konek,"DELETE FROM klinik WHERE id_klinik='$id'");

if($simpan){
    echo "
    <script>
        alert('Data Berhasil Dihapus');
        window.location='index.php?aksi=poli';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data Gagal Dihapus');
        window.location='index.php?aksi=poli';
    </script>
    ";
}
?>