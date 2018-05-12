<?php 

class Produk extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index($page= 'Isi_produk',$id= null){
		$data['data']=$this->M_data->get_all_produk();
		$data['hasil'] = $this->M_data->tampil_kategori_iki();
		$data['produk_all'] = $this->M_data->tampil_produk_all();
		$data['rekomendasi'] = $this->M_data->rekomendasi()->result();
		$data['pilih_produk'] =$this->M_data->pilih_produk($id)->result();
		$id_usr = $this->session->userdata("nama");
		$data['hasil8'] = $this->M_data->tampil_id_user($id_usr)->result();
		$data['tampil_top'] = $this->M_data->tampil_top_produk_limit_3();

		if($this->session->userdata('status') != "login"){
			$this->load->view('Page/Header');
                        $this->session->set_userdata('username','1');
		}else {
			$this->load->view('Page/Header2',$data);
		}
		$this->load->view('Page/'.$page,$data);
		$this->load->view('Page/Footer');
		}


		function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('id_barang'),
			'name' => $this->input->post('nama_barang'), 
			'price' => $this->input->post('harga_jual'), 
			'qty' => $this->input->post('banyak'), 
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<div class="product product-widget">
											
											<div class="product-body">
												<h3 class="product-price">'.number_format($items['price']).'<span class="qty"> x'.$items['qty'].'</span></h3>
												<h2 class="product-name"><a href="#">'.$items['name'].'</a></h2>
												<h2 class="product-name">'.number_format($items['subtotal']).'</h2>
											</div>
											
											<button id="'.$items['rowid'].'" class="hapus_cart cancel-btn" data-toggle="modal" data-target="#hapus"><i class="fa fa-trash"></i></button>

										</div>
				
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total :</th>
				<th colspan="2">'.' Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
}
?>