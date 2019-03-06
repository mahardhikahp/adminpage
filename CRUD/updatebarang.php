<?php
session_start();
include 'koneksi.php';

$kode=$_POST['kode'];
$namabarang=$_POST['namabarang'];
$qty=$_POST['qty'];

mysqli_query($koneksi,"update data_barang set kode='$kode', namabarang='$namabarang',qty='$qty'");

header("location:table.php")
?>

