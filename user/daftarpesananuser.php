    <?php
    include "../koneksi.php";
    $query = "SELECT * FROM lapangan";
    $res = mysqli_query($link, $query);
    ?>
    <!DOCTYPE html>
    <html lang="en" id="home">

    <head>
        <title>BolaOn : Daftar Pesanan</title>
        <link rel="img/logosquare.png" href="img/logosquare.png">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- css -->
        <link href="css/style2.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Online-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Font Online -->

        <link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One"
              rel="stylesheet">

    </head>

    <body>

    <?php
    include "navbar.php";
    ?>

    <section>
        <div class="container">
            <div class="daftarlapangan">
                <div class="row">
                    <h2><strong>
                            <center>Daftar Pesanan</center>
                        </strong></h2>
                    <br>
                    <div class="col-md-7" id="daftarpesanan">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id Pesanan</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim ORDER BY nim ASC
                            $query = "SELECT * FROM pesanan p 
                                          JOIN user u ON p.id_user=u.id_user";
                            $result = mysqli_query($link, $query);
                            //mengecek apakah ada error ketika menjalankan query
                            if (!$result) {
                                die ("Query Error: " . mysqli_errno($link) .
                                    " - " . mysqli_error($link));
                            }

                            //buat perulangan untuk element tabel dari data mahasiswa
                            $no = 1; //variabel untuk membuat nomor urut
                            // hasil query akan disimpan dalam variabel $data dalam bentuk array
                            // kemudian dicetak dengan perulangan while
                            while ($data = mysqli_fetch_assoc($result)) {
                                // mencetak / menampilkan data
                                echo "<tr>";
                                echo "<td>$data[id_pesanan]</td>"; //menampilkan data nim
                                echo "<td>$data[nama]</td>"; //menampilkan data nama
                                echo "<td>$data[tanggal_pesanan]</td>"; //menampilkan data fakultas
                                // membuat link untuk mengedit dan menghapus data
                                echo '<td> 
                                          <a href="edit.php?id=' . $data['id_pesanan'] . '">Edit</a> /
                                          <a href="hapus.php?id=' . $data['id_pesanan'] . '"
                                              onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
                                        </td>';
                                echo "</tr>";
                                $no++; // menambah nilai nomor urut
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <form action="ConfirmationView.html" method="">
                    <div class="tombol">
                        <input type="submit" value="Detail" id="batal" class="btn batal">
                    </div>
            </div>
            </form>

            <br>
            <br>
        </div>


    </section>


    <footer>
        <div class="row">

        </div>

    </footer>

    <script src="js/jquery-3.3.1.min"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>
    </div>
    </body>
    </html>

