<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $ambilData = mysqli_query($konek,"SELECT * FROM pasien WHERE no_rm='$id'");
        $data = mysqli_fetch_array($ambilData);
    ?>
    <div class='kotak_besar'>
        
        <a href="index.php?aksi=pasien" class="btn-kembali">&laquo; Kembali</a>

        <h3>EDIT DATA PASIEN</h3>
        <form method='POST' action='pasien_update.php'>

            <input type="hidden" value="<?= $data['no_rm'] ?>" name="no_rm_lama" />
            
            <div class='kotak_kecil'>
                <label>No RM</label>
                <input type="text" value="<?= $data['no_rm'] ?>" name="no_rm" required />
            </div>

            <div class='kotak_kecil'>
                <label>Nama Pasien</label>
                <input type="text" value="<?= $data['nama_pasien'] ?>" name="nama_pasien" required />
            </div>

            <div class='kotak_kecil'>
                <label>Tempat Lahir</label>
                <input type="text" value="<?= $data['Tempat_Lahir'] ?>" name="Tempat_Lahir" required />
            </div>

            <div class='kotak_kecil'>
                <label>Tanggal Lahir</label>
                <input type="date" value="<?= $data['Tgl_Lahir'] ?>" name="Tgl_Lahir" required />
            </div>

            <div class='kotak_kecil'>
                <label>Alamat</label>
                <textarea name="Alamat" required><?= $data['alamat'] ?></textarea>
            </div>

            <div class='kotak_kecil'>
                <label>Jenis Kelamin</label>
                <div class="radio-container">
                    <label class="radio-label">
                        <input type="radio" value="Laki-laki" name="jenkel" <?= ($data['jenkel'] == 'Laki-laki') ? 'checked' : '' ?> /> Laki-laki
                    </label>
                    <label class="radio-label">
                        <input type="radio" value="Perempuan" name="jenkel" <?= ($data['jenkel'] == 'Perempuan') ? 'checked' : '' ?> /> Perempuan
                    </label>
                </div>
            </div>

            <div class='kotak_kecil'>
                <label>Agama</label>
                <select name='agama' required>
                    <option value=''>--Pilih--</option>
                    <option value='Islam' <?= ($data['agama'] == 'Islam') ? 'selected' : '' ?>>Islam</option>
                    <option value='Kristen' <?= ($data['agama'] == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
                    <option value='Khatolik' <?= ($data['agama'] == 'Khatolik') ? 'selected' : '' ?>>Khatolik</option>
                    <option value='Hindu' <?= ($data['agama'] == 'Hindu') ? 'selected' : '' ?>>Hindu</option>
                    <option value='Budha' <?= ($data['agama'] == 'Budha') ? 'selected' : '' ?>>Budha</option>
                    <option value='Lainnya' <?= ($data['agama'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
                </select>
            </div>
            
            <div class="kotak_kecil" style="margin-top: 25px;">
                <button type="submit">Update Data</button>
            </div>
        </form>
    </div>
</body>
</html>