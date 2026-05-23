
<head>
	<title>form poli</title>
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

		$ambilData = mysqli_query($konek,"SELECT * FROM klinik WHERE id_klinik='$id'");
		$data = mysqli_fetch_array($ambilData);
	?>
	<div class='kotak_besar'>
		<h3 style='text-align:center'>EDIT DATA POLIKLINIK</h3>
		<form method='POST' action='poli_update.php'>

			<input type="hidden" value="<?= $data['id_klinik'] ?>" name="id_klinik" id="id_klinik" />
			
			<div class='kotak_kecil'>
				<label>Nama Poli</label>
				<input type="text" value="<?= $data['nama_klinik'] ?>" name="nama_klinik" id="nama_klinik" />
			</div>
			<div class="kotak_kecil">
				<button>Update Data</button>
			</div>

		</form>
	</div>

	<div class="kotak_besar" style='background:white'>
		<?php
			include 'poli_data.php';
		?>
	</div>
</body>