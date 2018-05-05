
				<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sort By:</span>
								<select class="input">
										<option value="0">Position</option>
										<option value="0">Price</option>
										<option value="0">Rating</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store top filter -->

					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							<!-- Product Single -->
							<?php foreach ($produk_all as $tampil) {
						
							 ?>
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Harga Modal
							<h4 class="product-price">Rp.<?php echo number_format($tampil->harga_modal) ?></h4>	
							</button>
							<img src="<?php echo base_url(); ?>/assets/img/<?php echo $tampil->foto_barang ?>" id="images_produk_all" alt="">
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

							<div class="clearfix visible-sm visible-xs"></div>

							
							<!-- /Product Single -->
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sort By:</span>
								<select class="input">
										<option value="0">Position</option>
										<option value="0">Price</option>
										<option value="0">Rating</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /MAIN -->