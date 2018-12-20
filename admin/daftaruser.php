    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>
        <title>BolaOn : Daftar Pesanan</title>
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

        <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
              rel="stylesheet">

    </head>

    <body>

    <!-- Navbar -->
    <?php
    include "navbaradmin.php";
    ?>
        <?php
        include '../koneksi.php';
        ?>
    <section>
        <div class="container">
            <div class="daftarlapangan">
                <div class="row">
                    <h2><strong>
                            <center>Daftar User</center>
                        </strong></h2>
                    <br>
                    <div class="col-md-7" id="daftarlapangan">
                        <center>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Id User</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $halaman = 5; //batasan halaman
                                $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
                                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                                $result = mysqli_query ($link, "select * from user");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total/$halaman); 
                                $query = mysqli_query($link, "select * from user LIMIT $mulai, $halaman") or die(mysql_error);
                                $no =$mulai+1;
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['id_user'] ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['no_hp'] ?></td>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="">
                              <center>
                              <?php for ($i=1; $i<=$pages ; $i++){ ?>
                              <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                              <?php } ?>
                        </center>
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
