<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index(){
		$data['hasil'] = $this->M_data->tampil_kategori_iki();
		$data['hasil2'] = $this->M_data->tampil_last_product()->result();
		$this->load->view('Home/Header',$data);	}
}
?>