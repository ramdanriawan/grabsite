<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Baca Berita Terbaru Dari Berbagai Sumber</title>
		<!--  load semua script yang dibutuhkan -->
		<script src="/node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
		<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
		<script src="/script.js" charset="utf-8"></script>

		<!--  load semua css yang dibutuhkan -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="/style.css">
	</head>
	<body class="container">

		<!-- header  -->
		<header class="header">
			<div class="row">
				<!--  bagian logo -->
				<div class="col-md-6 col-xs-12">
					<h2 class="fontopensansbold">
						<a href="/">My Berita</a>
					</h2>
				</div>

				<!--  di bagian kotak pencarian -->
				<div class="col-md-6 col-xs-12">
					<form class="pull-right form-inline" action="search.php" method="post">
						<!--  inputan -->
						<div class="input-group">
							<input class="form-control" type="search" name="q" placeholder="Cari Berita...">
						</div>

						<!--  button submit -->
						<div class="input-group">
							<input class="btn btn-primary" type="submit" name="submit" value="submit">
						</div>
					</form>
				</div>
			</div>
		</header>

		<!--  menu navigasi -->
		<nav class="navigasi">
			<!--  kategory berita -->
			<ul class="nav nav-tabs nav-justified text-capitalize">
				<li class="active">
					<a class="active" href="#menu1">News</a>
				</li>
				<li>
					<a href="#menu2">Ekonomi</a>
				</li>
				<li>
					<a href="#menu3">Bola</a>
				</li>
				<li>
					<a href="#menu4">Tekno</a>
				</li>
				<li>
					<a href="#menu5">Sains</a>
				</li>
				<li>
					<a href="#menu6">Entertainment</a>
				</li>
				<li>
					<a href="#menu7">Otomotif</a>
				</li>
				<li>
					<a href="#menu8">Lifestyle</a>
				</li>
				<li>
					<a href="#menu9">Property</a>
				</li>
				<li>
					<a href="#menu10">Travel</a>
				</li>
			</ul>
		</nav>

		<!--  menu untuk sidebar -->
		<aside class="aside coll-md-4 pull-right">
			<!--  berita terpopuler -->
			<ul class="nav navbar-link">
				<li class="aside_header text-center">Berita Terpopuler</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita terpopuler ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita terpopuler ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita terpopuler ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita terpopuler ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita terpopuler ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita terpopuler ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita terpopuler ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
			</ul>
			<!--  berita terpopuler -->
			<ul class="nav navbar-link">
				<li class="aside_header text-center">Berita lagi</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita lagi ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita lagi ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita lagi ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita lagi ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita lagi ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita lagi ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
				<li>
					<div class="judul">
						<a href="#beritaterpopuler1">berita lagi ke 1 aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
					</div>
					<div class="dibaca">
						dibaca : 500x
					</div>
				</li>
			</ul>

		</aside>
