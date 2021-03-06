    <?php
    include "../koneksi.php";
    $query = "SELECT * FROM jadwal";
    $res = mysqli_query($link, $query);
    ?>
    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>

        <title>BolaOn : COBA</title>
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
        <?php
        include "navbaradmin.php";
        ?>

        <nav class="navbar navbar-default sidebar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                            <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
                                <li><a href="#">Modificar</a></li>
                                <li><a href="#">Reportar</a></li>
                            </ul>
                        </li>
                        <li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
                        <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>


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
