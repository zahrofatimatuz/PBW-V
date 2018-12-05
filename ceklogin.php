<?php 
// mengaktifkan session pada php
session_start();

include '../koneksi.php';
if (isset($_POST['login'])) {

//mengambil data dari form login
$nama=$_POST['nama'];
$pass=$_POST['pass'];


   //function php untuk mengambil data dari database
   $sql = mysql_query("select * from user where nama='$nama' and pass='$pass'")or die ("SQL Error:".mysql_error());;
   $result = mysql_num_rows($sql);
   
   // Untuk menyimpan session login

// cek apakah username dan password di temukan pada database
if($result > 0){
 
  $data = mysqli_fetch_assoc($sql);
 
  // cek jika user login sebagai admin
  if($result['level']=="admin"){
 
    // buat session login dan username
    $_SESSION['nama'] = $nama;
    $_SESSION['level'] = "admin";
    // alihkan ke halaman dashboard admin
    header("location:Home.php");
 
  // cek jika user login sebagai member
  }else if($data['level']=="member"){
    // buat session login dan username
    $_SESSION['nama'] = $nama;
    $_SESSION['level'] = "member";
    // alihkan ke halaman dashboard member
    header("location:booking.php");
 
  // cek jika user login sebagai pengurus
  }else{
 
    // alihkan ke halaman login kembali
    header("location:index.php?pesan=gagal");
  } 
}
}

?>
