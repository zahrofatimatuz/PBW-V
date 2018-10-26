<?php
    $host            = "127.0.0.1";      //umumnya menggunakan localhost
    $username        = "root";               //isikan dengan username mysql
    $pass            = "";
    $db              = "bolaon";

    $con = mysqli_connect($host, $username, $pass, $db);
     
     if($con) {
               echo ("Koneksi Sukses ");}
     else {
               echo ("Koneksi Gagal ");
      }
 
      $cekdatabase = mysqli_select_db($con , $db) ;
           if($cekdatabase) {
                          echo ("Database Tersedia");}
           else {
                          echo ("Database Tidak Ada");
            } 
?> 