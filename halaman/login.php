<?php
session_start();
if($_SESSION["login"]==1){
	header('Location: berandaadmin.php');
}
?>

<!DOCTYPE html>
<?php include '../config/database.php'; ?>
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
              $username = $_POST['Username'];
              $password = $_POST['Password'];

              $account = mysqli_query($koneksi,"SELECT * FROM users WHERE user_name='$username'");
		   
                if(mysqli_num_rows($account) == 1){
                  $data = mysqli_fetch_assoc($account);

		  			if($password == $data['password']){
			  		$_SESSION["login"] = 1;
			  		$_SESSION["name"] = $data['name'];
			  		header('Location: ./berandaadmin.php');
		  			}
		  			else{
						echo " Wrong Password";
		  			}
		}
		else{
			echo " Invalid Username";
		}
            }
            ?>
</aside>
        </div>  
</div>   
    </body>
</html>
