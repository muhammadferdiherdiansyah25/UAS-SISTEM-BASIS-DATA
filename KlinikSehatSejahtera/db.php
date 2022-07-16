<?php

$conn = mysqli_connect('localhost','adminklinik','312010038','klinik_312010038');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>