<?php
    require_once("config/config.php");
    require_once("config/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css"/>
	  <link rel="stylesheet" href="asset/style.css"/>
</head>
<body>
  <div class="container d-flex justify-content-center mt-5 pt-5">
    <form action="ceklogin.php" method="POST">
      <div class="mb-3">
        <label for="" class="form-label"><h4>Form Login</h4></label>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
        <button type="submit" class="btn btn-primary" name="btnlogin">Submit</button>
    </form>      
  </div>
  <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>