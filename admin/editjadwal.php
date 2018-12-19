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
            <div class="inputlapangan">
                <div class="row">

                    <h2><strong>
                            <center>Tambah Jadwal</center>
                        </strong></h2>
                    <br>

                    <div class="col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nama Lapangan"
                                   aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Panjang"
                                   aria-describedby="basic-addon2"><span class="input-group-addon"
                                                                         id="basic-addon2">x</span>
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
