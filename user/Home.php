<!DOCTYPE html>
<html lang="en" id="home">

<head>
	<title>BolaOn : Booking Lapangan Online</title>
	<link rel="img/logosquare.png" href="img/logosquare.png">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link href="css/style2.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap Online-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

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
					<img alt="Brand" src="img/logo.png">
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="nav-link js-scroll-trigger" href="#">Hai </a></li>
					<li><a class="nav-link js-scroll-trigger" href="booking.php">Pesanan</a></li>
					<li><a a class="nav-link js-scroll-trigger" href="bayar.php">Pembayaran</a></li>
					<li><a a class="nav-link js-scroll-trigger" href="index.php ?>">Keluar</a></li>

				</ul>
			</div>
		</div>
	</nav>

<section>

	<div class=".col-lg-1">
	<div id="myCarousel" class="carousel slide landing" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/slides/img1.png" alt="img-responsive">
			</div>

			<div class="item">
				<img src="img/slides/img2.png" alt="img-responsive">
			</div>

			<div class="item">
				<img src="img/slides/img3.png" alt="img-responsive">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	</div>
</section>


	<div class="container">

		<div class="tanggal">

			<div class="form-group">
				<div class='input-group date' id='datetimepicker1'>
					<input placeholder="masukkan tanggal" type='text' class="form-control" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>

<script type="text/javascript">
 $(function(){
  $("#datetimepicker1").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>

			<script type="text/javascript">
				$(function () {
					$('#datetimepicker1').datetimepicker();
				});
			</script>
			<form action="BookingView.html" method="">
				<div class="tombol-submit">
			<button class="btn btn-default" id="tanggal" href="#" role="button">Pilih Tanggal</button>
		</div>
	</form>
</div>


		<section class="tentang" id="tentang">
			<div container>
				<div class="row">
					<div class="col-md-6">
						<h2><strong>Tentang</strong></h2>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>


					<div class="col-md-6">
						<a href="#thumbnail" class="thumbnail">
							<img src="img/slides/img2.png" alt="...">
						</a>

					</div>
				</div>

			</div>
		</div>
	</section>
	<section class="kontak" id="kontak">
		<div class="row">
			<div class="kontak text-center">
				<h2><strong>Contact</strong></h2>
				<hr>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
			</div>

			<div class="col-lg-12">

			</div>
		</div>
	</section>

	<footer>
		<div class="row">

		</div>

	</footer>

	<div id="black"></div>
	<div class="popup" id="poplogin">
		<a onclick="hilangkan_semua();" id="close">X</a>
		<h3>Masuk</h3>
		<form action="login">
			<input type="text" name="username" class="inputtext single" placeholder="Username / Email">
			<input type="password" name="pass" class="inputtext single" placeholder="Password">
			<input type="submit" value="MASUK" class="btn masuk"> 
		</form>
	</div>

	<form action="http://localhost/get/bio.php" method="GET">
	<div class="popup" id="popregister">
		<a onclick="hilangkan_semua();" id="close">X</a>
		<h3>Daftar</h3>
		<form action="Daftar">
			<input type="text" name="nlengkap" class="inputtext single" placeholder="Nama">
			<input type="text" name="Email" class="inputtext single" placeholder="Email">
			<input type="text" name="nope" class="inputtext single" placeholder="Nomer HP">
			<input type="password" name="pass" class="inputtext single" placeholder="Password">
			
			<input type="checkbox" name="check" id="check"><label for="check">Saya Setuju dengan syarat dan ketentuan</label>
			<input type="submit" value="Daftar" class="btn daftar"> 
		</form>
	</div>

 <!-- Bootstrap core JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

	<script type="text/javascript">
		var pup = document.getElementById('black');
		var anu = document.getElementById('poplogin');
		var anu2 = document.getElementById('popregister');
		function tampilkan_masuk(){
			pup.style.display = "block";
			anu.style.display = "block";
		}
		function tampilkan_daftar(){
			pup.style.display = "block";
			anu2.style.display = "block";
		}
		function hilangkan_semua(){
			pup.style.display = "none";
			anu.style.display = "none";
			anu2.style.display = "none";
		}
	</script>


	<script src="js/jquery-3.3.1.min"></script>
	<script src="js/bootstrap.min.js"></script>


</div>
</div>
</body>
</html>
