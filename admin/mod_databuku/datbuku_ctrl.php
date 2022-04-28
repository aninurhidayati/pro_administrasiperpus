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
    $judula="Form Input Data Buku";
    }
    else if(isset($_GET['act']) && ($_GET['act']=="edit")){
        $judulb="Form Input Data User";
        $idkey=$_GET['id'];
        $qbook=mysqli_query($koneksi_db,"select * from mst_databuku where id_buku= '$idkey'") or die(mysqli_error($koneksi_db));
        $datbuku=mysqli_fetch_array($qbook);
    }
    else if(isset($_GET['act']) && ($_GET['act'])=="save"){
        $j_buku=$_POST['txt_jbuku'];
        $p_buku=$_POST['txt_pbuku'];
        $pr_buku=$_POST['txt_prbuku'];
        $jml_buku=$_POST['txt_jmlbuku'];

        $datainsert=mysqli_query($koneksi_db,
        "INSERT into mst_databuku (judul_buku,penerbit_buku,pengarang_buku,jumlah_buku) VALUES('$j_buku','$p_buku','$pr_buku','$jml_buku')")
        or die (mysqli_error($connect_db));
            if($datainsert){
                    header("Location: http:../home.php?modul=mod_databuku");
                }
        }
       else if(isset($_GET['act']) && ($_GET['act']=="update")){
           $id_buku=$_POST['id_buku'];
           $up_jbuku=$_POST['txt_jbuku'];
           $up_pbuku=$_POST['txt_pbuku'];
           $up_prbuku=$_POST['txt_prbuku'];
           $up_jmlbuku=$_POST['txt_jmlbuku'];
          
           $dataupdate=mysqli_query($koneksi_db,"UPDATE mst_databuku SET judul_buku='$up_jbuku',penerbit_buku='$up_pbuku',pengarang_buku='$up_prbuku',jumlah_buku='$up_jmlbuku' WHERE id_buku='$id_buku'");
           if($dataupdate){
               header("Location:http://localhost/project_uts_AdministrasiPerpus/pro_administrasiperpus/admin/home.php?modul=mod_databuku");
           }
       }
       else if(isset($_GET['act']) && ($_GET['act']=="delete")){
           $id_buku=$_GET['id'];

           $datadelete=mysqli_query($koneksi_db,
           "DELETE FROM mst_databuku WHERE id_buku='$id_buku' ");
           if($datadelete){
               header("Location:http://localhost/project_uts_AdministrasiPerpus/pro_administrasiperpus/admin/home.php?modul=mod_databuku");
           }
       }
?>