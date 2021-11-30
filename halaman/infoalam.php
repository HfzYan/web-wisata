<!DOCTYPE html>
<?php include '../config/database.php' ?>

<?php $fetch = mysqli_query($koneksi,"SELECT * FROM wisata_alam WHERE id = '$_GET[id]';"); ?>
<html lang="en">
<head>
	<title>Amazing Kalsel - Alam</title>
    <!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="../css/infowisata.css">
</head>
<body>
<!-- Navbar -->
	<header>
		<img src="../img/logoamazingkalsel.png" alt="logo">
				<ul>
                    <li><a href="home.php?page=alam">Home</a></li>
					<li><a href="alam.php?page=alam">Alam</a></li>
					<li><a href="kuliner.php?page=kuliner">Kuliner</a></li>
					<li><a href="religi.php?page=religi">Religi</a></li>
				</ul>
	</header>
	<nav>
		<?php
			$data = mysqli_fetch_array($fetch);
		?>
		<div class="card" id="../halaman/infoalam.php?hal=info&id=<?php echo $data['id'] ?>">
			<div class="container" align="left"> 
				<h1><?php echo $data['nama'] ?></h1>
				<img src="<?php echo $data['gambar_2'] ?>" alt="gambar">
				<div style="display: flex;">
   					<div class="container-left">
	   					<table border="0,8">
   							<td><font><?php echo $data['deskripsi'] ?></font></td>
						</table>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<nav>
		<div class="card" id="../halaman/infoalam.php?hal=info&id=<?php echo $data['id'] ?>">
			<div class="center" align="center">
				<h1>Lokasi <?php echo $data['nama'] ?></h1>
				<?php echo $data['alamat']; ?>	
			</div>
	</nav>
	<div class="footer">
		<ul>
			<li><a>Copyright &#169; 2021 - Amazing Kalsel</a></li>
           	<img src="../img/icon-ig.png" alt="instagram">
		</ul>
    </div>
</body>
</html>
