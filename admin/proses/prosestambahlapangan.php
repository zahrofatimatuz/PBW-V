<?php
include "../../koneksi.php";

$query = "INSERT INTO `lapangan` (`id_lapangan`, `nama_lapangan`, `harga`,`ukuran`, `keterangan`, `gambar`, `deskripsi`)
                        VALUES (NULL, '".$_POST['namalapangan']."', ".$_POST['harga'].", '".$_POST['panjang']." x ".$_POST['panjang']."',
                        '".$_POST['keterangan']."', '', '".$_POST['deskripsi']."');";
$res = mysqli_query($link, $query);
header('location: ../DaftarLapangan.php');
?>