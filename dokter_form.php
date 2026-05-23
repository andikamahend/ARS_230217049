<div class='kotak-pink'>
    <h3>INPUT DATA DOKTER</h3>
    <hr class="garis-putih">
    <form method='POST' action='dokter_simpan.php'>
        
        <div class='form-group'>
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" id="nama_dokter" required />
        </div>
        
        <div class='form-group'>
            <label>Spesialis</label>
            <input type="text" name="spesialis" id="spesialis" required />
        </div>
        
        <div class="form-group" style="margin-bottom: 0; margin-top: 25px;">
            <button type="submit" class="btn-simpan">Simpan Dokter</button>
        </div>

    </form>
</div>

<div class="judul-tabel">DATA DOKTER</div>

<div class="kotak-putih">
    <?php include 'dokter_data.php'; ?>
</div>