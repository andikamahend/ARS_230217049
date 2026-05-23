<head>
    <title>Input Data Registrasi</title>
    <style>
        /* Gaya Font Umum */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; }
        
        /* --- KOTAK FORM (PINK) --- */
        .kotak-pink {
            max-width: 650px;
            background-color: #ffb6c1; /* Warna background pink */
            border: 2px solid #2c3e50; /* Border luar hitam/biru gelap */
            border-radius: 12px;
            margin: 30px auto;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .kotak-pink h3 {
            text-align: center;
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 20px;
        }

        /* Grup input sejajar */
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .form-group label {
            width: 150px; /* Lebar label dibuat sama semua agar rata */
            font-weight: 600;
            color: #2c3e50;
        }
        .form-group input, .form-group select {
            flex: 1; /* Input memakan sisa ruang secara otomatis */
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        /* Tombol Simpan */
        .btn-simpan {
            width: 100%;
            background-color: #2ecc71; /* Warna hijau */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }
        .btn-simpan:hover { background-color: #27ae60; }

        /* --- KOTAK TABEL (PUTIH) --- */
        .judul-tabel {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
            margin-top: 40px;
            margin-bottom: 15px;
        }
        .kotak-putih {
            max-width: 900px;
            background-color: white;
            border: 2px solid #2c3e50; /* Border tabel */
            border-radius: 12px;
            margin: 0 auto 40px auto;
            padding: 0; 
            overflow: hidden; /* Penting agar header tabel melengkung ikut kotak */
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        /* Desain Tabel */
        table.tabel-data {
            width: 100%;
            border-collapse: collapse;
        }
        table.tabel-data th, table.tabel-data td {
            padding: 15px 20px; /* Jarak lega di dalam tabel */
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0; /* Garis vertikal antar kolom */
        }
        table.tabel-data th:last-child, table.tabel-data td:last-child {
            border-right: none; /* Hilangkan garis vertikal paling kanan */
        }
        table.tabel-data th {
            background-color: #3498db; /* Warna biru header */
            color: white;
            border-right: 1px solid #2980b9;
        }

        /* Tombol Aksi */
        .btn-edit {
            background-color: #f1c40f; /* Warna kuning */
            color: #333;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 13px;
            display: inline-block;
        }
        .btn-hapus {
            background-color: #e74c3c; /* Warna merah */
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 13px;
            display: inline-block;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    
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

</body>