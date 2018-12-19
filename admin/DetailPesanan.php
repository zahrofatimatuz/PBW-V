<?php
include "../koneksi.php";
$query = "SELECT * FROM detail_pesanan";
$res = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>BolaOn - Status Pesanan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
          rel="stylesheet">
</head>
<body class="body">

<nav class="navbar nav-pills navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#home">
                <img alt="Brand" src="../img/logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link js-scroll-trigger" href="../index.php">Keluar</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="col-md-12 center"></div>

    <div class="row">

        <div class="content">
            <ul class="list-inline">
                <li style="color: #01D362"><h2><u><strong>Status</strong></h2></u></li>
                <li><h2><strong>Booking</strong></h2></li>
            </ul>
            <div class="td">
                <table>
                    <tbody>
                    <tr>
                        <td style="padding-right: 20px; ">ID Booking</td>
                        <td style="padding-right: 10px;"> :</td>
                        <td><?php echo $row['id_pesanan']?></td>
                    </tr>
                    <tr>
                    <tr>
                        <td style="padding-right: 20px; ">Jumlah Lapangan</td>
                        <td style="padding-right: 10px;"> :</td>
                        <td><?php echo $row['id_lapangan']?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah jam</td>
                        <td>:</td>
                        <td><?php echo $row['id_jadwal']?></td>
                    </tr>
                    <tr>
                    </tr>
                    </tbody>
                    <div row></div>
                </table>
                <td>Total pembayaran</td>
                <td>:</td>
                <td>Rp<?php echo $row['harga']?></td>
                </tr>
                </tbody>
                </table>
            </div>
            <br>
            <br>
            <table class="table">
                <tbody>
                <tr>
                    <td>Total pembayaran</td>
                    <td>Rp. 10.000</td>
                </tr>
                <tr>
                    <td><?php echo $row['nama_lapangan'] ?></td>
                    <td><?php echo $row['ukuran']?></td></td>
                    <td>Dibayar</td>
                </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="thumbnail">
                    <img id="upimg" class='thumbnail' src="http://placehold.it/180" alt="your image"/>
                </div>
            </div>

            <div class="row">
                <td>
                    <a href="DaftarPesanan.php" class="btn btn-primary">Kembali</a>

                <form action="updateStatus.php" method="">
                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                </form>

                </td>
            </div>

            </h2>
            </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
