<!DOCTYPE html>
<?php include '../config/database.php' ?>
<?php session_start();
	if($_SESSION["login"] <> 1){
		header('Location: login.php');
	}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Input Data</title>
	<link rel="stylesheet" type="text/css" href="../css/edit.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="wrapper">
	<div class="main_content">
		<div class="header1">
          <b class="judul">Input Info Wisata Alam</b> 
          <b class="admin"><?php echo $_SESSION["name"] ?></b>
		<a href="../config/logout.php">	
		<button type="button" name="logout">Logout</button>
		</a>
        </div>
	</div>
</div>

<br>

<!-- Duplicate Warning -->
<?php if($_SESSION["errorDuplicate"] == 1){
  $_SESSION["errorDuplicate"] = 0; ?>
  <div class="row">
    <div class="alert alert-danger" role="alert">
        Nama Wisata Sudah Ada!
    </div>
  </div>
  <br>
  <?php
} ?>
<!-- End of Duplicate Warning -->

<div class="container">
	<div class="card" style="box-shadow: 0 5px 10px rgba(65, 60, 60, 0.2);">
  		<div class="card-header" style="background-color: #7C1212">
    		<label></label>
  		</div>
  		<div class="card-body">
    		<form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Gambar Wisata</label>
            <input type="file" name="gambar" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Wisata</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" type="text" name="deskripsi" rows="7"></textarea>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <br>
            <textarea type="text" name="alamat" class="form-control" rows="4"></textarea>
          </div>
				<br>
        <p align="right">
				  <button class="btn btn-success" type="submit" name="save" value="save">Simpan</button>
			  </p>
      </form>
      <?php 
        if(isset($_POST['save'])) {
		echo "ga ngapa ngapain tu man";
          $name = $_POST['nama'];
          $desc = $_POST['deskripsi'];
          $loc = $_POST['alamat'];
          $pic = $_FILES['gambar']['name'];
          $lokasigambar = $_FILES['gambar']['tmp_name'];
          $folder = '../img/wisata-alam/';

          //Is It Duplicate
          $isDuplicate = mysqli_query($koneksi,"SELECT $name FROM wisata_alam");
		echo $isDuplicate;
          
          if($isDuplicate){
            $_SESSION["errorDuplicate"] = 1;
            echo "<script>document.location= '../halaman/alamadmin.php';</script>";
          }
          else{
            move_uploaded_file($lokasigambar, $folder.$pic);
            $data = mysqli_query($koneksi,"INSERT INTO wisata_alam (nama, alamat, gambar, deskripsi) VALUES ('$name', '$loc', '$folder/$pic', '$desc')");
            if ($data) {
		    echo "berhasil tu man";
              echo "<script>document.location= '../halaman/alamadmin.php';</script>";
            }
            else{
		echo "gagal tu man";
              $_SESSION["errorDuplicate"] = 1;
            }
          }
          
        }
      ?>
		</div>
	</div>
</div>

<br><br>
			<!--input data selesai-->
</body>
</html>
