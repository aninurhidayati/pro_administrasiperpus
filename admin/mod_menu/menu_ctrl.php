<?php
    if(isset($_GET['act']) && ($_GET['act']== "update" || $_GET['act'] == "save")){
            require_once "../../config/config.php";
            require_once "../../config/koneksi.php";
        }
        else{
            require_once "../config/config.php";
            require_once "../config/koneksi.php";
    }
?>