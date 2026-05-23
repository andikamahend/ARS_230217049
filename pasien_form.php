<div class='kotak-pink'>
    <h3>INPUT DATA PASIEN</h3>
    <form method='POST' action='pasien_simpan.php'>
        <div class='form-group'>
            <label class="title-label">No RM</label>
            <input type="number" name="no_rm" required />
        </div>
        <div class='form-group'>
            <label class="title-label">Nama Pasien</label>
            <input type="text" name="nama_pasien" required />
        </div>
        <div class='form-group'>
            <label class="title-label">Tempat Lahir</label>
            <input type="text" name="Tempat_Lahir" required />
        </div>
        <div class='form-group'>
            <label class="title-label">Tanggal Lahir</label>
            <input type="date" name="Tgl_Lahir" required />
        </div>
        <div class='form-group'>
            <label class="title-label">Alamat</label>
            <textarea name="Alamat" required></textarea>
        </div>
        <div class='form-group'>
            <label class="title-label">Jenis Kelamin</label>
            <div class="radio-group">
                <label><input type="radio" value="Laki-laki" name="jenkel" required /> Laki-laki</label>
                <label><input type="radio" value="Perempuan" name="jenkel" required /> Perempuan</label>
            </div>
        </div>
        <div class='form-group'>
            <label class="title-label">Agama</label>
            <select name='agama' required>
                <option value=''>--Pilih--</option>
                <option value='Islam'>Islam</option>
                <option value='Kristen'>Kristen</option>
                <option value='Khatolik'>Khatolik</option>
                <option value='Hindu'>Hindu</option>
                <option value='Budha'>Budha</option>
                <option value='Lainnya'>Lainnya</option>
            </select>
        </div>
        <div class="form-group" style="margin-top: 25px;">
            <button type="submit" class="btn-simpan">Simpan Data</button>
        </div>
    </form>
</div>

<div class="judul-tabel">DATA PASIEN</div>
<div class="kotak-putih">
    <?php include 'pasien_data.php'; ?>
</div>