    <?php
    include "../koneksi.php";
    $query = "SELECT * FROM jadwal";
    $res = mysqli_query($link, $query);
    ?>
    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>

        <title>BolaOn : Daftar Lapangan</title>
        <link rel="../img/logosquare.png" href="img/logosquare.png">
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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- css -->


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

        <div class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>


        <section>
            <div class="container">
                <div class="daftarlapangan">
                    <div class="row">
                        <h2><strong><center>Daftar Lapangan</center></strong></h2>
                        <br>
                        <div class="col-md-7" id="daftarlapangan" >
                            <center><table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id Jadwal</th>
                                        <th>Jadwal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row=mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id_jadwal']?></td>
                                        <td><?php echo $row['jadwal']?></td>
                                        <td><a href="proses/proseshapusjadwal.php?id=<?php echo $row['id_jadwal'] ?>" class="btn btn-danger">Hapus</a></td>
                                    <?php
                                        }
                                    ?>

                                </tbody>

                            </table>
                        </center>
                    </div>

                </div>
                <div class="tombol">
                    <form action="tambahjadwal.php" method="post">
                        <input type="submit" value="Tambah" id="simpan" class="btn simpan rounded-0">
                    </form>
                </div>
            </div>
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
