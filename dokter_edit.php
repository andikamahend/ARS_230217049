<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dokter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];

        $ambilData = mysqli_query($konek,"SELECT * FROM dokter WHERE id_dokter='$id'");
        $data = mysqli_fetch_array($ambilData);
    ?>
    
    <div class='kotak_besar'>
        <a href="index.php?aksi=dokter" class="btn-kembali">&laquo; Kembali</a>

        <h3>EDIT DATA DOKTER</h3>
        <form method='POST' action='dokter_update.php'>

            <input type="hidden" value="<?= $data['id_dokter'] ?>" name="id_dokter" id="id_dokter" />
            
            <div class='kotak_kecil'>
                <label>Nama Dokter</label>
                <input type="text" value="<?= $data['nama_dokter'] ?>" name="nama_dokter" id="nama_dokter" required />
            </div>
            <div class='kotak_kecil'>
                <label>Spesialis</label>
                <input type="text" value="<?= $data['spesialis'] ?>" name="spesialis" id="spesialis" required />
            </div>
            
            <div class="kotak_kecil" style="margin-top: 25px;">
                <button type="submit">Update Data</button>
            </div>

        </form>
    </div>
</body>
</html>