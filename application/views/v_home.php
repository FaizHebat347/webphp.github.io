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
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

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
	<?php
	error_reporting(0);
	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	?>

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

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
				<li style="background-image: url(<?php echo base_url() . 'theme/images/1-slide.jpeg' ?>);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h2>Web ini masih dalam pengembangan</h2>
								<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-lg">Get started</a></p>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(<?php echo base_url() . 'theme/images/2-slide.jpg' ?>);">
					<div class="container">
						<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h2>Ayo ikut pelatihan di BLKPP</h2>
								<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-lg">Get started</a></p>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(<?php echo base_url() . 'theme/images/3-slide.jpg' ?>);">
					<div class="container">
						<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
							<div class="slider-text-inner">
								<h2>Ayo ikut pelatihan di BLKPP</h2>
								<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-lg">Get started</a></p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>

	<div id="fh5co-why-us" class="animate-box">
		<div class="container">
			<div class="row">
				<h1 class="my-4 text-center wow fadeInUp delay-1s animated" style="visibility: visible; animation-name: fadeInUp;">Balai Latihan Kerja dan Pengembangan Produktivitas</h1>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url() . 'theme/images/foto pengawasan.png' ?>" class="img-responsive"></span>
					<h3>PENGAWASAN TENAGA KERJA</h3>
					<p>Bidang didalam dinas tenaga kerja dan transmigrasi dalam melakukan pengawasan tenaga kerja yang ada.</p>
					<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url() . 'theme/images/LTSP.png' ?>" class="img-responsive"></span>
					<h3>LAYANAN TERPADU SATU PINTU</h3>
					<p>Bidang didalam dinas tenaga kerja dan transmigrasi dalam melakukan layanan terpadu satu pintu.</p>
					<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url() . 'theme/images/BLK.png' ?>" class="img-responsive"></span>
					<h3>KEJURUAN BLKPP</h3>
					<p>Terdapat beberapa kejuruan yang disediakan BLKPP untuk di ikuti sebagai pelatihan sebelum bekerja.</p>
					<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>


	<div class="fh5co-section-with-image">

		<img src="<?php echo base_url() . 'theme/images/2-slide.jpg' ?>" alt="" class="img-responsive">
	</div>

	</div>



	<div id="fh5co-blog" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>BERITA TERBARU</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
				foreach ($post->result_array() as $j) :
					$post_id = $j['tulisan_id'];
					$post_judul = $j['tulisan_judul'];
					$post_isi = $j['tulisan_isi'];
					$post_author = $j['tulisan_author'];
					$post_image = $j['tulisan_gambar'];
					$post_tglpost = $j['tanggal'];
					$post_slug = $j['tulisan_slug'];
				?>
					<div class="col-md-4">
						<a class="fh5co-entry" href="<?php echo base_url() . 'artikel/' . $post_slug; ?>">
							<figure>
								<img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" alt="" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3><?php echo $post_judul; ?></h3>
								<span class="fh5co-date"><?php echo $post_tglpost . ' | ' . $post_author; ?></span>
								<?php echo limit_words($post_isi, 20) . '...'; ?>
							</div>
						</a>
					</div>
				<?php endforeach; ?>

				<div class="col-md-12 text-center">
					<p><a href="<?php echo base_url() . 'artikel' ?>" class="btn btn-primary btn-outline with-arrow">View More <i class="icon-arrow-right"></i></a></p>
				</div>
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
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>
	<script>
		var nav = document.querySelector("nav")
		window.addEventListener("scroll", () => {
			if (document.documentElement.scrollTop > 20) {
				nav.classList.add("sticky");
			} else {
				nav.classList.remove("sticky");
			}
		})
	</script>

</body>

</html>