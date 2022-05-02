<?php
if(isset($_GET['act']) && ($_GET['act']== "update" || $_GET['act'] == "save")){
    require_once "../../config/config.php";
    require_once "../../config/koneksi.php";
}
else{
    require_once "../config/config.php";
    require_once "../config/koneksi.php";
}
//fungsi CRUD
    if(isset($_GET['act']) && ($_GET['act'])=="add"){
        $judula = "Form Input Data Anggota";
        
    }
    else if(isset($_GET['act']) && ($_GET['act'])=="edit"){
        $judula = "Form Edit Anggota";
        $keyid = $_GET['id'];
        $qiagt = mysqli_query($koneksi_db, "select *from mst_dataagt where id_anggota='$keyid'")
        or die(mysqli_error($koneksi_db));
        $data = mysqli_fetch_array($qiagt);
    }
    else if(isset($_GET['act']) && ($_GET['act']=="save")){
        $nmagt = $_POST['txt_agt'];
        $stsagt = $_POST['txt_status'];
        $qiagt = mysqli_query($koneksi_db, "INSERT into mst_dataagt(nm_anggota,status_anggota) VALUES ('$nmagt','$stsagt')");
        if($qiagt){
            header("Location:http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_anggota");
        }
    }
    else if(isset($_GET['act']) && ($_GET['act'])=="update"){
        $idagt= $_POST['txt_idagt'];
        $nmagt= $_POST['txt_agt'];
        $stsagt= $_POST['txt_status'];
        $qiagt= mysqli_query($koneksi_db, "UPDATE mst_dataagt set nm_anggota='$nmagt', status_anggota='$stsagt' WHERE id_anggota=$idagt")
        or die(mysqli_error($koneksi_db));
        if($qiagt){
            header("Location:http://localhost/project_uts_AdministrasiPerpus/pro_administrasiperpus/admin/home.php?modul=mod_anggota");
        }
    }
    else if(isset($_GET['act']) && ($_GET['act'])=="delete"){
        $keyid= $_GET['id'];
        $qidel= mysqli_query($koneksi_db, "DELETE from mst_dataagt WHERE id_anggota=$keyid")
        or die(mysqli_error($koneksi_db));
        if($qidel){
            header("Location:http://localhost/project_uts_AdministrasiPerpus/pro_administrasiperpus/admin/home.php?modul=mod_anggota");
        }
    } 
?>