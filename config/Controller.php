<?php 
    include 'database.php';

    $lokasi = basename($_SERVER['PHP_SELF']);
    //Pembagian halaman
    switch($lokasi){
      case "alamadmin.php":
            echo 'CRUID bagian sini';
            break;
        case "login.php":
            echo 'resya bagian sini';
            break;
        case "info.php":
            echo 'gerin bagian sini';
             break;
        
        
    }
    ?>
