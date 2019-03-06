<?php 
session_start();
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$Username = $_POST['username'];
$Password = $_POST['password'];
$Nama = $_POST['nama'];
$Email = $_POST['email'];
// menginput data ke database
mysqli_query($koneksi,"insert into user_table (ID,Username,Password,Nama,Email) values('','$Username','$Password','$Nama','$Email')");

// mengalihkan halaman kembali ke index.php
header("location:formlogin.html");

?>