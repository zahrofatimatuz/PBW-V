<?php 

session_start();
include 'koneksi.php';


//mengambil data dari form login
$nama=$_POST['nama'];
$pass=$_POST['pass'];


   //function php untuk mengambil data dari database
   $query = mysqli_quer($link,"select * from user where nama='$nama' and pass='$pass'";
   $result = mysql_num_rows($link, $query);
   
   // Untuk menyimpan session login

// cek apakah username dan password di temukan pada database
if($result > 0){
 
  $data = mysqli_fetch_assoc($query);
 
  // cek jika user login sebagai admin
  if($data['level']=="admin"){
 
    // buat session login dan username
    $_SESSION['nama'] = $nama;
    $_SESSION['level'] = "admin";
    // alihkan ke halaman dashboard admin
    echo "<script>alert('anda berhasil masuk'); window.location.href = './user/Home.php';</script>";
    
 
  // cek jika user login sebagai member
  }else if($data['level']=="nama"){
    // buat session login dan username
    $_SESSION['nama'] = $nama;
    $_SESSION['level'] = "member";
    // alihkan ke halaman dashboard member
    echo "<script>alert('anda berhasil masuk'); window.location.href = './user/booking.php';</script>";
    
 
  // cek jika user login sebagai pengurus
  }else{
 
    // alihkan ke halaman login kembali
    header("location:index.php?pesan=gagal");
  } 
}


?>
