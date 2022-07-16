<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010038";
$db = "klinik_312010038";
$conn = mysqli_connect('localhost','adminklinik','312010038','klinik_312010038');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();

} else echo "";
?>