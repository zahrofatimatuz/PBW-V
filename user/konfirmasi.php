<?php
include "../koneksi.php";
if (!isset($_SESSION['level']) || $_SESSION['level'] != "member") {
    header("Location: ../ind.php");
    exit;
}

$queryUser = "SELECT nama FROM user WHERE id_user = " . $_SESSION['id_user'];
$resUser = mysqli_query($link, $queryUser);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BolaOn - Status Pesanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One" rel="stylesheet">
</head>
<body class="body">

<?php
include "navbar.php";
?>
   <div class="container">
    <div class="col-md-12 center"></div>
    <div class="row">

  <div class="langkah">
    <img class="center-block" id="langkah" src="../img/step/step-4.png">
    </div>
<div class="content">
    <ul class="list-inline">
    <li style="color: #01D362"><h2><u><strong>Status</strong></h2></u></li>
    <li><h2><strong>Booking</strong></h2></li>
  </ul>
  <div class="td">       
       <table>    
    <tbody>
      <tr>
        <td style="padding-right: 20px; ">ID Booking</td>
        <td style="padding-right: 10px;"> : </td>
        <td> 1624101010xx </td>
      </tr>
      <tr>
      <tr>
        <td style="padding-right: 20px; ">Jumlah Lapangan</td>
        <td style="padding-right: 10px;"> : </td>
        <td>6 Lapangan </td>
      </tr>
      <tr>
        <td>Jumlah jam</td>
        <td>:</td>
        <td> 4 jam </td>
      </tr>
      <tr>
        <td>Total pembayaran</td>
        <td>:</td>
        <td>Rp. 10.000 </td>
      </tr>
    </tbody>
  </table>
  </div>
  <br>
  <br>
   <table class="table">    
    <tbody>      
      <tr>
        <td>Total pembayaran  </td>
        <td>Rp. 10.000 </td>
      </tr>
      <tr>
        <td>Status pembayaran  </td>
        <td>Dibayar </td>
      </tr>
    </tbody>
  </table>
  <form action="belum.html" method="">
    
      <button type="submit" class="btn btn-success">Cetak Bukti Pesanan</button>
    </div>
    <br>
</form>
</h2>
</li>
</ul>
</div>
</div>
</div>
 
            <br>
            <br>

      
    
</div>

</body>
</html>
