<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>THOT</title>

    <style> 

  </style>
  </head>
  <body>
 
<div class="container">
  <a href="tambahbarang.php"> Tambah Barang </a>
<div class="table-resposive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">kode</th>
      <th scope="col">namabarang</th>
      <th scope="col">qty</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'koneksi.php';
    $no=1;
    $data= mysqli_query($koneksi,"select * from data_barang");
    while($d= mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo$d ['kode']; ?></td>
      <td><?php echo$d ['namabarang']; ?></td>
      <td><?php echo$d ['qty']; ?></td>
      <td>
        <a href="formupdate.php?id=<?php echo $d['ID'];?>">EDIT</a>
        <a href="deletebarang.php?id=<?php echo $d['ID'];?>">HAPUS</a>
      </td>
    </tr>
    <?php
}
?>

  </tbody>
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js""></script>
    <script src="js/angular.min.js"></script>
  </body>
</html>