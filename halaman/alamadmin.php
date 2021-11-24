<!DOCTYPE html>
<?php //include '../config/Controller.php' ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alam Admin</title>
	<link rel="stylesheet" type="text/css" href="../amazingkalsel/css/alamadmin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body >

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

          <b class="judul">ALAM</b> 

          
          <b class="admin">Admin</b><a type="button" href="tesalamadmin.php?id=1">Logout</button></a>

        </div>
         <button type="button" class="addbutton" data-toggle="modal" data-target="#exampleModal">
          + Tambah
        </button> 
        <a href=#>
        <button type="button" class="addbutton" href=#>
          <- Tampilan Halaman Alam
        </button> 
        </a>
        
        <table class="content-table">
        <thead>
          <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>ALAMAT</th>
            <th>DESKRIPSI</th>
            <th>GAMBAR</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Objek Wisata Alam</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </tr>
          <tr>
            <td width="3%">id</td>
            <td width="40%">judul</td>
            <td><a href=#>Alamat</a></td>
            <td><a href=#>Deskripsi</a></td>
            <td><a href=#>Gambar</a></td>
            <td><button class="editbutton"data-toggle="modal" data-target="#exampleModal">Edit</button><button class="hapusbutton">Hapus</button></td>
          </tr>
        <!-- <tr class="active-row"> -->
          <tr>
            <td width="3%">id</td>
            <td width="40%">judul</td>
            <td><a href=#>Alamat</a></td>
            <td><a href=#>Deskripsi</a></td>
            <td><a href=#>Gambar</a></td>
            <td><button class="editbutton"data-toggle="modal" data-target="#exampleModal">Edit</button><button class="hapusbutton">Hapus</button></td>
          </tr>
          <tr>
            <td width="3%">id</td>
            <td width="40%">judul</td>
            <td><a href=#>Alamat</a></td>
            <td><a href=#>Deskripsi</a></td>
            <td><a href=#>Gambar</a></td>
            <td><button class="editbutton" data-toggle="modal" data-target="#exampleModal">Edit</button><button class="hapusbutton">Hapus</button></td>
          </tr>
        </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
