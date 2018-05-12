<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Beramanah</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="./assets/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="./assets/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="./assets/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="./assets/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="./assets/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Jual Beli barang yang jujur dan barokah!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">Store</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">FAQ</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo" style="width: 200px;">
						<a class="logo" href="#">
							<img src="./assets/img/logo.png" alt="" width="10px">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
					<form action="<?php echo site_url('Search/Seach_produk'); ?>" method = "get">
						 <input type="text" class="input search-input" value="<?php echo isset($search_value) ? $search_value : ''?>" name="keyword"  required>
							<select class="input search-categories" name="category" style="width: 140px;">

								<option value="">Semua Kategori</option>
											<?php 
    foreach ($hasil as $category)
        {
      ?>  
								<option value="<?php echo $category->id_kategori_brg ?>"><?php echo $category->nama_kategori_brg ?></option>

<?php } ?>
							</select>
							<button value="Search" type="submit" class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase" style="float: left;">
	<p><?php echo $this->session->userdata("nama"); ?></p></strong>
<?php  foreach ($hasil8 as $tampil){ ?>  
<?php echo $tampil->id_user ?>
<?php } ?>

							</div>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> Akun Saya</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> Wishlist</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="<?php echo base_url() ?>Home/logout"><i class="fa fa-sign-out"></i>Log out</a></li>

							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									
								</div>
								<strong class="text-uppercase">Keranjang:</strong>
								<br>
															</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list" id="detail_cart">
										
									</div>
									<div class="shopping-cart-btns">
										
										<a href="<?php echo base_url() ?>Produk/View_cart">
										<button class="main-btn">View Cart</button>
									</a>
										<a href="<?php echo base_url() ?>Produk/Check_out">
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</a>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	
	<!-- /HEADER -->