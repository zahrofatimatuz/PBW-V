<?php
include "../../koneksi.php";

$query = "INSERT INTO `jdwal` (`id_jadwal`, `jadwal`)
                        VALUES (NULL, '".$_POST['jadwal']."');";
$res = mysqli_query($link, $query);
header('location: ../daftarjadwal.php');
?>