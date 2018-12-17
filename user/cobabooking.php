<?php
include "../koneksi.php";
$queryJadwal = "SELECT jadwal  FROM jadwal";
$resJadwal = mysqli_query($link, $queryJadwal);
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

<nav class="navbar nav-pills navbar-fixed-top">
    <div class="container-fluid">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="Home.php">
          <img alt="Brand" src="../img/logo.png">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
                       <li><a href="User.php">Biodata</a></li>
                        <li><a href="bayar.php">Pesanan</a></li>
                        <li><a href="UploadBukti.php">Pembayaran</a></li>
                        <li><a href="konfirmasi.php">konfirmasi</a></li>
                        <li><a href="../index.php">Keluar</a></li>
        </ul>
      </div>
    </div>
</nav>

<div class="container">
   <center> <h5 class="text-muted"> booking lapangan sesukamu</h5> </center>
   <center> <h2>Pilih Lapangan dan Jamnya</h2> </center>
    <div class="langkah">
        <img class="center-block" id="langkah" src="../img/step/step-1.png">
    </div>
    <br>
    <br>

    <div class="row">
                <?php
        while ($rowLapangan = mysqli_fetch_assoc($resLapangan)) {
            ?>
        
           
<h1> <?=$rowLapangan['nama_lapangan']?> </h1>
 <table class="table table-condensed" >
      <tr>
        <th><center> # </th>
        <th><center> Nama Jadwal</th>
        <th><center> status </th>
        </tr>
        <tbody>
            <form action="bayar.php/<?=$rowLapangan['id_jadwal']?>" id="lanjut" method="">
                                    <?php
                                    while ($rowJadwal=mysqli_fetch_assoc($resJadwal)) {
                                    ?>
                                    <tr>
                                        <td><center><input type="checkbox" value="jam"></center></td>
                                        <td><center><?php echo $rowJadwal['jadwal']?></center></td>
                                        <td><center><button type="submit" id="lanjut" class="btn btn-primary"> Lanjut </button></center></td>
                                    <?php
                                        }
                                    ?>
  </form>
                                </tbody>
    </table>
            <?php
        }
        ?>
  
    </div>
</div>
</body>
</html>