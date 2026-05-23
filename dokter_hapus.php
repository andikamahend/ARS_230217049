<?php
include 'koneksi.php';
$id = $_GET['id'];

$simpan = mysqli_query($konek,"DELETE FROM dokter WHERE id_dokter='$id'");

if($simpan){
    echo "
    <script>
        alert('Data Berhasil Dihapus');
        window.location='index.php?aksi=dokter';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data Gagal Dihapus');
        window.location='index.php?aksi=dokter';
    </script>
    ";
}
?>