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
								<strong class="text-uppercase">Akun Saya <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> Akun Saya</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> Wishlist</a></li>
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
								<strong class="text-uppercase">Keranjang:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./assets/img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./assets/img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./assets/img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./assets/img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./assets/img/thumb-product01.jpg" alt="">
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
				<div class="category-nav">
					<span class="category-header">Kategori<i class="fa fa-list"></i></span>
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
   
												<h4 class="list-links" style="margin-left: 30px;">Produk Terlaris Dari: <?php echo $category->nama_kategori_brg ?></h4>
        <?php
    if(!empty($category->subs)) { 
        foreach ($category->subs as $sub)  { ?>

        <div class="col-md-4">
										<ul class="list-links">

											<li>
												<a class="banner banner-2" href="#">
											<img src="./assets/img/<?php echo $sub->foto_barang ?>" id="images" alt="">
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
						<li><a href="./">Beranda</a></li>
						<li><a href="./Produk">Semua Produk</a></li>
						<li><a href="./Penjual">Penjual</a></li>
						
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

	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<?php ?>
					<div class="banner banner-1">
						<img src="./assets/img/banner01.jpg" alt="">
						<div class="banner-caption text-center">
							<h1>Bags sale</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./assets/img/banner02.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">Kami Jual Harga Jujur<br><span class="white-color font-weak">Barokah</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./assets/img/banner03.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color">New Product <span>Collection</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./assets/img/banner10.jpg" alt="">
						<div class="banner-caption text-center">
							<div class="banner-caption" id="bannerku2">
							<h2 class="white-color">KOLEKSI TERBARU</h2>
								</div>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./assets/img/banner11.jpg" alt="">
						<div class="banner-caption text-center">
							<div class="banner-caption" id="bannerku2">
							<h2 class="white-color">PRODUK FAVORIT</h2>
						</div>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" href="#">
						<img src="./assets/img/banner12.jpg" alt="">
						<div class="banner-caption text-center">
							<div class="banner-caption" id="bannerku2">
							<h2 class="white-color">PRODUK TERBAROKAH</h2>
						</div>
						</div>
					</a>
				</div>
				<!-- /banner -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->



	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<?php  foreach ($hasil3 as $tampil) {  ?>
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="./assets/img/<?php echo $tampil->foto_banner ?>" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color"><?php echo $tampil->nama_banner ?><br><span class="white-color font-weak"></span></h1>
							<button class="primary-btn">Beli Sekarang</button>
						</div>
					</div>
				</div>

				<?php } ?>
				<!-- /banner -->

				<!-- banner -->

				<?php  foreach ($hasil4 as $tampil) {  ?>
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./assets/img/<?php echo $tampil->foto_banner ?>" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color"><?php echo $tampil->nama_banner; ?></h2>
						</div>
					</a>
				</div>
				<?php } ?>
				<!-- /banner -->

				<!-- banner -->
				<?php  foreach ($hasil5 as $tampil) {  ?>
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./assets/img/<?php echo $tampil->foto_banner ?>" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color"><?php echo $tampil->nama_banner ?></h2>
						</div>
					</a>
				</div>
				<?php } ?>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Produk Baru</h2>
					</div>
				</div>
				<!-- section title -->
					<?php 
    foreach ($hasil2 as $tampil)
        {
      ?><!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Harga Modal
							<h4 class="product-price">Rp.<?php echo number_format($tampil->harga_modal) ?></h4>	
							</button>
							<img src="./assets/img/<?php echo $tampil->foto_barang ?>" id="images_last" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">Rp. <?php echo number_format($tampil->harga_jual) ?></h3>
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
							<h2 class="product-name"><a href="#"><?php echo $tampil->nama_barang ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Tambah Keranjang</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<?php } ?>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- banner -->
				<?php foreach ($hasil6 as $tampil) { ?>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="./assets/img/<?php echo $tampil->foto_banner ?>"  alt="" >
						<div class="banner-caption">
							<h2 class="white-color"><?php echo $tampil->nama_banner ?></h2>
							<button class="primary-btn">BELI SEKARANG</button>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- /banner -->
				<?php foreach ($barang_fashion as $tampil) {
				?>
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>BARU</span>
								<span class="sale">-20%</span>
							</div>
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Harga Modal
							<h4 class="product-price">Rp.<?php echo number_format($tampil->harga_modal) ?></h4>	
							</button>
							<img src="./assets/img/<?php echo $tampil->foto_barang ?>" id="images_last2" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">Rp. <?php echo number_format($tampil->harga_jual) ?> <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating"> 
								<?php if($tampil->liked <= 20 && $tampil->liked <= 29){
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
							<h2 class="product-name"><a href="#"><?php echo $tampil->nama_barang ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> KERANJANG</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				<?php } ?>
		

				
				<!-- /Product Single -->
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">JUALAN BARANG BAROKAH</h2>
						<br/>
						<h4>Menjual Barang Dibawah Harga Modal</h4>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<?php foreach ($barang_barokah as $tampil) {

				
				 ?>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Harga Modal
							<h4 class="product-price">Rp.<?php echo number_format($tampil->harga_modal) ?></h4>	
							</button>
							<img src="./assets/img/<?php echo $tampil->foto_barang ?>" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">Rp. <?php echo number_format($tampil->harga_jual) ?></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#"><?php echo $tampil->nama_barang ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> KERANJANG</button>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!--  /Product Single -->

				<!-- /Product Single -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./assets/img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Menjual Barang dengan marketing anti riba dan melandaskan kejujuran</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/slick.min.js"></script>
	<script src="./assets/js/nouislider.min.js"></script>
	<script src="./assets/js/jquery.zoom.min.js"></script>
	<script src="./assets/js/main.js"></script>

</body>

</html>
