<?php
require_once("../config/config.php");
require_once("../config/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Perpus</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <style>
      .font{
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
        font-size: 26px;
      }
      .lengkung{
        border: 2px solid white;
        border-radius: 3px;
      }
    </style>
</head>
<body class="font">
<nav class="navbar navbar-expand-md navbar-dark bg-success ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand font" ><img src="../asset/book-with-lighbulb-cartoon-vector-icon-illustration-object-education-icon-concept-isolated-premium-vector-flat-cartoon-style_138676-4009.webp" width="60rem" height="60rem"> Admin Perpus</a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="btn btn-outline-light" aria-current="page" href="../admin/home.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="btn btn-outline-light" aria-current="page" href="../index.php">sign out</a>
        </li>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 my-4 mx-3">
            <?php
                include_once("menu.php");
            ?>
        </div>
        <div class="col-md-9">
        <?php
            if(isset($_GET['modul'])){
              include "".$_GET['modul']."/index.php";
            }
            
            ?>
        </div>
    </div>
</div>
</body>
<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>