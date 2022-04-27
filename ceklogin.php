<?php
    require_once("config/config.php");
    require_once("config/koneksi.php");
?>
<?php
    if(isset($_POST['btnlogin'])){
        $txt_user = $_POST['username'];
        $txt_pass = md5($_POST['password']);
        $result=mysqli_query($koneksi_db,"select * from mst_userlogin where username = '$txt_user' AND password =  '$txt_pass' ");
            if(mysqli_num_rows($result)>0){
                echo "hasil = ".mysqli_num_rows($result);
                header("Location: ".URL."admin/home.php");
            }else{
                header("Location: ".URL."");
        }
    }
?>