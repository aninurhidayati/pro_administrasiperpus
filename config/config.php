<?php
    date_default_timezone_set('Asia/Jakarta');
    $seturl="http://".$_SERVER['HTTP_HOST'];
    $seturl.=str_replace(basename($_SERVER['SCRIPT_NAME']),
    "",$_SERVER['SCRIPT_NAME']);
    define("URL",$seturl);
?>

