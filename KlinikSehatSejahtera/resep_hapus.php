<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM resep_obat WHERE id_resep='{$id}'";
	$result = mysqli_query($conn, $sql);
	header('location: resep_obat.php');
?>