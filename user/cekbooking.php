<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';
if (isset($_POST['pilih'])) {

// mengecek apakah tombol input dari form telah diklik

  // membuat variabel untuk menampung data dari form
  $datetimepicker1   = $_POST['tanggal_pesanan'];
  // var_dump($_POST['tanggal_pesanan']);
  // var_dump($_POST['tanggal_pesanan']);
  $datetimepicker1   = date('Y-m-d', strtotime($datetimepicker1));
  // cek nilai variable
    if (empty($datetimepicker1)) {
        
        echo "<script>alert('tanggal pesanan tidak boleh kosong'); window.location.href = 'booking.php';</script>";
    }
    // jalankan query INSERT untuk menambah data ke database
    $id=$_SESSION['id_user'];
    // var_dump($_SESSION['id_user']);
  $query = "INSERT INTO pesanan VALUES (NULL, '$id', '$datetimepicker1')";
  $result =mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result) {   
  die ("Query gagal dijalankan: ".mysqli_error($link));
    
  } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = 'booking.php';</script>";

} 
 $format1 = date('d F Y', strtotime($tanggal_pesanan ));
 echo $format1;
}
?>
