<?php session_start();
if($_SESSION["login"] <> 1){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../config/database.php' ?>
<?php $fetch = mysqli_query($koneksi,"SELECT * FROM wisata_kuliner;"); ?>
<head>
	<meta charset="UTF-8">
	<title>Kuliner Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/alamadmin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body class="modal-open">
<div class="wrapper">
    <div class="sidebar">
        <h2><img src="../img/logoamazingkalselputih.png"></h2>
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

          <b class="judul">KULINER</b> 

          
          <b class="admin"><?php echo $_SESSION["name"] ?></b>
		
	<a href="../config/logout.php">	
		<button type="button" name="logout">Logout</button>
		</a>

        </div>
         
	     <a href="../halaman/inputkuliner.php"><button type="button" class="addbutton">+ Tambah</button></a>
          <a href='kuliner.php' target="_blank"><button type="button" class="addbutton" href=#>Tampilan Halaman Kuliner -></button></a>
        
        <table class="content-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>DESKRIPSI</th>
            <th>GAMBAR</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>

          <?php $nomor=1; ?>
          <?php while($data = mysqli_fetch_array($fetch)): ?>
          <tr>  
            <td width="3%"><?php echo $nomor ?></td>
            <td width="40%"><?php echo $data['nama'] ?></td>
            <td><a href="teskulineradmin.php?id=2" data-toggle="modal" data-target="#<?php echo $data['id'] ?>ModalAlamat">Alamat</a></td>
            <td><a href=# data-toggle="modal" data-target="#<?php echo $data['id'] ?>ModalDeskripsi">Deskripsi</a></td>
            <td><a href=# data-toggle="modal" data-target="#<?php echo $data['id'] ?>ModalGambar">Gambar</a></td>
            <td>
              <a href="../halaman/editkuliner.php?halaman=editkuliner&id=<?=$data['id'];?>" name="edit"><button class="editbutton" >Edit</button></a>
              <a href="../halaman/hapuskuliner.php?halaman=hapuskuliner&id=<?=$data['id'];?>"  onclick="return confirm('Yakin Hapus?')"><button type="button" class="hapusbutton">Hapus</button></a>
            </td>
          </tr>

          <?php include 'modal/modal-tabel.php' ?>
          <?php $nomor++; ?>
          <?php endwhile ?>

        <!-- <tr class="active-row"> -->
        </tbody>
      </table>
      <br><br>
    </div>
</div>
	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
