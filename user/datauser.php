<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

    // membuat variabel untuk menampung data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['pass'];


    $level = 'member'; // default,
    // jalankan query INSERT untuk menambah data ke database
    $query = "INSERT INTO user VALUES (NULL, '$nama', '$email', '$no_hp','$pass', '$level')";
    $result = mysqli_query($link, $query);
    // periska query apakah ada error
    if (!$result) {
        die ("Query gagal dijalankan: " . mysqli_errno($link) .
            " - " . mysqli_error($link));

    } else {
        echo "<script>alert('Insert Data Berhasil'); window.location.href = './user/Home.php';</script>";
    }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("Location: index.php");
?>
