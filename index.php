

<div style='width:100%;height:100%;display:inline-flex'>
    <div style='width:20%;background:pink;padding:10px;'>
        <a href="index.php?aksi=dokter">
            <button>Data Dokter</button>
        </a>
        <hr>

        <a href="index.php?aksi=pasien">
            <button>Data Pasien</button>
        </a>
        <hr>

        <a href="index.php?aksi=poli">
            <button>Data Poliklinik</button>
        </a>
        <hr>

        <a href="index.php?aksi=register">
            <button>Pendaftaran</button>
        </a>
        <hr>
    </div>

    <div style='backround:#fff000;width:80%:padding:10px'>
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
                echo 'Selamat Datang';
            }
        ?>
    </div>
</div>