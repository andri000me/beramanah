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
		            <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

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
          <img src="<?php echo base_url() ?>/assets/img/as.jpg" class="img-responsive" width="300px">
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
          <center><img src="<?php echo base_url() ?>/assets/img/bag.png" width="200px;"></center>
        </div>
        <div class="modal-footer">
          <center>
          <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
      </center>
        </div>
      </div>
      
    </div>
  </div>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/slick.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/nouislider.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/jquery.zoom.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>

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
				$('#detail_cart2').load("<?php echo base_url();?>index.php/Home/load_cart2");


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

		//Hapus Item Cart
		$(document).on('click','.hapus_cart2',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>Home/hapus_cart2",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){

					$('#detail_cart2').html(data);
				}
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
	function loadmore(){
    $.ajax({
        url:"<?php echo base_url() ?>/loadmore",
        data:{
          offset :$('#offset').val(),
          limit :$('#limit').val()
        },
        type:json, 
        success :function(data){
            $('#load-more').prepend(data.view)
            $('#offset').val(data.offset)
            $('#limit').val(data.limit)
        }
    })
}
});
</script>
</body>

</html>
