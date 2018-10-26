<?php  
include 'koneksi.php';
// menyimpan data kedalam variabel
$nlengkap       = isset($_GET['Nama'])? $_GET['Nama']:'';
$Email      	= isset($_GET['Email'])?$_GET['Email']:'';
$nope			= isset($_GET['noHP'])? $_GET['noHP']:'';
$pass           = isset($_GET['Password'])? $_GET['Password']:'';
// query SQL untuk insert data
echo 'SELAMAT DATANG'.$nlengkap.'email'.$Email.'no hp'.$nope.'Password'.$pass.;

$query ="INSERT INTO bio SET Nama='$nlengkap',Email='$Email',noHP='$nope',Password='$pass'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");

?>