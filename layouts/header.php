<!DOCTYPE html>
<html>
<head>
<title>Agri Bisnis</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //for-mobile-apps -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--FlexSlider-->
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />	
<!--End-slider-script-->
<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
<!-- custom css -->
<link rel="stylesheet" href="assets/css/custom.css">

<link href="assets/css/animate.min.css" rel="stylesheet"> 
<script src="assets/js/wow.min.js"></script>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap');
</style>
</head>
	
<body>
<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top nav menu menu--horatio" >
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" style="margin-top:15px; " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="" href="#" style="width: 200px; display: inline-flex; align-items: center; justify-items: center;">
				<img href="#" alt="" src="https://perumdajepara.co.id/public/assets/front/img/logo%20PERUMDA%20JEPARA.png"  class="img-brand">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right text-center" style="align-items: center;">
				<li class="menu__item  <?php if($page == "index") echo "menu__item--current" ?>"><a href="index.php" style="<?php if($page == "index") echo "color: #c59c45;" ?>">Beranda</a></li>
				<li class="menu__item  <?php if($page == "tentangkami") echo "menu__item--current" ?>"><a href="tentang_kami.php" style="<?php if($page == "tentangkami") echo "color: #c59c45;" ?>">Tentang Kami</a></li>
				<li class="menu__item  <?php if($page == "produk") echo "menu__item--current" ?>"><a href="produk.php" style="<?php if($page == "produk") echo "color: #c59c45;" ?>">Produk</a></li>
				<li class="menu__item  <?php if($page == "informasi") echo "menu__item--current" ?>"><a href="informasi.php" style="<?php if($page == "informasi") echo "color: #c59c45;" ?>">Informasi</a></li>
				<li class="menu__item  <?php if($page == "partner") echo "menu__item--current" ?>"><a href="partner.php" style="<?php if($page == "partner") echo "color: #c59c45;" ?>">Partner</a></li>
				<li class="menu__item  <?php if($page == "contact") echo "menu__item--current" ?>"><a href="contact.php" style="<?php if($page == "contact") echo "color: #c59c45;" ?>">Kontak</a></li>
				<form action="" class="search-input1" style="margin-left: 10px; padding-top: 10px;">
					<input type="text" class="form-control input_search" placeholder="Cari Berita ...">
					<button class="btn btn-sm input-icon"><i class="fa fa-magnifying-glass" style="color: gold;"></i> </button>
				</form>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<!-- end navbar -->