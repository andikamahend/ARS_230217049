<?php
include 'koneksi.php';
$id = $_GET['id'];

$simpan = mysqli_query($konek,"DELETE FROM pasien WHERE no_rm='$id'");

if($simpan){
    echo "
    <script>
        alert('Data Berhasil Dihapus');
        window.location='index.php?aksi=pasien';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data Gagal Dihapus');
        window.location='index.php?aksi=pasien';
    </script>
    ";
}
?>