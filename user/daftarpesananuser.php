<?php ?>
<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <title>BolaOn : Daftar Pesanan</title>
    <link rel="img/logosquare.png" href="img/logosquare.png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link href="css/style2.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Online-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Online -->

    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
          rel="stylesheet">

</head>

<body>

<?php
include "navbar.php";
?>

<section>
    <div class="container">
        <div class="daftarlapangan">
            <div class="row">
                <h2><strong>
                        <center>Daftar Pesanan</center>
                    </strong></h2>
                <br>
                <div class="col-md-7" id="daftarlapangan">
                    <center>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id Pesanan</th>
                                <th>Total</th>
                                <th>Status Pembayaran</th>
                                <th>Status Pesanan</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Belum Bayar</td>
                                <td>Menunggu Pembayaran</td>
                            </tr>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Sudah Bayar</td>
                                <td>Tervefikasi</td>
                            </tr>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Belum Bayar</td>
                                <td>Menunggu Pembayaran</td>
                            </tr>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Sudah Bayar</td>
                                <td>Tervefikasi</td>
                            </tr>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Belum Bayar</td>
                                <td>Menunggu Pembayaran</td>
                            </tr>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Sudah Bayar</td>
                                <td>Tervefikasi</td>
                            </tr>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Belum Bayar</td>
                                <td>Menunggu Pembayaran</td>
                            </tr>
                            <tr>
                                <td>162410100XX</td>
                                <td>Rp75.000,00</td>
                                <td>Belum Bayar</td>
                                <td>Menunggu Pembayaran</td>
                            </tr>
                            </tbody>

                        </table>
                    </center>
                </div>

            </div>
            <form action="ConfirmationView.html" method="">
                <div class="tombol">
                    <input type="submit" value="Detail" id="batal" class="btn batal">
                </div>
        </div>
        </form>

        <br>
        <br>
    </div>


</section>


<footer>
    <div class="row">

    </div>

</footer>

<script src="js/jquery-3.3.1.min"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>

