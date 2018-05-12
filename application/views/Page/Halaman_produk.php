	<?php
								foreach ($pilih_produk as $tampil) {
												
								?>


<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li>Products</li>
				<li class="active"><?php echo $tampil->nama_barang ?></li>
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

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
						<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view2">
								<img src="<?php echo base_url() ?>assets/img/<?php echo $tampil->foto_barang; ?>" alt="">
							</div>
							
						</div>
					
					</div>
					<div class="col-md-6">
						<div class="product-body">
							
							<h2 class="product-name">
							<?php
								echo $tampil->nama_barang;
								?>
							
							</h2>
							<h3 class="product-price">Rp.<?php echo number_format($tampil->harga_modal) ?></h3>
							<div>
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
							<p><strong>
							<?php 
							if($tampil->status == 1){
								echo "Barang tersedia";
							}else {
								echo "Tidak tersedia";
							}

							?>
							</strong> </p>
							<p>
								<?php echo $tampil->deskripsi_barang ?>

							</p>
						
							<div class="product-btns">
								<input type="hidden" name="banyak" id="<?php echo $tampil->id_barang;?>" value="1" class="quantity form-control">
								<button class="add_cart primary-btn add-to-cart" data-id_barang="<?php echo $tampil->id_barang;?>" data-nama_barang="<?php echo $tampil->nama_barang;?>" data-harga_jual="<?php echo $tampil->harga_jual;?>" data-toggle="modal" data-target="#tambah"><i class="fa fa-shopping-cart"></i>TambahKeranjang</button>
								<div class="pull-right">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab">Description</a></li>
								
								<li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab" class="tab-pane fade in active">
									<p><?php echo $tampil->deskripsi_barang ?></p>
								</div>
								
								</div>
								<div id="tab2" class="tab-pane fade in">



								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->		<?php 
}
								?>
	

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Rekomendasi Buat Kamu</h2>
					</div>
				</div>
				<!-- section title -->
<?php foreach ($rekomendasi as $hasil) {

?>
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">	<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Harga Modal
							<h4 class="product-price">Rp.<?php echo number_format($tampil->harga_modal) ?></h4>	
							</button>
							<img src="<?php echo base_url() ?>assets/img/<?php echo $hasil->foto_barang ?>" alt="">
						</div>
						<div class="product-body">
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
							<h2 class="product-name"><a href="<?php echo base_url() ?>Pilih_produk/Halaman_produk/<?php echo $hasil->id_barang ?>"><?php echo $hasil->nama_barang ?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<input type="hidden" name="banyak" id="<?php echo $hasil->id_barang;?>" value="1" class="quantity form-control">
								<button class="add_cart primary-btn add-to-cart" data-id_barang="<?php echo $hasil->id_barang;?>" data-nama_barang="<?php echo $hasil->nama_barang;?>" data-harga_jual="<?php echo $hasil->harga_jual;?>" data-toggle="modal" data-target="#tambah"><i class="fa fa-shopping-cart"></i>TambahKeranjang</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
<?php } ?>
			
				<!-- /Product Single -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>

