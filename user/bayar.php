<?php
include "../koneksi.php";
$idUser = $_SESSION['id_user'];
$tgl = $_SESSION['tanggal_pesanan'];

// membuat pesanan baru
$sql = "INSERT INTO pesanan VALUES (null , $idUser,'$tgl')";
mysqli_query($link,$sql);

//mengambil id pesanan yang baru saja dibuat
$sqlGetLatestId = "SELECT id_pesanan FROM pesanan WHERE id_user = $idUser ORDER BY id_pesanan DESC LIMIT 1";
$resGetLatestId = mysqli_query($link,$sqlGetLatestId);
$rowGetLatestId = mysqli_fetch_array($resGetLatestId);
$idPesanan = $rowGetLatestId['id_pesanan'];

// menambahkan detail pesanan
$sqlDetailPesanan = "INSERT INTO detail_pesanan VALUES ";
$idLapanganList = [];
foreach ($_POST as $idLapangan => $lapangan){
    $idLapanganList[] = $idLapangan;
    foreach ($lapangan as $jadwal){
        $sqlDetailPesanan .= "($idPesanan,$idLapangan,$jadwal),";
    }
}
$sqlDetailPesanan = substr($sqlDetailPesanan , 0, strlen($sqlDetailPesanan ) - 1);
$sqlDetailPesanan .= ";";
mysqli_query($link,$sqlDetailPesanan);

//mengambil data lapangan yang dipilih
$sqlLapangan = "SELECT * FROM lapangan WHERE id_lapangan IN ".whereIn($idLapanganList);
$resListLapangan = mysqli_query($link,$sqlLapangan);
$rowsLapangan = mysqli_fetch_all($resListLapangan, MYSQLI_ASSOC);

$totalJam = 0;
$harga = 0;
$index = 0;
foreach ($_POST as $idLapangan => $lapangan){
    foreach ($lapangan as $jadwal){
        $harga += $rowsLapangan[$index]['harga'];
        $totalJam++;
    }
    $index++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BolaOn - Detail Pesanan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
          rel="stylesheet">
</head>
<body class="body">

<?php
include "navbar.php";
?>

<div class="container">
    <div class="col-md-12 center"></div>
    <div class="row">

        <div class="langkah">
            <img class="center-block" id="langkah" src="/img/step/step-2.png">
        </div>
        <div class="content">
            <ul class="list-inline">
                <li style="color: #01D362"><h2><u><strong> Informasi </strong></h2></u></li>
                <li><h2><strong> Reservasi </strong></h2></li>
            </ul>
            <div class="td">
                <table>
                    <tbody>
                    <tr>
                        <td style="padding-right: 20px; ">Jumlah Lapangan</td>
                        <td style="padding-right: 10px;"> :</td>
                        <td><?php echo count($idLapanganList); ?> Lapangan</td>
                    </tr>
                    <tr>
                        <td>Jumlah jam</td>
                        <td>:</td>
                        <td> <?php echo $totalJam; ?> jam</td>
                    </tr>
                    <tr>
                        <td>Total pembayaran</td>
                        <td>:</td>
                        <td>Rp. <?php echo $harga; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <table class="table">
                <tbody>
                <tr>
                    <td>Total pembayaran</td>
                    <td>Rp. <?php echo $harga; ?></td>
                </tr>
                </tbody>
            </table>
            <div class="tombol-submit">
                    <a class="btn btn-success" href="UploadBukti.php?id=<?php echo $idPesanan; ?>"> Lanjut Pembayaran</a>
                </div>
                <br>
                <p class="text-danger">*minimal pembayaran uang muka 50% dari total pesanan.</p>
                <br>
                <div class="bank">
                    <table>
                        <tbody>
                        <tr>
                            <td style="padding-right: 10px; "><img src="../img/bank/bank1.png"></td>
                            <td style="padding-right: 10px;"> Rek BNI</td>
                            <td style="padding-right: 10px;"> :</td>
                            <td style="padding-right: 10px;"> 02423820352069</td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px; "><img src="../img/bank/bank2.png"></td>
                            <td style="padding-right: 10px;"> Rek Mandiri</td>
                            <td style="padding-right: 10px;"> :</td>
                            <td style="padding-right: 10px;"> 02423820352069</td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px; "><img src="../img/bank/bank3.png"></td>
                            <td style="padding-right: 10px;"> Rek BRI</td>
                            <td style="padding-right: 10px;"> :</td>
                            <td style="padding-right: 10px;"> 02423820352069</td>
                        </tr>
                        <tr>
                            <td style="padding-right: 10px; "><img src="../img/bank/bank4.png"></td>
                            <td style="padding-right: 10px;"> Rek BCA</td>
                            <td style="padding-right: 10px;"> :</td>
                            <td style="padding-right: 10px;"> 02423820352069</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
</div>
<br>
<br>
</div>
</body>
</html>
