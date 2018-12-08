<?php
/**
 * Created by PhpStorm.
 * User: FAZA
 * Date: 30/11/2018
 * Time: 23.50
 */
include "../../koneksi.php";
$sql = "DELETE FROM jadwal WHERE id_jadwal = ".$_GET['id'];
$res = mysqli_query($link, $sql);
if (!$res){
    die(mysqli_error($link));
}
header('location: ../daftarjdwal.php');