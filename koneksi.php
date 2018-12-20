<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$name = "web";
$link = mysqli_connect($host, $user, $pass, $name);

if (!$link) {
    die ("Koneksi dengan database gagal: " . mysql_connect_errno() .
        " - " . mysql_connect_error());
}

function whereIn(Array $list){
    $str = "(";
    foreach ($list as $item){
        $str .= $item.",";
    }
    $str = substr($str,0,strlen($str)-1).")";
    return $str;
}
?>