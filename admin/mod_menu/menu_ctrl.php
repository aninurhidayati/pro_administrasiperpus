<?php
    if(isset($_GET['act']) && ($_GET['act']== "update" || $_GET['act'] == "save")){
            require_once "../../config/config.php";
            require_once "../../config/koneksi.php";
        }
        else{
            require_once "../config/config.php";
            require_once "../config/koneksi.php";
    }
//Fungsi CRUD
if(isset($_GET['act']) && ($_GET['act'])=="add"){
    $judula = "Form Input Data Menu";
}
else if(isset($_GET['act']) && ($_GET['act'])=="edit"){
    $judula = "Form Edit Data Menu";
    $keyid = $_GET['id'];
    $qimen =mysqli_query($koneksi_db, "select *from mst_menu where id_menu='$keyid'")
    or die(mysqli_error($koneksi_db));
    $data =mysqli_fetch_array($qimen);
    $aktif=$data['isActive'];
    if($aktif == 1){
        $check="checked";
    }
    else{
        $check="";
    }
}
else if(isset($_GET['act']) && ($_GET['act'])=="save"){
    $nmenu =$_POST['txt_menu'];
    $nlink =$_POST['txt_link'];
    if(isset($_POST['ck_aktif'])){
        $aktif=1;
    }else{
        $aktif=0;
    }
    $datainsert=mysqli_query($koneksi_db,
    "INSERT into mst_menu (nm_menu,link,isActive) VALUES ('$nmenu', '$nlink', '$aktif')")
    or die(mysqli_error($koneksi_db));
    if($datainsert){
        header("Location: http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_menu");
    }
}
else if(isset($_GET['act']) && ($_GET['act'])=="update"){
    $keyid =$_POST['txt_id'];
    $nmenu =$_POST['txt_menu'];
    $nlink =$_POST['txt_link'];
    if(isset($_POST['ck_aktif'])){
        $aktif=1;
    }
    else{
        $aktif=0;
    }
    $qiup =mysqli_query($koneksi_db, "UPDATE mst_menu set nm_menu='$nmenu', link='$nlink',isActive='$aktif'
    WHERE id_menu=$keyid") or die(mysqli_error($koneksi_db));
    if($qiup){
        header("location: http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_menu");
    }
}
else if(isset($_GET['act']) && ($_GET['act'])=="delete"){
    $keyid = $_GET['id'];
    $qidel = mysqli_query($koneksi_db, "DELETE from mst_menu WHERE id_menu=$keyid")
    or die(mysqli_error($koneksi_db));
    if($qidel){
        header("location: http://localhost/project_uts/pro_administrasiperpus/admin/home.php?modul=mod_menu");
    }
}
?>