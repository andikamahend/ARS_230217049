<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dokter</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; }
        body { background-color: #f4f7f6; color: #333; line-height: 1.6; padding: 40px 20px; }
        
        /* Area Form / Card Putih */
        .kotak_besar { max-width: 600px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); margin: 0 auto; width: 100%; }
        .kotak_besar h3 { color: #2c3e50; margin-bottom: 20px; border-bottom: 2px solid #ecf0f1; padding-bottom: 10px; text-align: center; }
        .kotak_kecil { margin-bottom: 15px; }
        
        /* Label dan Input */
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #34495e; }
        input[type="text"] { width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; transition: border 0.3s; box-sizing: border-box; }
        input[type="text"]:focus { border-color: #3498db; box-shadow: 0 0 5px rgba(52, 152, 219, 0.3); }
        
        /* Tombol Update */
        button { background-color: #2ecc71; color: white; padding: 12px 20px; border: none; border-radius: 6px; font-size: 16px; width: 100%; font-weight: bold; cursor: pointer; transition: 0.3s; }
        button:hover { background-color: #27ae60; }
        
        /* Tombol Kembali */
        .btn-kembali { display: inline-block; background-color: #95a5a6; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; margin-bottom: 20px; font-size: 14px; transition: 0.3s; }
        .btn-kembali:hover { background-color: #7f8c8d; }
    </style>
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