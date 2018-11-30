<<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BolaOn - Upload Bukti Pembayaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One" rel="stylesheet">
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

        <a class="navbar-brand" href="#home">
          <img alt="Brand" src="img/logo.png">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" onclick="tampilkan_daftar();" class="register">Daftar</a></li>
          <li><a href="#" onclick="tampilkan_masuk();" class="login">Masuk</a></li>
          <li><a href="#pesan">Pesanan</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#kontak">Contact</a></li>

        </ul>
      </div>
    </div>
  </nav>



  <div class="container">
    <div class="col-md-12 center"></div>
    <div class="row">
      <div class="langkah">
        <img class="center-block" id="langkah" src="img/step/step-3.png">
      </div>

      <div class="content">
        <ul class="list-inline">
          <li style="color: #01D362"><h2><u><strong>Upload </strong></h2></u></li>
          <li><h2><strong>Bukti Pembayaran </strong></h2></li>
        </ul>
        <div class="td">       
         <h3>Waktu anda untuk membayar uang muka tersisa : 15 menit</h3>
         <h4 class="text-danger"> *mohon untuk upload bukti pembayaran di bawah ini </h4>
         <div class="uploadbukti">

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
          <input type='file' id="btnupimg" onchange="readURL(this);" />
        </div>
      </div>
    </h2>
  </li>
</ul>



<form action="ConfirmationView.html" method="">
  <div class="tombol-submit">
    <button type="submit" class="btn btn-success" id="selesai"> Selesai </button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
