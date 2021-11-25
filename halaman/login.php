<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Amazing Kalsel</title>
	<!-- menghubungkan dengan file css -->
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/login.css">
    </head>
<body>
    <div class="top-wrapper">
        <div class="header">
 	<img src="../img/logoamazingkalsel.png" alt="logo">
</div>
  <div style="display: flex;">
  <div class="container-left">
    <img src="../img/login.png" alt="foto">
  </div>
  <aside>
        <div class ="card">
        <div class="container-right"> 
          <div calss="col-1">
         <center> <h1>LOGIN ADMIN</h1></center> <br>
            <form action="" method="POST">
              <div ="kotak">
             <input class="kotak" type="text" placeholder="Username" name="Username">
            </div>
            <br>
              <div ="kotak"> 
                <input class="kotak" type="text" placeholder="Password" name="Password"> <br>
              </div>
              <br>
              <div ="button">
              <button type="submit" class="button" value="Masuk" name="login"> Masuk</button> 
            </form>
            <?php
            if(isset($_POST['login'])){
              include '../config/database.php';
              $username = $_POST['Username'];
              $password = $_POST['Password'];

              $cek_user = mysqli_query( $conn,"SELECT * FROM users WHERE user_name='$username'");
              $row = mysqli_num_rows($cek_user);

              if( $row == 1){
                  $fetch_pass=mysqli_fetch_assoc($cek_user);
                  $cek_pass = $fetch_pass['password'];
                  if($cek_pass <> $password){
                    echo"<script>alert('Password Salah');</script>";
                  }else{
                    $_SESSION['log']=true;
                    echo"<script>alert('Login berhasil');document.location.href='berandaadmin.php'</script>";
                  }
              }else{
                echo"<script>alert('Anda Bukan Admin');</script>";
              }
            }
            ?>
</aside>
        </div>  
</div>   
    </body>
</html>
