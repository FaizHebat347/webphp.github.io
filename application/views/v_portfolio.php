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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
								<h2>Kejuruan</h2>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>



	<div id="fh5co-grid-products" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Kejuruan yang ada di BLKPP</h2>
					<p>Beberapa kejuruan yang di buka saat ini.</p>
				</div>
			</div>
		</div>
		<?php
		foreach ($data->result_array() as $i) :
			$port_id = $i['port_id'];
			$port_judul = $i['port_judul'];
			$port_deskripsi = $i['port_deskripsi'];
			$port_author = $i['port_author'];
			$port_image = $i['port_image'];
			$port_tglpost = $i['tanggal'];

		?>
			<div class="col-md-4">
				<a href="#"><img src="<?php echo base_url() . 'assets/images/' . $port_image; ?>" class="img-responsive"></a>
				<div class="v-align">
					<div class="v-align-middle"><br />
						<h3 class="title"><?php echo $port_judul; ?></h3>
						<h5 class="category">Kejuruan BLKPP</h5>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	</div>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<br />
				<p><?php echo $page; ?></p>
			</div>
		</div>
	</div>

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
	<!-- Easy PieChart -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easypiechart.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url() . 'theme/js/jquery.stellar.min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>