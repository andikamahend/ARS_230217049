<div class='kotak-pink'>
    <h3>INPUT DATA POLIKLINIK</h3>
    <hr class="garis-putih">
    <form method='POST' action='poli_simpan.php'>
        
        <div class='form-group'>
            <label>Nama Poli</label>
            <input type="text" name="nama_klinik" id="nama_klinik" required />
        </div>
        
        <div class="form-group" style="margin-bottom: 0;">
            <button type="submit" class="btn-simpan">Simpan Poli</button>
        </div>

    </form>
</div>

<div class="judul-tabel">DATA POLIKLINIK</div>
<div class="kotak-putih">
    <?php include 'poli_data.php'; ?>
</div>