<div class='kotak-pink'>
    <h3>INPUT DATA PENDAFTARAN</h3>
    <form method='POST' action='registrasi_simpan.php'>
        
        <div class='form-group'>
            <label>Nama Pasien</label>
            <select name="no_rm" required>
                <option value="">--Pilih Pasien--</option>
                <?php
                include 'koneksi.php';
                $getPas = mysqli_query($konek, "SELECT * FROM pasien");
                while($pasien = mysqli_fetch_array($getPas)){
                    echo "<option value='".$pasien['no_rm']."'>".$pasien['nama_pasien']."</option>";
                } ?>
            </select>
        </div>
        
        <div class='form-group'>
            <label>Poliklinik</label>
            <select name="id_poli" required>
                <option value="">--Pilih Poliklinik--</option>
                <?php
                $getPoli = mysqli_query($konek, "SELECT * FROM klinik");
                while($poli = mysqli_fetch_array($getPoli)){
                    echo "<option value='".$poli['id_klinik']."'>".$poli['nama_klinik']."</option>";
                } ?>
            </select>
        </div>

        <div class='form-group'>
            <label>Dokter</label>
            <select name="id_dokter" required>
                <option value="">--Pilih Dokter--</option>
                <?php
                $getDokter = mysqli_query($konek, "SELECT * FROM dokter");
                while($dokter = mysqli_fetch_array($getDokter)){
                    echo "<option value='".$dokter['id_dokter']."'>".$dokter['nama_dokter']." (".$dokter['spesialis'].")</option>";
                } ?>
            </select>
        </div>

        <div class='form-group'>
            <label>Tgl Pendaftaran</label>
            <input type="date" name="tgl_pendaftaran" required />
        </div>

        <div class="form-group" style="margin-top: 25px;">
            <button type="submit" class="btn-simpan">Simpan Pendaftaran</button>
        </div>
    </form>
</div>

<div class="judul-tabel">DATA PENDAFTARAN</div>

<div class="kotak-putih">
    <?php include 'registrasi_data.php'; ?>
</div>