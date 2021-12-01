<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Beranda Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/berandaadmin.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2><img src="../img/logoamazingkalselputih.png"></a></h2>
        <div class="menu">
          <ul>
            <li><a href="berandaadmin.php"><img src="../img/admin/icon-home.png">Home</a></li>
            <li><a href="alamadmin.php"><img src="../img/admin/icon-alam.png">Alam</a></li>
            <li><a href="kulineradmin.php"><img src="../img/admin/icon-kuliner.png">Kuliner</a></li>
            <li><a href="religiadmin.php"><div class="religi"><img src="../img/admin/icon-religi.png">Religi</div></a></li>
          </ul> 
        </div>
    </div>
    <div class="main_content">
        <div class="header1">
          <b>Admin</b>
		<a href="../config/logout.php">	
		<button type="button" name="logout">Logout</button>
		</a>
        </div>  
        <div class="header2">
          <b>Hello, Admin</b>
        </div>

        <div class="container">
          <div class="col-1">
            <div class="kotak"><img src="../img/admin/icon-home.png"></div>
            <br><h3><a href="../index.php">Beranda Traveler</a></h3>
            <br><p>Beranda Traveler adalah tab utama ketika traveler pertama kali mengakses website.</p>
          </div>
          <div class="col-2">
            <div class="kotak"><img src="../img/admin/icon-alam.png"></div>
            <br><h3><a href="../halaman/alam.php">Alam</a></h3>
            <br><p>Rekomendasi destinasi wisata yang berhubungan dengan alam, seperti pantai, sungai, air terjun, gunung, dan masih banyak lagi.</p>
          </div>
        </div>

        <div class="container">
          <div class="col-3">
            <div class="kotak"><img src="../img/admin/icon-kuliner.png"></div>
            <br><h3><a href="../halaman/kuliner.php">Kuliner</a></h3>
            <br><p>Rekomendasi tempat wisata kuliner tradisional khas Kalimantan Selatan.</p>
          </div>
          <div class="col-4">
            <div class="kotak1"><img src="../img/admin/icon-religi.png"></div>
            <br><h3><a href="../halaman/religi.php">Religi</a></h3>
            <br><p>Rekomendasi destinasi wisata yang berhubungan dengan tempat ibadah dan kegiatan atau event keagamaan.</p>
          </div>
        </div>

    </div>
</div>

</body>
</html>
