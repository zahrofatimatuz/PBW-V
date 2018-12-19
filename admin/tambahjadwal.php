    <?php ?>
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
        <script type="text/javascript" src="../js/bootstrap-datepicker3.js"></script>

        <!-- Font Online -->

        <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
              rel="stylesheet">

    </head>

    <body>

    <!-- Navbar -->
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


    <section>
        <div class="container">
            <form action="proses/prosestambahjadwal.php" method="post">
                <div class="inputjadwal">
                    <div class="row">

                        <h2><strong>
                                <center>Tambah Jadwal</center>
                            </strong></h2>
                        <br>

                        <div class="col-md-7">
                            <div class="input-group">
                                <div class="well">
                                    <div id="datetimepicker3" class="input-append">
                                        <input data-format="hh:mm:ss" name="jadwal" type="text"></input>
                                        <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                                        </i>
                                        </span>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker3').datetimepicker({
                                            pickDate: false
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <input href="proses/prosestambahjadwal.php?id=<?php echo $row['id_jadwal'] ?>" type="submit"
                               value="Simpan" id="simpan" class="btn simpan rounded-0">
                        <input type="submit" value="Batal" id="batal" class="btn batal">
                    </div>
                    <br>
                    <br>
                </div>
            </form>
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
