<head>
    <title>Input Data Pasien</title>
    <style>
        /* Gaya Font Umum */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; }
        
        /* --- KOTAK FORM (PINK) --- */
        .kotak-pink {
            max-width: 700px;
            background-color: #ffb6c1; 
            border: 2px solid #2c3e50; 
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
            align-items: flex-start; /* Untuk textarea agar label tetap di atas */
            margin-bottom: 15px;
        }
        .form-group label.title-label {
            width: 150px; 
            font-weight: 600;
            color: #2c3e50;
            margin-top: 10px;
        }
        .form-group input, .form-group select, .form-group textarea {
            flex: 1; 
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            font-family: inherit;
        }
        .form-group textarea { height: 80px; resize: vertical; }

        /* Grup Radio Button */
        .radio-group {
            flex: 1;
            display: flex;
            gap: 20px;
            align-items: center;
            margin-top: 10px;
        }
        .radio-group label { cursor: pointer; color: #333; }
        .radio-group input { margin-right: 5px; cursor: pointer; }

        /* Tombol Simpan */
        .btn-simpan {
            width: 100%;
            background-color: #2ecc71; 
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
        .judul-tabel { text-align: center; font-size: 18px; font-weight: bold; color: #2c3e50; margin-top: 40px; margin-bottom: 15px; }
        .kotak-putih {
            max-width: 1100px; /* Diperlebar sedikit agar tabel tidak berdesakan */
            background-color: white;
            border: 2px solid #2c3e50; 
            border-radius: 12px;
            margin: 0 auto 40px auto;
            padding: 0; 
            overflow-x: auto; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        /* Desain Tabel */
        table.tabel-data { width: 100%; border-collapse: collapse; min-width: 900px; }
        table.tabel-data th, table.tabel-data td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e0e0e0; border-right: 1px solid #e0e0e0; }
        table.tabel-data th:last-child, table.tabel-data td:last-child { border-right: none; }
        table.tabel-data th { background-color: #3498db; color: white; border-right: 1px solid #2980b9; }
        table.tabel-data th[colspan="2"] { text-align: left; }

        /* Tombol Aksi Disamakan dengan Dokter */
        .btn-edit { background-color: #f1c40f; color: #333; padding: 8px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 13px; display: inline-block; width: 100%; text-align: center; box-sizing: border-box; }
        .btn-hapus { background-color: #e74c3c; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 13px; display: inline-block; width: 100%; text-align: center; box-sizing: border-box; }
    </style>
</head>
<body>
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
</body>