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


.container {
  font-style:sans-serif;
}

  </style>
  </head>
  <body>
 
<div class="container">
  <h3> REGISTER </h3>
  <br>
  <form class="form-horizontal" method="POST" action="registerbaru.php"> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="input username" name="username">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="email">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="email" placeholder="Password" name="password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Nama" name="nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
      </div>
    </div>
<div class="form-group">
  <div class="col-sm-6">
    <button type="submit" class="btn btn-default" Value="Save">Save </button>
    <a type="button" class="btn btn-default" href="formlogin.html">back </a>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js""></script>
  </body>
</html>