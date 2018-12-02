<?php
/**
 * Created by PhpStorm.
 * User: FAZA
 * Date: 01/12/2018
 * Time: 20.41
 */
include "../../koneksi.php";
$sql = "UPDATE FROM lapangan WHERE id_lapangan = ".$_GET['id'];
$res = mysqli_query($link, $sql);
if (!$res){
    die(mysqli_error($link));
}
header('location: ../daftarlapangan.php');