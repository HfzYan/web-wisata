<!DOCTYPE html>
<?php
  include '../config/database.php'
?>
<?php session_start();
	if($_SESSION["login"] <> 1){
		header('Location: login.php');
	}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit</title>
  <link rel="stylesheet" type="text/css" href="../css/edit.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="wrapper">
  <div class="main_content">
    <div class="header1">
          <b class="judul">Edit Info Wisata Kuliner</b> 
          <b class="admin"><?php echo $_SESSION["name"] ?></b>
		        <a href="../config/logout.php">	
		          <button type="button" name="logout">Logout</button>
		        </a>
        </div>
  </div>
</div>

<br>
<?php 
  
  $fetch = $koneksi->query("SELECT * FROM wisata_kuliner WHERE id='$_GET[id]'");
  $data = mysqli_fetch_array($fetch);
?>
<div class="container">
  <div class="card" style="box-shadow: 0 5px 10px rgba(65, 60, 60, 0.2);">

      <div class="card-header" style="background-color: #7C1212">
        <label></label>
      </div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
                    <label for="gambar">Gambar Wisata</label>
                      <input type="file" name="gambar" class="form-control">
                        <br>
                        <img src="<?php echo $data['gambar'] ?>" height="60" width="60">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Wisata</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="7"><?php echo $data['deskripsi'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                        <br>
                        <textarea type="text" name="alamat" class="form-control" rows="7"><?php echo $data['alamat'] ?></textarea>
                </div>
        
          <br>
        <p align="right">
          <button class="btn btn-success" name="edit">Edit Data</button>
        </p>
      </form>
      <?php 
      if(isset($_POST['edit'])){

        $name = $_POST['nama'];
                $desc = $_POST['deskripsi'];
                $loc = $_POST['alamat'];
                $namagambar = $_FILES['gambar']['name'];
        $lokasigambar = $_FILES['gambar']['tmp_name'];
        $folder = '../img/wisata-kuliner/';

        if (!empty($lokasigambar)) {
         move_uploaded_file($lokasigambar, $folder.$namagambar);

          $koneksi->query("UPDATE wisata_kuliner SET
                        nama = '$name',
                        deskripsi = '$desc',
                        alamat = '$loc',
                        gambar = '$folder/$namagambar'
                        WHERE id = '$_GET[id]'");
        }
            else{
              $koneksi->query("UPDATE wisata_kuliner SET nama = '$_POST[nama]',
                        deskripsi = '$_POST[deskripsi]',
                        alamat = '$_POST[alamat]'
                        WHERE id = '$_GET[id]'");
            }
                echo "<script>document.location= '../halaman/kulineradmin.php';</script>";
            }
      ?>
    </div>
  </div>
</div>

<br><br>
      <!--input data selesai-->
</body>
</html>
