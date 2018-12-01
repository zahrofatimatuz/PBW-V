<?php  ?>
<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <title>BolaOn : Tambah Edit Jadwal</title>
    <link rel="../img/logosquare.png" href="img/logosquare.png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link href="../css/style2.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Online-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Online -->

    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One" rel="stylesheet">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar nav-pills navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                    <li><a href="#lapangan">Lapangan</a></li>
                    <li><a href="#pesanan">Pesanan</a></li>
                    <li><a href="#jadwal">Jadwal</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <section>
        <div class="container">
            <div class="inputlapangan">
                <div class="row">

                    <h2><strong><center>Tambah Jadwal</center></strong></h2>
                    <br>

                    <div class="col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nama Lapangan" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Panjang" aria-describedby="basic-addon2"><span class="input-group-addon" id="basic-addon2">x</span>
                            <input type="text" class="form-control" placeholder="Lebar" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">cm</span>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control" placeholder="Harga" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">/Jam</span>
                        </div>

                        <div class="form-group">
                            <label for="comment">Deskripsi:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                <input type="submit" value="Simpan" id="simpan" class="btn simpan rounded-0">
                <input type="submit" value="Batal" id="batal" class="btn batal">
            </div>
            <br>
            <br>
        </div>
    </section>
    <footer>
        <div class="row">
        </div>
    </footer>
    <script src="../js/jquery-3.3.1.min"></script>
    <script src="../js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>