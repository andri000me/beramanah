<!-- container -->

	<div class="section">

		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix">

<?php
if($this->session->userdata("nama")){
}else {
	?>
	<div class="col-md-12">
						<div class="billing-details">
							<p>Sudah Punya akun ? <a href="<?php echo base_url() ?>Produk/Login">Login</a></p>
							<div class="section-title">
								<h3 class="title">Masukan Data Diri</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Nama Depan" placeholder="Masukan Nama depan Anda">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Nama Belakang" placeholder="Masukan Nama Belakang Anda">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Masukan Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="alamat" placeholder="Masukan Alamat Anda">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="kota" placeholder="Masukan Kota">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Kodepos" placeholder="Masukan Kode Pos">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="telepon" placeholder="Nomor Telepon">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Create Account?</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
											<p>
												<input class="input" type="password" name="password" placeholder="Masukan Password">
									</div>
								</div>
							</div>
						</div>
					</div>




<?php } ?>
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Daftar Order</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Nama Produk</th>
										<th></th>
										<th class="text-center">Jumlah</th>
										<th class="text-center">Sub Total</th>
									</tr>
								</thead>
								<tbody id="detail_cart3">




								</tbody>
								<tfoot>
							<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$97.50</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$97.50</th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button class="primary-btn">Place Order</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
</div>
