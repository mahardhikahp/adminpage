<?php
session_start();
include 'koneksi.php';

$kode=$_POST['kode'];
$namabarang=$_POST['namabarang'];
$qty=$_POST['qty'];

mysqli_query($koneksi,"insert into data_barang(ID,kode,namabarang,qty) values ('','$kode','$namabarang','$qty')");

header("location:table.php")
?>
