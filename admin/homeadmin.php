    <<?php  ?>
    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>
        <title>BolaOn : Booking Lapangan Online</title>
        <link rel="../img/logosquare.png" href="../img/logosquare.png">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- css -->
        <link href="../css/style2.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.min.css">

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Online-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap-datepicker.js"></script>

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
                    <li><a  class="nav-link js-scroll-trigger" href="../index.php">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>

        <div class=".col-lg-1">
            <div id="myCarousel" class="carousel slide landing" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../img/slides/img1.png" alt="img-responsive">
                    </div>

                    <div class="item">
                        <img src="../img/slides/img2.png" alt="img-responsive">
                    </div>

                    <div class="item">
                        <img src="../img/slides/img3.png" alt="img-responsive">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <div class="container">
        <section class="adminmenu" id="admimenu">
                <div class="row">

                        <div class="col-md-3">
                            <form action="daftarpesanan.php" method="post">
                            <a href="daftarpesanan.php" class="thumbnail">
                                <img src="../img/adminmenu/pesanan.png" role="button" alt="...">
                            </a>
                            </form>
                        </div>

                        <div class="col-md-3">
                            <form action="daftarpembayaran.php" method="post">
                            <a href="daftarpembayaran.php" class="thumbnail">
                                <img src="../img/adminmenu/pembayaran.png" alt="...">
                            </a>
                            </form>
                        </div>

                        <div class="col-md-3">
                            <form action="daftarlapangan.php" method="post">
                            <a href="daftarlapangan.php" class="thumbnail">
                                <img src="../img/adminmenu/lapangan.png" role="button" alt="...">
                            </a>
                            </form>
                        </div>

                        <div class="col-md-3">
                            <form action="daftarjadwal.php" method="post">
                            <a href="daftarjadwal.php" class="thumbnail">
                                <img src="../img/adminmenu/jadwal.png" role="button" alt="...">
                            </a>
                            </form>
                        </div>

                        <div class="col-md-3">
                            <form action="daftaruser.php" method="post">
                            <a href="daftaruser.php" class="thumbnail">
                                <img src="../img/adminmenu/user.png" role="button" alt="...">
                            </a>
                            </form>
                        </div>
                </div>
        </section>
    </div>

    <footer>

        <div id="copyright">
            <div class="container">
                © 2018 BolaOn All Rights Reserved
            </div>
        </div>

    </footer>

    <script src="js/jquery-3.3.1.min"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
