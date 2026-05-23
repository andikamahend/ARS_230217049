
<head>
	<title>form pasien</title>
	<style>
		.kotak_kecil {
			margin-bottom:10px
		}
		label {
			display:inline-block;width:120px
		}
		.kotak_besar{
			width:500px;
			border: solid 2px black;
			border-radius:10px;
			margin:0 auto;
			padding:10px;
			background:pink
		}
		input{
			height:30px;
		}
		select{
			height:30px
		}
	</style>
</head>
<body>
	<div class='kotak_besar'>
	<h3 style='text-align:center'>INPUT DATA PASIEN</h3>
		<form method='POST' action='pasien_simpan.php'>
			<div class='kotak_kecil'>
				<label>No RM</label>
				<input type="number" name="no_rm" id="no_rm" required />
			</div>
			<div class='kotak_kecil'>
				<label>Nama Pasien</label>
				<input type="text" name="nama_pasien" id="nama_pasien" required />
			</div>
			<div class='kotak_kecil'>
				<label>Tempat Lahir</label>
				<input type="text" name="Tempat_Lahir" id="Tempat_Lahir" required />
			</div>
			<div class='kotak_kecil'>
				<label>Tanggal Lahir</label>
				<input type="date" name="Tgl_Lahir" id="Tgl_Lahir" required />
			</div>
			<div class='kotak_kecil'>
				<label>Alamat</label>
				<textarea name="Alamat" id="Alamat"></textarea required >
			</div>
			<div class='kotak_kecil'>
				<label>Jenis Kelamin</label>
				<label><input type="radio" value="Laki-Laki" name="jenkel" id="jenkel" />Laki-laki</label>
				<label><input type="radio" value="Perempuan" name="jenkel" id="jenkel" />Perempuan</label>
			</div>
			
			<div class='kotak_kecil'>
				<label>Agama</label>
				<select name='agama' id='agama' required>
					<option value=''>--Pilih--</option>
					<option value='Islam'>Islam</option>
					<option value='Kristen'>Kristen</option>
					<option value='Khatolik'>Khatolik</option>
					<option value='Hindu'>Hindu</option>
					<option value='Budha'>Budha</option>
					<option value='Lainnya'>Lainnya</option>
				</select>
			</div>
			<div class="kotak_kecil">
				<button>Simpan Data</button>
			</div>
		</form>
	</div>

	<hr>
	<h3 align= 'center'>DATA PASIEN</h3>
	<div class="box_besar">
		<?php
			include 'pasien_data.php';
		?>
	</div>
</body>