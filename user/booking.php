<?php
include "../koneksi.php";
$queryJadwal = "SELECT id_jadwal,jadwal  FROM jadwal";
$resJadwal = mysqli_query($link, $queryJadwal);
$rowJadwal = mysqli_fetch_all($resJadwal, MYSQLI_ASSOC);
$queryLapangan = "SELECT *  FROM lapangan";
$resLapangan = mysqli_query($link, $queryLapangan);

?>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>bookinglapangan.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Poppins|Righteous|Saira|Text+Me+One"
          rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body">

<?php
include "navbar.php";
?>

<div class="container">
    <center><h5 class="text-muted"> booking lapangan sesukamu</h5></center>
    <center><h2>Pilih Lapangan dan Jamnya</h2></center>
    <div class="langkah">
        <img class="center-block" id="langkah" src="../img/step/step-1.png">
    </div>
    <br>
    <br>
    <form action="bayar.php" id="lanjut" method="post">
        <div class="row">
            <div class="tombol-submit">
                <button type="submit" id="lanjut" class="btn"> Pesan</button>
            </div>
        </div>
        <div class="row">


            <?php
            while ($rowLapangan = mysqli_fetch_assoc($resLapangan)) {
                ?>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="../img/lap3.png" alt="barang1">
                        <div class="caption">
                            <h3><?= $rowLapangan['nama_lapangan'] ?></h3>
                            <p><?= $rowLapangan['deskripsi'] ?></p>
                            <div class="bs-example">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                   href="#collapse<?= $rowLapangan['id_lapangan'] ?>">Pilih
                                                    Jam</a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?= $rowLapangan['id_lapangan'] ?>"
                                             class="panel-collapse collapse">

                                            <?php
                                            foreach ($rowJadwal as $r) {
                                                ?>
                                                <div class="checkbox">
                                                    <label class="checkbox-inline"> <input
                                                                name="<?= $rowLapangan['id_lapangan'] ?>[]"
                                                                type="checkbox"
                                                                value="<?php echo $r['id_jadwal'] ?>">
                                                        <td>
                                                            <?php echo $r['jadwal'] ?>
                                                        </td>


                                                    </label>
                                                </div>
                                                <?php
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </form>
</div>
</body>
</html>