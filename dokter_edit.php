
<head>
	<title>form dokter</title>
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
	<?php
		include 'koneksi.php';
		$id = $_GET['id'];

		$ambilData = mysqli_query($konek,"SELECT * FROM dokter WHERE id_dokter='$id'");
		$data = mysqli_fetch_array($ambilData);
	?>
	<div class='kotak_besar'>
		<h3 style='text-align:center'>EDIT DATA DOKTER</h3>
		<form method='POST' action='dokter_update.php'>

			<input type="hidden" value="<?= $data['id_dokter'] ?>" name="id_dokter" id="id_dokter" />
			
			<div class='kotak_kecil'>
				<label>Nama Dokter</label>
				<input type="text" value="<?= $data['nama_dokter'] ?>" name="nama_dokter" id="nama_dokter" />
			</div>
			<div class='kotak_kecil'>
				<label>Spesialis</label>
				<input type="text" value="<?= $data['spesialis'] ?>" name="spesialis" id="spesialis" />
			</div>
			
			<div class="kotak_kecil">
				<button>Update Data</button>
			</div>

		</form>
	</div>

	<div class="kotak_besar" style='background:white'>
		<?php
			include 'dokter_data.php';
		?>
	</div>
</body>