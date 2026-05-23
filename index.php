<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    <link rel="stylesheet" href="style.css">
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