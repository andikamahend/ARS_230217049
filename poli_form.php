<head>
    <title>Form Poliklinik</title>
    <style>
        /* Gaya Font Umum */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; }
        
        /* --- KOTAK FORM (PINK) --- */
        .kotak-pink {
            max-width: 500px; /* Lebar lebih kecil disesuaikan dengan isi form poli */
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
            margin-bottom: 15px;
            font-size: 20px;
        }

	 	.judul-tabel {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
            margin-top: 40px;
            margin-bottom: 15px;
        }
        
        /* Garis putih di bawah judul */
        .garis-putih {
            border: none;
            border-bottom: 2px solid white;
            margin-bottom: 20px;
        }

        /* Label atas, input bawah */
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block; /* Membuat label berada di atas input */
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            box-sizing: border-box; /* Agar padding tidak merusak lebar 100% */
        }

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
            transition: 0.3s;
        }
        .btn-simpan:hover { background-color: #27ae60; }

        /* --- KOTAK TABEL (PUTIH) --- */
        .kotak-putih {
            max-width: 600px;
            background-color: white;
            border: 2px solid #2c3e50;
            border-radius: 12px;
            margin: 0 auto 40px auto;
            padding: 0; 
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        /* Desain Tabel */
        table.tabel-data {
            width: 100%;
            border-collapse: collapse;
        }
        table.tabel-data th, table.tabel-data td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
        }
        table.tabel-data th:last-child, table.tabel-data td:last-child {
            border-right: none;
        }
        table.tabel-data th {
            background-color: #3498db;
            color: white;
            border-right: 1px solid #2980b9;
        }
        
        /* Agar tulisan di header tabel berada di tengah khusus untuk kolom Aksi */
        table.tabel-data th[colspan="2"] {
            text-align: left; /* Sesuaikan dengan gambar Anda */
        }

        /* Tombol Aksi */
        .btn-edit {
            background-color: #f1c40f;
            color: #333;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 13px;
            display: inline-block;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
        }
        .btn-hapus {
            background-color: #e74c3c;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 13px;
            display: inline-block;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    
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

</body>