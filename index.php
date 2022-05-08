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
	  <link rel="stylesheet" href="asset/bootstrap/css/style.css"/>
    <style>
      .font{
        font-family: 'Courier New', Courier, monospace;
        font-size: 20px;
        font-weight: 500;
      }
      .batas{
        border: 4px solid greenyellow;
        border-radius: 7px;
      }
      hr{
        color: white;
      }
      </style>
</head>
<body>
<div class="container">
      <div class="card form-login">
          <div class="card-body">
              <h3 class="card-title  text-center" style="border-bottom:3px solid #ED50F1 ;">L O G I N</h3>
                  <form action="ceklogin.php" method="POST">
                      <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" name="username" class="form-control">
                      </div>
                      <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control"><br>
                      </div>
                      <button type="submit" class="btn btn-outline-info" name="btnlogin">Submit</button>
                  </form>
            </div>
      </div>
</div>
  <!-- <div class="container-fluid d-flex justify-content-center mt-5 pt-5">
    <form action="ceklogin.php" method="POST">
      <div class="row bg-secondary bg-gradient batas text-white font">
          <div class="col-md-12">
            <label for="" class="form-label pt-2"><h4>Form Login</h4></label><hr>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control"><br>
                <button type="submit" class="btn btn-outline-info" name="btnlogin">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>      
    </div> -->
  <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>