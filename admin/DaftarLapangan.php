<?php  
include "../koneksi.php";
$query = "SELECT * FROM lapangan";
$res = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html lang="en" id="home">

<head>
	<title>BolaOn : Daftar Lapangan</title>
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
					<li><a href="#lapangan">Account</a></li>
				</ul>
			</div>
        </div>
    </nav>

	<section>
		<div class="container">
			<div class="daftarlapangan">
				<div class="row">
					<h2><strong><center>Daftar Lapangan</center></strong></h2>
					<br>
					<div class="col-md-7" id="daftarlapangan" >
						<center><table class="table table-hover">
							<thead>
								<tr>
									<th>Nama Lapangan</th>
									<th>Ukuran</th>
									<th>Harga</th>
									<th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								while ($row=mysqli_fetch_assoc($res)) {
								?>
								<tr>
									<td><?php echo $row['nama_lapangan'] ?></td>
									<td><?php echo $row['ukuran']?></td>
									<td><?php echo $row['harga']?></td>
									<td><?php echo $row['keterangan'] ?></td>
                                    <td><?php echo $row['gambar'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="proses/proseshapuslapangan.php?id=<?php echo $row['id_lapangan'] ?>" class="btn btn-danger">Hapus</a>
                                    </td>
								</tr>
								<?php
									}
								?>

							</tbody>

						</table>
					</center>
				</div>

			</div>
			<div class="tombol">
				<form action="CreateUpdateYardView.html" method="">
					<input type="submit" value="Tambah" id="simpan" class="btn simpan rounded-0">
				</form>
			</div>
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
