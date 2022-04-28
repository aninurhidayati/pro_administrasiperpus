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
    $judula = "Form Input Data Peminjam";
}
else if(isset($_GET['act']) && ($_GET['act'])=="edit"){
    $judula = "Form Edit Data Peminjam";
    $keyid = $_GET['id'];
    $qipem =mysqli_query($koneksi_db, "select *from mst_datapinjam where id_peminjam='$keyid'")
    or die(mysqli_error($koneksi_db));
    $data =mysqli_fetch_array($qipem);
}
else if(isset($_GET['act']) && ($_GET['act'])=="save"){
    $n_pinjam =$_POST['txt_nmpinjam'];
    $n_buku =$_POST['txt_nmbuku'];
    $tgl_buku =$_POST['txt_tglpinjam'];
    $qinsert =mysqli_query($koneksi_db, 
    "INSERT into mst_datapinjam (nm_peminjam,nm_buku,tgl_pinjam) VALUES ('$n_pinjam', '$n_buku', '$tgl_buku')")
    or die(mysqli_error($koneksi_db));
    if($qinsert){
        header ("Location: http:../home.php?modul=mod_peminjam");
    }
}
else if(isset($_GET['act']) && ($_GET['act'])=="update"){
    $keyid = $_POST['txt_id'];
    $n_pinjam =$_POST['txt_nmpinjam'];
    $n_buku =$_POST['txt_nmbuku'];
    $tgl_buku =$_POST['txt_tglpinjam'];
    $qiup =mysqli_query($koneksi_db, "UPDATE mst_datapinjam set nm_peminjam='$n_pinjam', nm_buku='$n_buku', tgl_buku='$tgl_buku' 
    WHERE id_peminjam=$keyid") or die(mysqli_error($koneksi_db));
    if($qiup){
        header("location: http:../home.php?modul=mod_peminjam");
    }
}
else if(isset($_GET['act']) && ($_GET['act'])=="delete"){
    $keyid = $_GET['id'];
    $qidel = mysqli_query($koneksi_db, "DELETE from mst_datapinjam WHERE id_peminjam=$keyid")
    or die(mysqli_error($koneksi_db));
    if($qidel){
        header("location: http:../home.php?modul=mod_peminjam");
    }
}
?>  