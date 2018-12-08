<?php
global $link;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>bookinglapangan.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Poppins|Righteous|Saira|Text+Me+One" rel="stylesheet">
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
  <br>
  <br><div class="content">
   <h1><center> MY ACCOUNT </center></h1>
   
   <table class="table table-condensed" >
    <tr>
      <th><center> no </th>
        <th><center> Nama</th>
          <th><center> Email </th>
            <th><center> No HP </th>
              <th><center> Password</th>
                <th><center> member</th>
              </tr>
              <?php
              include '../koneksi.php';
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim ORDER BY nim ASC
              $id=$_SESSION['id_user'];
              $query = "SELECT * FROM user WHERE id_user = '$id'";
              
              $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
              if(!$result){
                die ("Query Error: ".mysqli_errno($link).
                 " - ".mysqli_error($link));
              }
      $no = 1;
       while($data = mysqli_fetch_assoc($result))
       {
        // mencetak / menampilkan data
        echo "<tr>";       
        echo "<td><center>$no</td>";
        echo "<td><center>$data[nama]</td>"; //menampilkan data nama
        echo "<td><center>$data[email]</td>"; //menampilkan data email
        echo "<td><center>$data[no_hp]</td>"; //menampilkan data 
        echo "<td><center>$data[pass]</td>"; //menampilkan 
        echo "<td><center>$data[level]</td>"; 
        echo "</tr>";
      }
      ?>
    </table>
  </body>
  </html>