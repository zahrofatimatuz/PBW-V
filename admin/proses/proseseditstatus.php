<?php
/**
 * Created by PhpStorm.
 * User: FAZA
 * Date: 19/12/2018
 * Time: 23.19
 */

include "../../koneksi.php";
$sql = "UPDATE FROM pesanan WHERE id_pesanan = ".$_GET['id'];
$res = mysqli_query($link, $sql);
if (!$res){
    die(mysqli_error($link));
}
header('location: ../daftarpesanan.php');