<?php
	include '../config/database.php';
	$fetch = $koneksi->query("SELECT * FROM wisata_kuliner WHERE id='$_GET[id]'");
	$isi = $fetch->fetch_assoc();
	$pic = $isi['gambar'];
	if (file_exists("../img/wisata-kuliner/$pic")) {
		unlink("../img/wisata-kuliner/$pic");
	}

	$koneksi->query("DELETE FROM wisata_kuliner WHERE id='$_GET[id]'");


	echo "<script>alert('Data Terhapus');</script>";
	echo "<script>location='../halaman/kulineradmin.php';</script>";
?>
