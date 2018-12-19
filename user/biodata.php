<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>bookinglapangan.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Poppins|Righteous|Saira|Text+Me+One"
          rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body">

<?php
include "navbar.php";
?>
<br>
<br>
<div class="content">
    <h1>
        <center> MY ACCOUNT</center>
    </h1>

    <table class="table table-condensed">
        <tr>
            <th>
                <center> no
            </th>
            <th>
                <center> Nama
            </th>
            <th>
                <center> Email
            </th>
            <th>
                <center> No HP
            </th>
            <th>
                <center> Password
            </th>
        </tr>
        <?php

        // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim ORDER BY nim ASC
        $query = "SELECT * FROM biodata_pelanggan";
        $result = mysqli_query($link, $query);
        //mengecek apakah ada error ketika menjalankan query
        if (!$result) {
            die ("Query Error: " . mysqli_errno($link) .
                " - " . mysqli_error($link));
        }

        //buat perulangan untuk element tabel dari data mahasiswa
        $no = 1;//variabel untuk membuat nomor urut
        // hasil query akan disimpan dalam variabel $data dalam bentuk array
        // kemudian dicetak dengan perulangan while
        while ($data = mysqli_fetch_assoc($result)) {
            // mencetak / menampilkan data
            echo "<tr>";
            echo "<td><center>$no</td>";
            echo "<td><center>$data[id_user]</td>";
            echo "<td><center>$data[nama]</td>"; //menampilkan data nim
            echo "<td><center>$data[email]</td>"; //menampilkan data nama
            echo "<td><center>$data[nope]</td>"; //menampilkan data fakultas
            echo "<td><center>$data[pass]</td>"; //menampilkan data jurusan
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>