<?php
    $host            = "127.0.0.1";      //umumnya menggunakan localhost
    $servername      = "localhost";
    $username        = "root";               //isikan dengan username mysql
    $pass            = "";
    $Database        = "bolaon";

    $con = mysqli_connect($host, $servername, $username, $pass, $Database);
     
     if($con) {
               echo ("Koneksi Sukses ");}
     else {
               echo ("Koneksi Gagal ");
      }
 
      $cekdatabase = mysqli_select_db($con , $Database) ;
           if($cekdatabase) {
                          echo ("Database Tersedia");}
           else {
                          echo ("Database Tidak Ada");
            } 
?> 