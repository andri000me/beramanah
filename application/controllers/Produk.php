<?php 

class Produk extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index($page= 'Isi_produk',$id= null){
		$data['hasil'] = $this->M_data->tampil_kategori_iki();
		$data['produk_all'] = $this->M_data->tampil_produk_all();
		$data['tampil_top'] = $this->M_data->tampil_top_produk_limit_3();
		$this->load->view('Page/Header',$data);
		$this->load->view('Page/'.$page,$data);
		$this->load->view('Page/Footer');
		}
}
?>