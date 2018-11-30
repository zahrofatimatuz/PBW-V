        <?php  ?>
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
          <link rel="stylesheet" href="css/style.css">
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
               <form action="UploadBuktiView.html" id="bayar" method="">
                 <form action="BookingView.html" id="pesan" method="">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" onclick="tampilkan_daftar();" class="register">Biodata</a></li>
                    <li><a href="#pesan">Pesanan</a></li>
                    <li><a href="#bayar">Pembayaran</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#kontak">Keluar</a></li>

                  </ul>
                </div>
              </div>
            </nav>

            <div class="container">
             <center><h5 class="text-muted"> booking lapangan sesukamu</h5></center>
             <center><h2>Pilih Lapangan dan Jamnya</h2></center>
             <div class="langkah">
              <img class="center-block" id="langkah" src="img/step/step-1.png">
            </div>
            <br>
            <br>

            <div class="row">
             <form action="PayView.html" id="lanjut" method="">
              <div class="tombol-submit">
                <button type="submit" id="lanjut" class="btn"> Next </button>
              </div>
            </form>


            <div class="col-md-2">
              <div class="thumbnail">
                <img src="img/lap3.png" alt="barang1">
                <div class="caption">
                  <center><h3>Lapangan  1</h3></center>
                  <p style="font-size: 12px;">lapangan dalam kondisi baik dengan dilengkapi rumput</p>
                  <div class="bs-example">
                    <div class="panel-group" id="accordion">a
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Pilih Jam</a>
                          </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">

                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="jam"> <script type="text/javascript">
                                for $i=1; $i <= 10; $i++)
                              {
                              </script>
                              jam 09.00
                            </label>
                          </div>



                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>


            </body>
            </html>
