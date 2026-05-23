<?php
include 'koneksi.php';

// Menangkap No RM lama untuk klausa WHERE
$no_rm_lama    = $_POST['no_rm_lama'];

// Menangkap semua data baru dari form edit
$no_rm         = $_POST['no_rm'];
$nama          = $_POST['nama_pasien'];
$tempat_lahir  = $_POST['Tempat_Lahir'];
$tgl_lahir     = $_POST['Tgl_Lahir'];
$alamat        = $_POST['Alamat'];
$jenkel        = $_POST['jenkel'];
$agama         = $_POST['agama'];

// Query untuk memperbarui semua kolom data pasien
$update = mysqli_query($konek, "UPDATE pasien SET 
    no_rm = '$no_rm',
    nama_pasien = '$nama',
    Tempat_Lahir = '$tempat_lahir',
    Tgl_Lahir = '$tgl_lahir',
    alamat = '$alamat',
    jenkel = '$jenkel',
    agama = '$agama'
    WHERE no_rm = '$no_rm_lama'");

if($update){
    echo "
    <script>
        alert('Data Berhasil Diperbarui');
        window.location='index.php?aksi=pasien';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data Gagal Diperbarui');
        window.location='index.php?aksi=pasien';
    </script>
    ";
}
?>