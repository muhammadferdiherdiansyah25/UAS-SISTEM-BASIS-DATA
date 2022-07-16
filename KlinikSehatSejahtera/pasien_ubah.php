<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $id 	= $_POST['id'];
	$nama 	= $_POST['nama_pasien'];

    $sql = 'UPDATE pasien SET ';
    $sql .= "nama_pasien = '{$nama}'" ;
    $sql .= "WHERE id_pasien = '{$id}'";
    $result = mysqli_query($conn, $sql);
    header('location: pasien.php');
}
    $id= $_GET['id'];
    $sql = "SELECT * FROM pasien WHERE id_pasien = '{$id}'";
    $result = mysqli_query($conn, $sql);
    if (!$result) die('Error: Data tidak tersedia');
    $data = mysqli_fetch_array($result);

    function is_select($var, $val) {
        if ($var == $val) return 'selected="selected"';
        return false;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
    <title>Ubah Pasien</title>
	<style>
	input[type=text], select {
  width: 20%;
  padding: 7px 7px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 5%;
  background-color: #4CAF50;
  color: white;
  padding: 7px 7px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<div>
	<div class="p-5 shadow">
		<header">
		<h2 align="center">Edit Data Pasien</h2>
		</header>
		<hr>
		<div class="main">
			<form method="post" action="ubah_pasien.php" enctype="multipart/form-data">
				<div class="input mb-3">
					<label class="col-sm-2 col-form-label">Nama Pasien</label>
					<input type="text" class="form-control" name="nama_pasien" value="<?php echo $data['nama_pasien'];?>"/>
				</div>
				<div class="input mb-3">
						<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
						<select name="jenis_kelamin">
						<option value="L">L</option>
						<option value="P">P</option>
						</select>
					</div>
					<div class="input mb-3">
						<label for="nama_pasien" class="col-sm-2 col-form-label">Umur</label>
						<input type="text" class="form-control" name="umur" value="<?php echo $data['umur'];?>"/>
					</div>
				<div class="submit">
					<input type="hidden" name="id" value="<?php echo $data['id_pasien'];?>" />
					<input type="submit" name="submit" value="Simpan" />
					<a href="pasien.php" role="button">Batal</a>
				</div>
			</form>
		</div>
	</div>	
</div>
</body>
</html>