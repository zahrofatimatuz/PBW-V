    <?php
    include '../koneksi.php';
    ?>

    <head>

        <title>BolaOn : Daftar Lapangan</title>
        <link rel="../img/logosquare.png" href="img/logosquare.png">
        <link href="../css/style2.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Online-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--        <script src="../js/jquery-3.3.1.min.js"></script>-->
<!--        <script src="../js/bootstrap.min.js"></script>-->

        <!-- Font Online -->

        <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
              rel="stylesheet">


    </head>

    <body>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->

    <!-- Navbar -->
    <?php
    include "navbaradmin.php";
    ?>

    <div class="sidebar">
        <a class="active" href="#">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>

    <section>
        <div class="container">
            <div class="daftarlapangan">
                <div class="row">
                    <h2><strong>
                            <center id="headtext">Daftar Jadwal</center>
                        </strong></h2>
                    <br>
                    <div class="col-md-7" id="daftarlapangan">
                        <center>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Id Jadwal</th>
                                    <th>Jadwal</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $halaman = 5; //batasan halaman
                                $page = isset($_GET['halaman']) ? (int)$_GET["halaman"] : 1;
                                $mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;
                                $result = mysqli_query($link, "SELECT * FROM jadwal");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total / $halaman);
                                $query = mysqli_query($link, "select * from jadwal LIMIT $mulai, $halaman") or die(mysql_error);
                                $no = $mulai + 1;
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['id_jadwal'] ?></td>
                                    <td><?php echo $row['jadwal'] ?></td>
                                    <td>
                                        <form class="formhapus" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id_jadwal'] ?>" />
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="">
                                <center>
                                    <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                        <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    <?php } ?>
                                </center>
                        </center>
                    </div>

                </div>
                <div class="tombol">
                    <form action="tambahjadwal.php" method="post">
                        <input type="submit" value="Tambah" id="simpan" class="btn simpan rounded-0">
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        </div>

    </section>

    <div id="content">

    </div>


    <script>
        // $(document).on('click','.hapus_jadwal',function(){
        //     var id = $(this).attr('data-id');
        //     $.ajax({
        //         method: "POST",
        //         url: "proses/proseshapusjadwal.php",
        //         data: { id_jadwal:id , type:"delete"},
        //
        //     });
        // });
        $(document).ready(function() {
            // alert("tes");
            $(".formhapus").on('submit', (function () {
                // e.preventDefault();
                $.ajax({
                    url: "http://localhost/PBW-V/admin/proses/proseshapusjadwal.php",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {

                        $("#headtext").html("Menghapus data...");

                    },
                    success: function (result) {
                        $("#headtext").html("Jadwal berhasil dihapus");
                        // setTimeout(function() {
                        //     window.location = "http://localhost/paws/?dashboard"}, 4000);
                    },
                    error: function (xhr, Status, err) {
                        // $("#headtext").html("Terjadi error : "+Status);
                    }

                });
            }));
        });
    </script>

    <!-- <script type="text/javascript">
        $(document).read(function() {
            loadData();

            $('form').on('submit',function (e) {
                e.preventDefault();
                $.ajax({
                    type:$(this).attr('method'),
                    url:$(this).attr('action'),
                    data:$(this).serialize(),
                    success:function (){
                        loadData();
                        resetForm();
                    }
                });

            })
        })

        function loadData() {
            $.get('DaftarJadwal.php',funtion(data){
                $('#content').html(data);
                $('.hapusData').click(function (e) {
                    e.preventDefault();
                    $.ajax({
                        type:'get',
                        url:$(this).attr('href'),
                        success:function (){
                            loadData();
                })
            })
        }

        function resetForm(){
            $('[type=text]').val('');
            $('[name=jadwal]').focus();
        }
    </script>
    -->



    <footer>
        <div class="row">

        </div>

    </footer>


    </div>
    </div>
    </body>
    </html>
