<head>
	<title>Input Data Registrasi</title>
	<style>
		.kotak_kecil { margin-bottom:10px }
		label { display:inline-block; width:130px }
		.kotak_besar{ width:600px; border: solid 2px black; border-radius:10px; margin:0 auto; padding:10px; background:pink }
		input, select { height:30px; width:300px; }
	</style>
</head>
<body>
	<div class='kotak_besar'>
		<h3 style='text-align:center'>INPUT DATA PENDAFTARAN</h3>
		<form method='POST' action='registrasi_simpan.php'>
			
			<div class='kotak_kecil'>
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
			
			<div class='kotak_kecil'>
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

			<div class='kotak_kecil'>
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

			<div class='kotak_kecil'>
				<label>Tgl Pendaftaran</label>
				<input type="date" name="tgl_pendaftaran" required />
			</div>

			<div class="kotak_kecil">
				<button type="submit">Simpan Pendaftaran</button>
			</div>
		</form>
	</div>

	<hr>
	<h3 align='center'>DATA PENDAFTARAN</h3>
	<div class="kotak_besar" style='background:white; width: 850px;'>
		<?php include 'registrasi_data.php'; ?>
	</div>
</body>