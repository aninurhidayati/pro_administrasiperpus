<?php
if(isset($_GET['act']) && ($_GET['act']== "update" || $_GET['act'] == "save")){
        require_once "../../config/config.php";
        require_once "../../config/koneksi.php";
    }
    else{
        require_once "../config/config.php";
        require_once "../config/koneksi.php";
    }

    // fungsi CRUD
    if(isset($_GET['act']) && ($_GET['act']=="add")){
        $judul1="Form Input Kategori Buku";
        }
        else if(isset($_GET['act']) && ($_GET['act']=="edit")){
            $judul="Form Edit Kategori Buku";
            $idkey=$_GET['id'];
            $qbuku=mysqli_query($koneksi_db,"select * from mst_kategbuku where id_buku= '$idkey'") or die(mysqli_error($koneksi_db));
            $databuku=mysqli_fetch_array($qbuku);
        }
        else if(isset($_GET['act']) && ($_GET['act'])=="save"){
            $nambuk=$_POST['txt_nmbuku'];
            $katbuku=$_POST['txt_katbuku'];
              
            mysqli_query($koneksi_db,"INSERT into mst_kategbuku (nm_buku,kt_buku) VALUES ('$nambuk','$katbuku')") or die (mysqli_error($connect_db));
            
            header("Location: http:../home.php?modul=mod_katbuku");
        }
           else if(isset($_GET['act']) && ($_GET['act']=="update")){
               $idbuk=$_POST['id_buku'];
               $up_nmbuku=$_POST['txt_nmbuku'];
               $up_katbuku=$_POST['txt_katbuku'];
               
            mysqli_query($koneksi_db,"UPDATE mst_kategbuku SET nm_buku='$up_nmbuku',kt_buku='$up_katbuku' WHERE id_buku='$idbuk'");
            
            header("Location: http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_katbuku");
        }
           else if(isset($_GET['act']) && ($_GET['act']=="delete")){
               $idbuku=$_GET['id'];
    
               $datadelete=mysqli_query($koneksi_db,
               "DELETE FROM mst_kategbuku WHERE id_buku='$idbuku' ");
            
            header("Location: http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_katbuku");
           }
        ?>