<?php
	$server = "us-cdbr-east-04.cleardb.com";
	$user = "b2a147e23ecf94";
	$pass = "18cef105";
	$database = "heroku_c2f277e1c35a3e7";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
?>
