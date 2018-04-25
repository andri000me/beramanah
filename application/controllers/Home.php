<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index(){
		$data['hasil'] = $this->M_data->tampil_kategori_iki();
		$data['hasil3'] = $this->M_data->tampil_kategori_itu()->result();
		$data['hasil2'] = $this->M_data->tampil_last_product()->result();
		$data['hasil4'] = $this->M_data->tampil_kategori_itu2()->result();
		$data['hasil5'] = $this->M_data->tampil_kategori_itu3()->result();
		$data['hasil6'] = $this->M_data->tampil_kategori_itu4()->result();
		$data['barang_fashion'] = $this->M_data->tampil_barang_fashion()->result();
		$data['barang_barokah'] = $this->M_data->tampil_barang_barokah()->result();	
		$this->load->view('Home/Header',$data);	}
}
?>