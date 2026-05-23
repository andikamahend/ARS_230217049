<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Poliklinik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $ambilData = mysqli_query($konek,"SELECT * FROM klinik WHERE id_klinik='$id'");
        $data = mysqli_fetch_array($ambilData);
    ?>
    <div class='kotak_besar'>
        <a href="index.php?aksi=poli" class="btn-kembali">&laquo; Kembali</a>
        <h3>EDIT DATA POLIKLINIK</h3>
        <form method='POST' action='poli_update.php'>
            <input type="hidden" value="<?= $data['id_klinik'] ?>" name="id_klinik" id="id_klinik" />
            <div class='kotak_kecil'>
                <label>Nama Poli</label>
                <input type="text" value="<?= $data['nama_klinik'] ?>" name="nama_klinik" id="nama_klinik" required />
            </div>
            <div class="kotak_kecil" style="margin-top: 25px;">
                <button type="submit">Update Data</button>
            </div>
        </form>
    </div>
</body>
</html>