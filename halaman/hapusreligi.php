<?php
	include '../config/database.php';
	$fetch = $koneksi->query("SELECT * FROM wisata_religi WHERE id='$_GET[id]'");
	$isi = $fetch->fetch_assoc();
	$pic = $isi['gambar'];
	if (file_exists("../img/wisata-religi/$pic")) {
		unlink("../img/wisata-religi/$pic");
	}

	$koneksi->query("DELETE FROM wisata_religi WHERE id='$_GET[id]'");


	echo "<script>alert('Data Terhapus');</script>";
	echo "<script>location='../halaman/religiadmin.php';</script>";
?>
