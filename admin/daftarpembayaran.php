<?php  
include "../koneksi.php";
$query = "SELECT * FROM lapangan";
$res = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html lang="en" id="home">

<head>
	<title>BolaOn : Daftar Pesanan</title>
	<link rel="../img/logosquare.png" href="img/logosquare.png">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link href="../css/style2.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap Online-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Font Online -->

	<link href="https://fonts.googleapis.com/css?family=Courgette|Handlee|Lato|Poppins|Righteous|Saira|Text+Me+One" rel="stylesheet">

</head>

<body>

	<!-- Navbar -->
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
					<img alt="Brand" src="../img/logo.png">
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
                    <li><a  class="nav-link js-scroll-trigger" href="../index.php">Keluar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section>
		<div class="container">
			<div class="daftarlapangan">
				<div class="row">
					<h2><strong><center>Daftar Pesanan</center></strong></h2>
					<br>
					<div class="col-md-7" id="daftarlapangan" >
						<center><table class="table table-hover">
							<thead>
								<tr>
									<th>no</th>
									<th>Id Pesanan</th>
									<th>Nama</th>
									<th>Tanggal</th>
									<th>Lapangan</th>
									<th>Harga</th>
									<th>Status Pesanan</th>									
									<th></th>
								</tr>
							</thead>

						</table>
						</center>
					</div>
				</div>
				<?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim ORDER BY nim ASC
      $query = "SELECT id_user,nama,tanggal_pesanan,jumlah_jam,harga  FROM user JOIN pesanan ON id_use=id_user JOIN
      			detail_pesanan ON id_pesanan=id_pesanan ";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td><center>$no</td>"; //menampilkan no urut
        echo "<td><center>$data[nama]</td>"; //menampilkan data nim
        echo "<td><center>$data[nim]</td>"; //menampilkan data nama
        echo "<td><center>$data[jurusan]</td>"; //menampilkan data fakultas
        echo "<td><center>$data[angkatan]</td>"; //menampilkan data jurusan
        echo "<td><center>$data[sie]</td>"; //menampilkan data ipk
        // membuat link untuk mengedit dan menghapus data
        echo '<td> <center>
          <a href="edit.php?id='.$data['id'].'">Edit</a> /
          <a href="hapus.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
				<div class="tombol">
				<input type="submit" value="Tambah" id="simpan" class="btn simpan rounded-0">
				<input type="submit" value="Ubah" id="batal" class="btn batal">
				<input type="submit" value="Hapus" id="simpan" class="btn simpan rounded-0">
				</div>
			</div>
			<br>
			<br>
		</div>


	</section>


	<footer>
		<div class="row">

		</div>

	</footer>

	<script src="../js/jquery-3.3.1.min"></script>
	<script src="../js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>
