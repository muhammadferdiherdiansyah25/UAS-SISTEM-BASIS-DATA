<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM obat WHERE id_obat = '{$id}'";
	$result = mysqli_query($conn, $sql);
	header('location: obat.php');
?>