<?php
include "../koneksi.php";
if (!isset($_SESSION['level']) || $_SESSION['level'] != "member") {
    header("Location: ../ind.php");
    exit;
}

$queryUser = "SELECT nama FROM user WHERE id_user = " . $_SESSION['id_user'];
$resUser = mysqli_query($link, $queryUser);
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
            <th>
                <center> member
            </th>
        </tr>
        <?php
        // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim ORDER BY nim ASC
        $id = $_SESSION['id_user'];
        $query = "SELECT * FROM user WHERE id_user = '$id'";

        $result = mysqli_query($link, $query);
        //mengecek apakah ada error ketika menjalankan query
        if (!$result) {
            die ("Query Error: " . mysqli_errno($link) .
                " - " . mysqli_error($link));
        }
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            // mencetak / menampilkan data
            echo "<tr>";
            echo "<td><center>$no</td>";
            echo "<td><center>$data[nama]</td>"; //menampilkan data nama
            echo "<td><center>$data[email]</td>"; //menampilkan data email
            echo "<td><center>$data[no_hp]</td>"; //menampilkan data
            echo "<td><center>$data[pass]</td>"; //menampilkan
            echo "<td><center>$data[level]</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>