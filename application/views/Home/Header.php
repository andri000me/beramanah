

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
					<?php foreach ($hasil7 as $tampil) {
					
					 ?>
					<div class="banner banner-1">
						<img src="./assets/img/<?php echo $tampil->foto_slider ?>" alt="">
						<div class="banner-caption text-center">
							<h1 style="color: white"><?php echo $tampil->judul_slider ?></h1>
							
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->
<?php  } ?>
					
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
							<h2 class="product-name"><a href="<?php echo base_url() ?>Pilih_produk/Halaman_produk/<?php echo $tampil->id_barang ?>"><?php echo $tampil->nama_barang ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<input type="hidden" name="banyak" id="<?php echo $tampil->id_barang;?>" value="1" class="quantity form-control">
								<button class="add_cart primary-btn add-to-cart" data-id_barang="<?php echo $tampil->id_barang;?>" data-nama_barang="<?php echo $tampil->nama_barang;?>" data-harga_jual="<?php echo $tampil->harga_jual;?>" data-toggle="modal" data-target="#tambah"><i class="fa fa-shopping-cart"></i>TambahKeranjang</button>
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
							<h2 class="product-name"><a href="<?php echo base_url() ?>Pilih_produk/Halaman_produk/<?php echo $tampil->id_barang ?>"><?php echo $tampil->nama_barang ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="add_cart primary-btn add-to-cart" data-id_barang="<?php echo $tampil->id_barang;?>" data-nama_barang="<?php echo $tampil->nama_barang;?>" data-harga_jual="<?php echo $tampil->harga_jual;?>" data-toggle="modal" data-target="#tambah"><i class="fa fa-shopping-cart"></i>TambahKeranjang
								</button>
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
							<h2 class="product-name"><a href="<?php echo base_url() ?>Pilih_produk/Halaman_produk/<?php echo $tampil->id_barang ?>"><?php echo $tampil->nama_barang ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="add_cart primary-btn add-to-cart" data-id_barang="<?php echo $tampil->id_barang;?>" data-nama_barang="<?php echo $tampil->nama_barang;?>" data-harga_jual="<?php echo $tampil->harga_jual;?>" data-toggle="modal" data-target="#tambah"><i class="fa fa-shopping-cart"></i>TambahKeranjang</button>
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
	<!-- Modal -->
  <div class="modal fade" id="tambah" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h4 class="modal-title">Menambahkan Di Keranjang</h4></center>	
        </div>
        <div class="modal-body">
        	<center>
          <p>Berhasil Menambahkan Dikeranjang</p>
          <img src="./assets/img/as.jpg" class="img-responsive" width="300px">
          </center>
        </div>
        <div class="modal-footer">
        	<center>
          <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
      </center>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="hapus" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <h4 class="modal-title">Menghapus Data Dikeranjang</h4>
      </center>
        </div>
        <div class="modal-body">
        	<center>
          <p>Berhasil Menghapus Dikeranjang</p></center>
          <center><img src="./assets/img/bag.png" width="200px;"></center>
        </div>
        <div class="modal-footer">
          <center>
          <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
      </center>
        </div>
      </div>
      
    </div>
  </div>
  

	<!-- jQuery Plugins -->
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/slick.min.js"></script>
	<script src="./assets/js/nouislider.min.js"></script>
	<script src="./assets/js/jquery.zoom.min.js"></script>
	<script src="./assets/js/main.js"></script>


<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var id_barang    = $(this).data("id_barang");
			var nama_barang  = $(this).data("nama_barang");
			var harga_jual = $(this).data("harga_jual");
			var banyak     = $('#' + id_barang).val();
			$.ajax({
				url : "<?php echo base_url();?>Home/add_to_cart",
				method : "POST",
				data : {id_barang: id_barang,nama_barang: nama_barang, harga_jual: harga_jual, banyak: banyak},
				success: function(data){
					$('#detail_cart').html(data);
				}	
			});
		});

		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>index.php/Home/load_cart");

		//Hapus Item Cart
		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>Home/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>
</body>

</html>
