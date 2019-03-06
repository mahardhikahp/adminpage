<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Hello, world!</title>

    <style> 

    body {
      font-style:sans-serif;
    }

  </style>
  </head>
  <body>

    <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?>
 
<div class="container">
  <h3> LOGIN </h3>
  <br>
  <form class="form-horizontal"  method="POST"   action="ceklogin.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email/Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="input email/username" name="Username">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" col-sm-10 for="password">Password</label>
      <div class ="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="input password" name="Password">
      </div>
    </div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Login </button>
    </div>
</div>

<a href="formregister2.php"> Daftar baru </a>
</form>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js""></script>
  </body>
</html>