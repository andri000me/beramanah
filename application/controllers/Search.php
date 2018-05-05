<?php 

class Search extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index($page= 'Isi_produk',$id= null){
		$data['hasil'] = $this->M_data->tampil_kategori_iki();
		$data['produk_all'] = $this->M_data->tampil_produk_all();
		$data['tampil_top'] = $this->M_data->tampil_top_produk_limit_3();
		$this->load->view('Page/Header');
		$this->load->view('Page/Isi_produk');
		$this->load->view('Page/Footer');
		}
		  public function Seach_produk()
{	

		$data['hasil'] = $this->M_data->tampil_kategori_iki();
		$data['produk_all'] = $this->M_data->tampil_produk_all();
		$data['tampil_top'] = $this->M_data->tampil_top_produk_limit_3();
    $this->load->model("M_data");

   if ($this->input->get('keyword')) {
        $data ['results'] = $this->M_data->searchMessages($this->input->get('keyword'),$this->input->get('category'));
        //Uncomment the line below to test
        // echo '<pre>'; print_r($data['results']);die('</pre>');
        $data['search_passed'] = TRUE;
        $data['search_value'] = $this->input->get('keyword');
    } else if($this->input->get('pilih')) {
        $data ['results'] = $this->M_data->searchMessages2($this->input->get('pilih'));
        //Uncomment the line below to test
        // echo '<pre>'; print_r($data['results']);die('</pre>');
        $data['search_passed'] = TRUE;
    } else {
    	$data['search_passed'] = FALSE;
        $data['results'] = array();
    }
    $this->load->view('Page/Header',$data);
    $this->load->view("Page/Seach_produk", $data);
	$this->load->view('Page/Footer');
}
}
?>