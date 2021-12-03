<?php
	include '../config/database.php';
	$fetch = $koneksi->query("SELECT * FROM wisata_alam WHERE id='$_GET[id]'");
	$isi = $fetch->fetch_assoc();
	$pic = $isi['gambar'];
	if (file_exists("../img/wisata-alam/$pic")) {
		unlink("../img/wisata-alam/$pic");
	}

	$koneksi->query("DELETE FROM wisata_alam WHERE id='$_GET[id]'");


	echo "<script>alert('Data Terhapus');</script>";
	echo "<script>location='../halaman/alamadmin.php';</script>";
?>
