<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';
if (isset($_POST['pilih'])) {

// mengecek apakah tombol input dari form telah diklik

    // membuat variabel untuk menampung data dari form
    $datetimepicker1 = $_POST['tanggal_pesanan'];

    $datetimepicker1 = date('Y-m-d', strtotime($datetimepicker1));
    // cek nilai variable
    if (empty($datetimepicker1)) {

        echo "<script>alert('tanggal pesanan tidak boleh kosong'); window.location.href = 'booking.php';</script>";
    }
    // jalankan query INSERT untuk menambah data ke database
    $_SESSION['tanggal_pesanan'] = $datetimepicker1;


    header("Location: booking.php");
}
?>
