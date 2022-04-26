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
    <title>Document</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-secondary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Admin Perpus</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 my-4 mx-4">
            <?php
                include_once("menu.php");
            ?>
        </div>
        <div class="col-md-10 bg-info">
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