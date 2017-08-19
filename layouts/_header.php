<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>COEM News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C300%2C700%7CRaleway%3A400%2C200%2C600%2C700&amp;ver=4.2.6" type="text/css" media="all">
	<link rel="stylesheet" href="assets/rs-plugin/css/settings.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/icons/icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/core-icons/core_style.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/scripts.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
</head>
	<header id="ABdev_main_header" class="clearfix ">
		<div class="container clearfix">
			<div id="logo">
			</div>
			<div class="menu_wrapper">
				<div class="menu_slide_toggle">
					<div class="icon-menu"></div>
				</div>
				<div id="title_breadcrumbs_bar">
					<div class="breadcrumbs">
						<a href="#">COEM</a>
						<i class="ci_icon-angle-right"></i>
						<span class="current">Berita</span>
					</div>
				</div>
				<nav>
					<ul>
						<li><a href="/pbw"><span>Home</span></a></li>
						<li><a href="/pbw/admin/login.php"><span>Login</span></a></li>
						<li><a href="/pbw/signup.php"><span>Register</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<?php if (isset($_GET['berita_id'])) {
		require_once 'src/berita.php';
		$berita = new berita();
		$data = $berita->detail($_GET['berita_id']);
	?>
		<?php while ($e = $data->fetch_assoc()) { ?>
			<section id="headline_breadcrumbs_bar" class="with_image">
			<div class="headline_image headline_style_image" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $e['gambar'] ?>');background-size: 100%;background-position: center; ">
				<div class="container">
					<div class="row">
						<div class="span12 left_aligned headline_title">
							<h2>
								<?php echo $e['judul'] ?>
							</h2>
						</div>
						<div class="white_text category_meta_description">
							by <?php echo $e['username']." | ".$e['nama_kategori'] ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>
	<?php } else { ?>
		<section id="headline_breadcrumbs_bar" class="hadline_no_image" style="padding-top: 24px;">
			<div>
				<div class="container">
					<div class="row">
						<div class="span12 left_aligned headline_title">
							<h2>
								COEM News
							</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>

	<body class="page">
	<section class="blog_section">