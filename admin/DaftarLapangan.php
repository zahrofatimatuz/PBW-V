    <?php
    include "../koneksi.php";
    $query = "SELECT * FROM lapangan";
    $res = mysqli_query($link, $query);
    ?>
    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>
        <title>BolaOn : Daftar Lapangan</title>
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

    <section>
        <div class="container">
            <div class="daftarlapangan">
                <div class="row">
                    <h2><strong>Daftar Lapangan</strong></h2>
                    <br>
                    <div class="col-md-7" id="daftarlapangan">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Nama Lapangan</th>
                                <th>Ukuran</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['nama_lapangan'] ?></td>
                                    <td><?php echo $row['ukuran'] ?></td>
                                    <td><?php echo $row['harga'] ?></td>
                                    <td><?php echo $row['keterangan'] ?></td>
                                    <td><?php echo $row['gambar'] ?></td>
                                    <td>
                                        <a href="editlapangan.php?id=<?php echo $row['id_lapangan'] ?>"
                                           class="btn btn-primary">Edit</a>
                                        <a href="proses/proseshapuslapangan.php?id=<?php echo $row['id_lapangan'] ?>"
                                           class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="tombol">
                    <form action="tambahlapangan.php" method="">
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
    </body>
    </html>
