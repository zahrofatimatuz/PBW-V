<?php 

include "../../koneksi.php";
$id   = $_GET['id'];

$status = 'terverifikasi';
$sql = "UPDATE pembayaran SET status='$status' WHERE idPembayaran = '$id'";

mysqli_query($link, $sql);

header('location: ../daftarpembayaran.php');

 ?>

<!--  id_order = ‘$_POST[id] -->