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
    $judula="Form Input Data User";
    }
    else if(isset($_GET['act']) && ($_GET['act']=="edit")){
        $judulb="Form Input Data User";
        $idkey=$_GET['id'];
        $quser=mysqli_query($koneksi_db,"select * from mst_userlogin where id_user= '$idkey'") or die(mysqli_error($koneksi_db));
        $data=mysqli_fetch_array($quser);
        $aktif=$data['is_active'];
        if($aktif == 1){
            $check="checked";
        }
        else{
            $check="";
        }
    }
    else if(isset($_GET['act']) && ($_GET['act'])=="save"){
        $username=$_POST['txt_user'];
        $password=$_POST['txt_pass'];
            if(isset($_POST['ck_aktif'])){
                $aktif=1;
            }else{
                $aktif=0;
            }
        $datainsert=mysqli_query($koneksi_db,
        "INSERT into mst_userlogin (username,password,is_active) VALUES('$username','$password','$aktif')")
        or die (mysqli_error($connect_db));
            if($datainsert){
                    header("Location: http:../home.php?modul=mod_userlogin");
                }
        }
       else if(isset($_GET['act']) && ($_GET['act']=="update")){
           $userid=$_POST['id_user'];
           $up_user=$_POST['txt_user'];
           $up_pass=$_POST['txt_pass'];
           if(isset($_POST['ck_aktif'])){
               $aktif=1;
           }
           else{
               $aktif=0;
           }
           $dataupdate=mysqli_query($koneksi_db,"UPDATE mst_userlogin SET username='$up_user',password='$up_pass',is_active='$aktif' WHERE id_user='$userid'");
           if($dataupdate){
               header("Location:http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_userlogin");
           }
       }
       else if(isset($_GET['act']) && ($_GET['act']=="delete")){
           $id_user=$_GET['id'];

           $datadelete=mysqli_query($koneksi_db,
           "DELETE FROM mst_userlogin WHERE id_user='$id_user' ");
           if($datadelete){
               header("Location:http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_userlogin");
           }
       }
       

?>