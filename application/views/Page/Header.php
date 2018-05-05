<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" />

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
					<span>Welcome to E-shop!</span>
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
							<img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="" width="10px">
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
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="<?php echo base_url(); ?>/assets/img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="<?php echo base_url(); ?>/assets/img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
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

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
							<?php 
    foreach ($hasil as $category)
        {
      ?>  

	<?php if($category->mode == '1'){ ?>
	<li class="dropdown side-dropdown">

							<a href="<?php echo base_url() ?>Search/Seach_produk?pilih=<?php echo $category->id_kategori_brg ?>" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">  <?php echo $category->nama_kategori_brg ?><i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
   
												<h4 class="list-links" style="margin-left: 30px;">Produk Terlaris Dari: 	<?php echo $category->nama_kategori_brg ?></h4>
        <?php
    if(!empty($category->subs)) { 
        foreach ($category->subs as $sub)  { ?>

        <div class="col-md-4">
										<ul class="list-links">

											<li>
												<a class="banner banner-2" href="#">
											<img src="<?php echo base_url(); ?>/assets/img/<?php echo $sub->foto_barang ?>" id="images" alt="">
											<div class="banner-caption" id="bannerku">
												<h3 class="list-links-title" style="color:white"><?php  echo $sub->nama_barang;   ?></h3>

							<h3 class="product-price" style="color: white">Rp.<?php echo number_format($sub->harga_jual) ?></h3>
											</div>
										</a>
											</li>							
										</ul>
										<hr>
										<hr class="hidden-md hidden-lg">
									</div>
                     
          
          


    
<?php
        }
        }
        else {

        }
        ?>

<center>
										<h5><a href="<?php echo base_url() ?>Search/Seach_produk?pilih=<?php echo $category->id_kategori_brg ?>">Lihat Selengkapnya</a></h5></center>
									</div>
							</div>
						</li>

        <?php } else { ?>


						<li><a href="<?php echo base_url() ?>Search/Seach_produk?pilih=<?php echo $category->id_kategori_brg ?>"><?php echo $category->nama_kategori_brg;?></a></li>


        <?php } ?>

<?php } ?>	
						
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="<?php echo base_url(); ?>">Beranda</a></li>
						<li><a href="<?php echo base_url(); ?>/Produk">Semua Produk</a></li>
						<li><a href="<?php echo base_url(); ?>/Penjual">Penjual</a></li>
						<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="products.html">Products</a></li>
								<li><a href="product-page.html">Product Details</a></li>
								<li><a href="checkout.html">Checkout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Products</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
			
					

					
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter By Size:</h3>
						<ul class="size-option">
							<li class="active"><a href="#">S</a></li>
							<li class="active"><a href="#">XL</a></li>
							<li><a href="#">SL</a></li>
						</ul>
					</div>
					<!-- /aside widget -->

						

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter by Gender</h3>
						<ul class="list-links">
							<li class="active"><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
						</ul>
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Produk Top</h3>
						<!-- widget product -->
							<?php foreach ($tampil_top as $tampil) {
						
							 ?>
						<div class="product product-widget">
							<div class="product-thumb">
								<img src="<?php echo base_url(); ?>/assets/img/<?php echo $tampil->foto_barang ?>" alt="">
							</div>
							<div class="product-body">
								<h2 class="product-name"><a href="#"><?php echo $tampil->nama_barang ?></a></h2>
								<h3 class="product-price">Rp.<?php echo number_format($tampil->harga_modal) ?></h3>
								<div class="product-rating"> 
								<?php if($tampil->liked >= 20 && $tampil->liked <= 29){
									echo "<i class='fa fa-star'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
									
								}else if($tampil->liked >= 30 && $tampil->liked <=49){
									echo "<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									";
									echo "<i class='fa fa-star-o empty'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
								}else if($tampil->liked >= 50 && $tampil->liked <=69){
									echo "<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									";
									echo "<i class='fa fa-star-o empty'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
								}else if ($tampil->liked >= 70 && $tampil->liked <=80) {
									echo "<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>";
									echo "<i class='fa fa-star-o empty'></i>";
								}else {
									echo "<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									<i class='fa fa-star'></i>
									";
								}
								?>
							</div>
							</div>
						</div>
						<?php 
					}
						?>
						<!-- /widget product -->

						
						<!-- /widget product -->
					</div>
					<!-- /aside widget -->
				</div>
				<!-- /ASIDE -->