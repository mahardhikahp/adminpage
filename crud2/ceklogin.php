<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['Username'];
$password = $_POST['Password'];




//menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user_table where (Username='$username' or Email='$username') and Password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $cek['username'];
	$_SESSION['status'] = "login";
	header("location:login/index.html");
}else{

	header("location:tambahbarang.php?pesan=berhasil");
}
?>