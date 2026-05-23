
<?php
include 'koneksi.php';
$id            =$_POST['id_klinik'];
$nama          =$_POST['nama_klinik'];

$simpan     = mysqli_query($konek,"UPDATE klinik SET nama_klinik='$nama' WHERE id_klinik='$id'");

if($simpan){
    echo "
    <script>
        alert('Data Berhasil Perbarui');
        window.location='poli_form.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data Gagal Perbarui');
        window.location='poli_form.php';
    </script>
    ";
}
?>