    <?php
    include "../koneksi.php";
    $query = "SELECT FROM lapangan WHERE id_lapangan = " . $_GET['id'];
    $res = mysqli_query($link, $query);
    ?>
    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>
        <title>BolaOn : Edit Lapangan</title>
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
            <form action="proses/prosestambahlapangan.php" method="post">
                <div class="editlapangan">
                    <div class="row">

                        <h2><strong>Edit Lapangan</strong></h2>
                        <br>


                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" name="namalapangan" value="<?php echo $row['id_jadwal'] ?>"
                                       class="form-control" placeholder="Nama Lapangan"
                                       aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <input type="text" name="panjang" value="<?php echo $row['panjang'] ?>" class="form-control"
                                       placeholder="Panjang"
                                       aria-describedby="basic-addon2"><span class="input-group-addon"
                                                                             id="basic-addon2">x</span>
                                <input type="text" name="lebar" class="form-control" placeholder="Lebar"
                                       aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">cm</span>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">Rp</span>
                                <input type="text" name="harga" class="form-control" placeholder="Harga"
                                       aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">/Jam</span>
                            </div>

                            <div class="form-group">
                                <label for="comment">Deskripsi:</label>
                                <textarea class="form-control" name="deskripsi" rows="5" id="comment"></textarea>
                            </div>

                            <div class="radio">
                                <label><input type="radio" name="keterangan" value="Bisa" checked>Bisa</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="keterangan" value="Rusak">Rusak</label>
                            </div>

                        </div>


                        <div class="col-md-5">
                            <div class="uploadlapangan">

                                <img id="upimg" class='thumbnail' src="http://placehold.it/180" alt="your image"/>

                                <script type="text/javascript">
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#upimg')
                                                    .attr('src', e.target.result);
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                <input type='file' id="btnupimg" onchange="readURL(this);"/>
                            </div>
                        </div>

                    </div>
                    <input href="proses/proseseditlapangan.php?id=<?php echo $row['id_lapangan'] ?>" type="submit"
                           value="Simpan" id="simpan" class="btn simpan rounded-0">
                    <input href="" type="submit" value="Batal" id="batal" class="btn batal">
                </div>
            </form>

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
