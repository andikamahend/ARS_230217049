<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $ambilData = mysqli_query($konek,"SELECT * FROM pendaftaran WHERE no_reg='$id'");
        $data = mysqli_fetch_array($ambilData);
    ?>
    <div class='kotak_besar'>
        
        <a href="index.php?aksi=register" class="btn-kembali">&laquo; Kembali</a>

        <h3>EDIT DATA PENDAFTARAN</h3>
        <form method='POST' action='registrasi_update.php'>

            <input type="hidden" value="<?= $data['no_reg'] ?>" name="no_reg" />
            
            <div class='kotak_kecil'>
                <label>Nama Pasien</label>
                <select name="no_rm" required>
                    <option value="">--Pilih Pasien--</option>
                    <?php
                    $getPas = mysqli_query($konek, "SELECT * FROM pasien");
                    while($pasien = mysqli_fetch_array($getPas)){
                        $selected = ($pasien['no_rm'] == $data['no_rm']) ? 'selected' : '';
                        echo "<option value='".$pasien['no_rm']."' $selected>".$pasien['nama_pasien']."</option>";
                    } ?>
                </select>
            </div>
            
            <div class='kotak_kecil'>
                <label>Poliklinik</label>
                <select name="id_poli" required>
                    <option value="">--Pilih Poliklinik--</option>
                    <?php
                    $getPoli = mysqli_query($konek, "SELECT * FROM klinik");
                    while($poli = mysqli_fetch_array($getPoli)){
                        $selected = ($poli['id_klinik'] == $data['id_poli']) ? 'selected' : '';
                        echo "<option value='".$poli['id_klinik']."' $selected>".$poli['nama_klinik']."</option>";
                    } ?>
                </select>
            </div>

            <div class='kotak_kecil'>
                <label>Dokter</label>
                <select name="id_dokter" required>
                    <option value="">--Pilih Dokter--</option>
                    <?php
                    $getDokter = mysqli_query($konek, "SELECT * FROM dokter");
                    while($dokter = mysqli_fetch_array($getDokter)){
                        $selected = ($dokter['id_dokter'] == $data['id_dokter']) ? 'selected' : '';
                        echo "<option value='".$dokter['id_dokter']."' $selected>".$dokter['nama_dokter']." (".$dokter['spesialis'].")</option>";
                    } ?>
                </select>
            </div>

            <div class='kotak_kecil'>
                <label>Tgl Pendaftaran</label>
                <input type="date" value="<?= $data['tgl_pendaftaran'] ?>" name="tgl_pendaftaran" required />
            </div>

            <div class="kotak_kecil" style="margin-top: 25px;">
                <button type="submit">Update Data</button>
            </div>
        </form>
    </div>
</body>
</html>