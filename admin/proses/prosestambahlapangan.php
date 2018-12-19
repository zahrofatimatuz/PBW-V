<?php
include "../../koneksi.php";


extract($_POST);
$idPesanan = $_GET['id'];
$tmp_name = $_FILES["gambar"]["tmp_name"];
$path = $_FILES['gambar']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

$name = uniqid().'.'.$ext;
move_uploaded_file($tmp_name, "../uploads/$name");


$query = "INSERT INTO `lapangan` (`id_lapangan`, `nama_lapangan`, `harga`,`ukuran`, `keterangan`, `gambar`, `deskripsi`)
                        VALUES (NULL, '".$_POST['namalapangan']."',
                        ".$_POST['harga'].",
                        '".$_POST['panjang']." x ".$_POST['panjang']."',
                        '".$_POST['keterangan']."',
                         '".$_POST['gambar']."',
                         '".$_POST['deskripsi']."');";
$res = mysqli_query($link, $query);
header('location: ../daftarlapangan.php');
?>