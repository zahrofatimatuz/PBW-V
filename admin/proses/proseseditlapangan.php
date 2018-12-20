<?php
/**
 * Created by PhpStorm.
 * User: FAZA
 * Date: 01/12/2018
 * Time: 20.41
 */
if (isset($_POST['update'])) {
	include "../../koneksi.php";

$id = $_POST['id_lapangan'];
$namalapangan = $_POST['nama_lapangan'];
$harga = $_POST['harga'];
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$keterangan = $_POST['keterangan'];
$deskripsi = $_POST['deskripsi'];

$sql = "UPDATE lapangan SET nama_lapangan = '$namalapangan', harga='$harga', ukuran='$panjang x $lebar',keterangan='$keterangan',deskripsi='$deskripsi' WHERE id_lapangan = '$id'";

$result = mysqli_query($link, $sql);

if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }

  var_dump($sql);
}
header('location: ../daftarlapangan.php?pesan=update');
?>