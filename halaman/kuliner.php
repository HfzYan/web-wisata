<!DOCTYPE html>
<?php include '../config/database.php' ?>

<?php $fetch = mysqli_query($koneksi,"SELECT * FROM wisata_kuliner;"); ?>

<html lang="en">
<head>
	<title>Amazing Kalsel - Kuliner</title>
<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="../css/objek-wisata.css">
</head>
<body>
<!-- Navbar -->
 	<nav>
 		<a href="../index.php">
			<img src="../img/logoamazingkalsel.png" alt="logo">
				<ul>
					<li><a href="alam.php?page=alam">ALAM</a></li>
					<li><a href="kuliner.php?page=kuliner" class="active">KULINER</a></li>
					<li><a href="religi.php?page=religi">RELIGI</a></li>
				</ul>
			</nav>
<!-- Banner -->
      <div class="header">
          <img src="../img/banner-kuliner.png" width="100%" height="500">
      </div>

<!-- Konten -->
<div class="container">

    <div class="box-container">

        <?php 
            while($data = mysqli_fetch_array($fetch)):
        ?>
        
        <div class="box">
            <a href="../halaman/infokuliner.php?hal=info&id=<?php echo $data['id'] ?>" ><img src="<?php echo $data['gambar'] ?>" alt="">
            <h3><?php echo $data['nama'] ?></h3></a>
        </div>
        <?php endwhile ?>
	</div>
</div>

<!-- Footer -->
<div class="footer">
        
		<ul>
			<li><a>Copyright &#169; 2021 - Amazing Kalsel</a></li>
            <a href="https://instagram.com/amazingkalsel/">
            <img src="../img/icon-ig.png" alt="instagram">
		</ul>
        
	</div>
</div>
</body>
</html>
