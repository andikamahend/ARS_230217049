
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
	
	<div class='kotak_besar'>
		<h3 style='text-align:center'>INPUT DATA POLIKLINIK</h3>
		<form method='POST' action='poli_simpan.php'>

			<input type="hidden" value="<?= $data['id_klinik'] ?>" name="id_klinik" id="id_klinik" />
			
			<div class='kotak_kecil'>
				<label>Nama Poli</label>
				<input type="text" name="nama_klinik" id="nama_klinik" required />
			</div>
			
			<div class="kotak_kecil">
				<button>Simpan Poli</button>
			</div>

		</form>
	</div>

	<hr>
	<div class="kotak_besar" style='background:white'>
		<?php
			include 'poli_data.php';
		?>
	</div>
</body>