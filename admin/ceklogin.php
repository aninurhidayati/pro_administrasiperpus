<?php
require_once("../config/config.php");
require_once("../config/koneksi.php");

?>
<?php
    

    // $txt_user = $_GET['ussername'];
    // $txt_pass = md5($_GET['password']);
if(isset($_POST['btnlogin'])){
    $txt_user = $_POST['username'];
    $txt_pass = md5($_POST['password']);
    $result=mysqli_query($koneksi_db,"select * from mst_userlogin where username = '$txt_user' AND password =  '$txt_pass' ");
        if(mysqli_num_rows($result)>0){
            echo "hasil = ".mysqli_num_rows($result);
            header("Location: ".URL."home.php");
        }else{
            header("Location: ".URL."");
    }
}
    // $_server['HTTP_HOST']
    // echo $txt_user;
    // echo $txt_pass;
    //     if($txt_user == $userdb && $txt_pass == $passdb){
    //         echo "login berhasil";
    //         header ("Location: http://localhost/admin/admin/home.php");
    //     }
    //     else{
    //         echo "login gagal";
    //         header ("Location: http://localhost/latihan_webphp/admin");
    //     }  
?>