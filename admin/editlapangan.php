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
                <li><a  class="nav-link js-scroll-trigger" href="../index.php">Keluar</a></li>
            </ul>
        </div>
    </div>
</nav>


<section>
    <div class="container">
        <?php
include "../koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($link, "SELECT * FROM lapangan WHERE id_lapangan='$id'");
while ($row = mysqli_fetch_array($query)){
?>
        <form action="proses/proseseditlapangan.php" method="post">
            <div class="editlapangan">
                <div class="row">
                    <h2><strong>Edit Lapangan</strong></h2>
                    <br>
                    <div class="col-md-7">
                        <div class="input-group">
                            <input type="hidden" name="id_lapangan" value="<?php echo $id; ?>">
                            <input type="text" name="nama_lapangan" value="<?php echo $row['nama_lapangan']?>" class="form-control" placeholder="Nama Lapangan"
                                   aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group">
                            <input type="text" name="panjang" value="<?php echo $row['ukuran'] ?>" class="form-control" placeholder="Panjang">
                            <input type="text" name="lebar" class="form-control" placeholder="Lebar" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">cm</span>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Rp</span>
                            <input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control" placeholder="Harga" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">/Jam</span>
                        </div>

                        <div class="form-group">
                            <label for="comment">Deskripsi:</label>
                            <textarea class="form-control" name="deskripsi" rows="5" id="comment"><?php echo $row[6]?></textarea>
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
               
                <input type="submit" name="update" value="Simpan" class="btn simpan rounded-0">
                <input type="submit" value="Batal" id="batal" class="btn batal">
            </div>
        </form>
<?php 
} ?>
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
