    <?php  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>BolaOn - Detail Pesanan</title>
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
        <img class="center-block" id="langkah" src="img/step/step-2.png">
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
        </tbody>
      </table>
      <form action="UploadBuktiView.html" method="">
        <div class="tombol-submit">
          <button type="submit" class="btn btn-success"> Next </button>
        </div>
        <br>
       <p class="text-danger">*minimal pembayaran uang muka 50% dari total pesanan.</p>
       <br>
       <div class="bank">
       <table>
        <tbody>
          <tr>
            <td style="padding-right: 10px; "> <img src="img/bank/bank1.png"></td><td style="padding-right: 10px;"> Rek BNI </td>
            <td style="padding-right: 10px;"> : </td>
            <td style="padding-right: 10px;">  02423820352069 </td>
          </tr>
           <tr>
            <td style="padding-right: 10px; "> <img src="img/bank/bank2.png"></td><td style="padding-right: 10px;"> Rek Mandiri </td>
            <td style="padding-right: 10px;"> : </td>
            <td style="padding-right: 10px;">  02423820352069 </td>
          </tr>
           <tr>
            <td style="padding-right: 10px; "> <img src="img/bank/bank3.png"></td>
            <td style="padding-right: 10px;"> Rek BRI </td>
            <td style="padding-right: 10px;"> : </td>
            <td style="padding-right: 10px;">  02423820352069 </td>
          </tr>
           <tr>
            <td style="padding-right: 10px; "> <img src="img/bank/bank4.png"></td><td style="padding-right: 10px;"> Rek BCA </td>
            <td style="padding-right: 10px;"> : </td>
            <td style="padding-right: 10px;">  02423820352069 </td>
          </tr>
        </tbody>
      </table>
      </div>
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
