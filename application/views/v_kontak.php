<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BLKPP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Muhammad Faiz" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.ico' ?>">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>

</head>

<body>


	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<nav>
				<div class="nav-content">
					<div class="logo">
						<a href="<?php echo base_url() . '' ?>">BLKPP</a>
					</div>
					<ul>
						<li><a href="<?php echo base_url() . '' ?>">Home</a></li>
						<li><a href="<?php echo base_url() . 'about' ?>">Profil</a></li>
						<li><a href="<?php echo base_url() . 'portfolio' ?>">Kejuruan</a></li>
						<li><a href="<?php echo base_url() . 'gallery' ?>">Gallery</a></li>
						<li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
						<li class="cta"><a href="https://books.google.co.id/books?id=Hcg0iTW5N9EC&pg=PA73&lpg=PA73&dq=download&source=bl&ots=hnGxU7nXEN&sig=ACfU3U2PQLrAEbFo8au-ids4XS5iAA4dSg&hl=id&sa=X&ved=2ahUKEwjF7KG9lvP8AhVNcGwGHT7_A1YQ6AF6BAgQEAM" target="_blank">Download Now</a></li>
					</ul>
				</div>
			</nav>
		</header>
	</div>


	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
				<li style="background-image: url(<?php echo base_url() . 'theme/images/3-slide.jpg' ?>);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h2>Kontak</h2>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>JL.D.I.Panjaitan Km. 8 No.12, Batu IX, Kec. Tanjungpinang Tim., Kota Tanjung Pinang, Kepulauan Riau 29123</li>
						<li><i class="icon-phone"></i>(0771) 4440441</li>
						<li><i class="icon-envelope"></i><a href="#">kepridisnaker@gmail.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.blkppkepri.com</a></li>
					</ul>
				</div>

				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<?php echo $this->session->flashdata('msg'); ?>
					<div class="row">
						<form method="post" action="<?php echo base_url() . 'kontak/kirim_pesan' ?>">
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" name="nama" placeholder="Nama" type="text" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" name="email" placeholder="Email" type="email" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="pesan" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input value="Kirim Pesan" class="btn btn-primary" type="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

	<?php $this->load->view('v_footer'); ?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>
	<!-- Google Map -->
	<script src="https://maps.app.goo.gl/KcpwxPnKe4R6GKyt8"></script>
	<script src="<?php echo base_url() . 'theme/js/google_map.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>