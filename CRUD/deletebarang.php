<?php
session_start();
include 'koneksi.php';

$kode=$_GET['kode'];

mysqli_query("delete from data_barang WHERE kode='$kode' ");

header("location:table.php")
?>

