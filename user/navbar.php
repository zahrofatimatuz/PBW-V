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

            <a class="navbar-brand" href="/">
                <img alt="Brand" src="../img/logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link js-scroll-trigger" href="User.php">Hai<?= $_SESSION['nama']?>
                    </a></li>
                <li><a href="bayar.php">Pesanan</a></li>
                <li><a href="UploadBukti.php">Pembayaran</a></li>
                <li><a href="konfirmasi.php">Konfirmasi</a></li>
                <li><a class="nav-link js-scroll-trigger" href="../logout.php">Keluar</a></li>

            </ul>
        </div>
    </div>
</nav>