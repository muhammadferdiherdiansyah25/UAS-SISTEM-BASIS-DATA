<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Menampilkan data dari database</title>
	<style>
		.hero {
			background-color: 	#00FF00;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
	<h2 align="center" class="hero">Tabel Berobat</h2>
	</header>
	<div class="btn-toolbar mb-2 mb-md-10">
        <a class="btn btn-primary mr-3" href="dashboard.php" role="button">Kembali</a>
        <a class="btn btn-primary " href="berobat_tambah.php" role="button">Tambah</a>
	</div> 
	<hr>
	<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
				<tr>
					<td>No</td>
					<td>Id Berobat</td>
					<td>Id Pasien</td>
					<td>Id Dokter</td>
					<td>Tanggal Berobat</td>
					<td>Keluhan Pasien</td>
					<td>Hasil Diagnosa</td>
					<td>Penatalaksanaan</td>  
					<td>Aksi</td>             
				</tr>
			</thead>
			<?php
			include "koneksi.php";
			$no = 1;
			$query = mysqli_query($conn, 'SELECT * FROM berobat');
			while ($data = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id_berobat'] ?></td>
					<td><?php echo $data['id_pasien'] ?></td>
					<td><?php echo $data['id_dokter'] ?></td>
					<td><?php echo $data['tgl_berobat'] ?></td>
					<td><?php echo $data['keluhan_pasien'] ?></td>
					<td><?php echo $data['hasil_diagnosa'] ?></td>
					<td><?php echo $data['penatalaksanaan'] ?></td>
                 <td>
                    <a class="btn btn-success" href="berobat_ubah.php?id=<?= $data['id_berobat'];?>" role="button"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
					<a class="btn btn-danger" href="berobat_hapus.php?id=<?= $data['id_berobat'];?>" role="button"><i class="fa-solid fa-trash-can"></i>Hapus</a>
                </td>   
				</tr>
                
			<?php } ?>
		</table>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>