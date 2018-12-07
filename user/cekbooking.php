<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik

	// membuat variabel untuk menampung data dari form
  $datetimepicker1   = $_POST['tanggal_pesanan'];
  // cek nilai variable
    if (empty($atetimepicker1)) {
        
        echo "<script>alert('tanggal pesanan tidak boleh kosong'); window.location.href = 'booking.php';</script>";
    }
    // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO pesanan VALUES (NULL, '$nama', '$email', '$no_hp','$pass', '$level')";
  $result =mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result) {   
  die ("Query gagal dijalankan: ".mysqli_errno($link).
     " - ".mysqli_error($link));
    
  } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = './user/Home.php';</script>";

} 

?>
