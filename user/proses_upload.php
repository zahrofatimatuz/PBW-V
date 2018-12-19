<?php

include "../koneksi.php";

extract($_POST);
$idPesanan = $_GET['id'];
$tmp_name = $_FILES["bukti"]["tmp_name"];
$path = $_FILES['bukti']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

$name = uniqid().'.'.$ext;
move_uploaded_file($tmp_name, "../uploads/$name");

$sql = "INSERT INTO pembayaran VALUES (NULL ,$bayar,'$name',$idPesanan)";
$result = mysqli_query($link, $sql);
//mengecek apakah ada error ketika menjalankan query
if (!$result) {
    die ("Query Error: " . mysqli_errno($link) .
        " - " . mysqli_error($link));
}else{
    header("Location: Home.php");
    exit;
}
