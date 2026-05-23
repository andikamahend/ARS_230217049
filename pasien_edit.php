<head>
	<title>Form Edit Pasien</title>
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
			width: 300px;
		}
		select{
			height:30px;
			width: 300px;
		}
		textarea{
			width: 300px;
			height: 60px;
		}
		.radio-label {
			width: auto;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<?php
		include 'koneksi.php';
		$id = $_GET['id'];

		$ambilData = mysqli_query($konek,"SELECT * FROM pasien WHERE no_rm='$id'");
		$data = mysqli_fetch_array($ambilData);
	?>
	<div class='kotak_besar'>
		<h3 style='text-align:center'>EDIT DATA PASIEN</h3>
		<form method='POST' action='pasien_update.php'>

			<input type="hidden" value="<?= $data['no_rm'] ?>" name="no_rm_lama" />
			
			<div class='kotak_kecil'>
				<label>No RM</label>
				<input type="text" value="<?= $data['no_rm'] ?>" name="no_rm" id="no_rm" required />
			</div>

			<div class='kotak_kecil'>
				<label>Nama Pasien</label>
				<input type="text" value="<?= $data['nama_pasien'] ?>" name="nama_pasien" id="nama_pasien" required />
			</div>

			<div class='kotak_kecil'>
				<label>Tempat Lahir</label>
				<input type="text" value="<?= $data['Tempat_Lahir'] ?>" name="Tempat_Lahir" id="Tempat_Lahir" required />
			</div>

			<div class='kotak_kecil'>
				<label>Tanggal Lahir</label>
				<input type="date" value="<?= $data['Tgl_Lahir'] ?>" name="Tgl_Lahir" id="Tgl_Lahir" required />
			</div>

			<div class='kotak_kecil'>
				<label>Alamat</label>
				<textarea name="Alamat" id="Alamat" required><?= $data['alamat'] ?></textarea>
			</div>

			<div class='kotak_kecil'>
				<label>Jenis Kelamin</label>
				<label class="radio-label">
					<input type="radio" value="Laki-laki" name="jenkel" <?= ($data['jenkel'] == 'Laki-laki') ? 'checked' : '' ?> /> Laki-laki
				</label>
				<label class="radio-label">
					<input type="radio" value="Perempuan" name="jenkel" <?= ($data['jenkel'] == 'Perempuan') ? 'checked' : '' ?> /> Perempuan
				</label>
			</div>

			<div class='kotak_kecil'>
				<label>Agama</label>
				<select name='agama' id='agama' required>
					<option value=''>--Pilih--</option>
					<option value='Islam' <?= ($data['agama'] == 'Islam') ? 'selected' : '' ?>>Islam</option>
					<option value='Kristen' <?= ($data['agama'] == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
					<option value='Khatolik' <?= ($data['agama'] == 'Khatolik') ? 'selected' : '' ?>>Khatolik</option>
					<option value='Hindu' <?= ($data['agama'] == 'Hindu') ? 'selected' : '' ?>>Hindu</option>
					<option value='Budha' <?= ($data['agama'] == 'Budha') ? 'selected' : '' ?>>Budha</option>
					<option value='Lainnya' <?= ($data['agama'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
				</select>
			</div>
			
			<div class="kotak_kecil">
				<button>Update Data</button>
			</div>

		</form>
	</div>

	<hr>
	<div class="kotak_besar" style='background:white'>
		<?php
			include 'pasien_data.php';
		?>
	</div>
</body>