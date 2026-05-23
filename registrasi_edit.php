<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Registrasi</title>
    <style>
        /* Desain disesuaikan dengan tema utama index.php */
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; }
        body { background-color: #f4f7f6; color: #333; line-height: 1.6; padding: 40px 20px; }
        
        /* Area Form / Card */
        .kotak_besar { max-width: 600px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); margin: 0 auto; width: 100%; }
        .kotak_besar h3 { color: #2c3e50; margin-bottom: 20px; border-bottom: 2px solid #ecf0f1; padding-bottom: 10px; text-align: center; }
        .kotak_kecil { margin-bottom: 15px; }
        
        /* Label dan Input */
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #34495e; }
        input[type="date"], select { width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; transition: border 0.3s; }
        input[type="date"]:focus, select:focus { border-color: #3498db; box-shadow: 0 0 5px rgba(52, 152, 219, 0.3); }
        
        /* Tombol Update */
        button[type="submit"] { background-color: #2ecc71; color: white; padding: 12px 20px; border: none; border-radius: 6px; font-size: 16px; width: 100%; font-weight: bold; cursor: pointer; transition: 0.3s; }
        button[type="submit"]:hover { background-color: #27ae60; }
        
        /* Tombol Kembali */
        .btn-kembali { display: inline-block; background-color: #95a5a6; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; margin-bottom: 20px; font-size: 14px; transition: 0.3s; }
        .btn-kembali:hover { background-color: #7f8c8d; }
    </style>
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