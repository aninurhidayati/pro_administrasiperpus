<?php
    $username="localhost";
    $database="adminperpus";
    $user_db="root";
    $pass_db="";

    $koneksi_db=mysqli_connect($username,$user_db,$pass_db,$database);
        if(!$koneksi_db){
            echo "<h3>Silahkan coba lagi";
            exit;
    }
    mysqli_select_db($koneksi_db, $database);   
?>