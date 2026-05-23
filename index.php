<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    <style>
        /* Pengaturan Dasar & Font */
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; }
        body { background-color: #f4f7f6; color: #333; line-height: 1.6; }

        /* Tata Letak Utama (Responsif) */
        .container-utama { display: flex; min-height: 100vh; flex-wrap: wrap; }
        
        /* Sidebar Menu */
        .sidebar { width: 250px; background-color: #2c3e50; padding: 20px; color: white; display: flex; flex-direction: column; gap: 10px; }
        .sidebar h2 { text-align: center; margin-bottom: 20px; font-size: 20px; border-bottom: 2px solid #34495e; padding-bottom: 10px; }
        .sidebar a { text-decoration: none; width: 100%; }
        .sidebar button { width: 100%; padding: 12px 15px; background-color: #34495e; color: white; border: none; border-radius: 6px; cursor: pointer; text-align: left; font-size: 15px; transition: 0.3s; }
        .sidebar button:hover, .sidebar a.aktif button { background-color: #3498db; }

        /* Area Konten Utama */
        .konten { flex: 1; padding: 30px; width: 100%; overflow-x: auto; }

        /* Desain Form (Kotak Besar & Kecil) */
        .kotak_besar { max-width: 800px; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); margin: 0 auto 30px auto; width: 100%; }
        .kotak_besar h3 { color: #2c3e50; margin-bottom: 20px; border-bottom: 2px solid #ecf0f1; padding-bottom: 10px; }
        .kotak_kecil { margin-bottom: 15px; }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #34495e; }
        input[type="text"], input[type="number"], input[type="date"], select, textarea { width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; transition: border 0.3s; }
        input:focus, select:focus, textarea:focus { border-color: #3498db; box-shadow: 0 0 5px rgba(52, 152, 219, 0.3); }
        .radio-label { display: inline-flex; align-items: center; margin-right: 15px; font-weight: normal; }
        .radio-label input { margin-right: 5px; }
        
        /* Tombol-Tombol */
        button { cursor: pointer; font-family: inherit; }
        .kotak_kecil button { background-color: #2ecc71; color: white; padding: 12px 20px; border: none; border-radius: 6px; font-size: 16px; width: 100%; font-weight: bold; transition: 0.3s; }
        .kotak_kecil button:hover { background-color: #27ae60; }
        
        /* Tombol Kembali */
        .btn-kembali { display: inline-block; background-color: #95a5a6; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; margin-bottom: 15px; font-size: 14px; transition: 0.3s; }
        .btn-kembali:hover { background-color: #7f8c8d; }

        /* Desain Tabel */
        .tabel { width: 100%; border-collapse: collapse; margin-top: 10px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        .tabel thead { background-color: #3498db; color: white; }
        .tabel th, .tabel td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ecf0f1; }
        .tabel tbody tr:hover { background-color: #f8f9fa; }
        .tabel a { padding: 6px 12px; text-decoration: none; border-radius: 4px; font-size: 13px; font-weight: bold; display: inline-block; text-align: center; }
        .tabel a[href*="edit"] { background-color: #f1c40f; color: #333; }
        .tabel a[href*="hapus"] { background-color: #e74c3c; color: white; }

        /* Media Query untuk Responsif di HP */
        @media (max-width: 768px) {
            .container-utama { flex-direction: column; }
            .sidebar { width: 100%; flex-direction: row; flex-wrap: wrap; justify-content: space-between; }
            .sidebar button { width: 48%; }
            .sidebar h2 { width: 100%; }
        }
    </style>
</head>
<body>

<div class='container-utama'>
    <div class='sidebar'>
        <h2>Klinik Medika</h2>
        <a href="index.php?aksi=dokter"><button>👩‍⚕️ Data Dokter</button></a>
        <a href="index.php?aksi=pasien"><button>🧑‍🦽 Data Pasien</button></a>
        <a href="index.php?aksi=poli"><button>🏥 Data Poliklinik</button></a>
        <a href="index.php?aksi=register"><button>📝 Pendaftaran</button></a>
    </div>

    <div class='konten'>
        <?php
            $aksi = @$_GET['aksi'];
            if($aksi == 'dokter'){ 
                include 'dokter_form.php';
            }else if($aksi == 'pasien'){
                include 'pasien_form.php'; 
            }else if($aksi == 'poli'){
                include 'poli_form.php';
            }else if($aksi == 'register'){
                include 'registrasi_form.php'; 
            }else{
                echo "<div class='kotak_besar' style='text-align:center;'>
                        <h2>Selamat Datang di Sistem Informasi Klinik</h2>
                        <p style='color:#7f8c8d; margin-top:10px;'>Silakan pilih menu di sebelah kiri untuk mengelola data.</p>
                      </div>";
            }
        ?>
    </div>
</div>

</body>
</html>