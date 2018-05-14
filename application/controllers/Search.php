<?php 

class Search extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index($page= 'Isi_produk',$id= null){
		$data['hasil'] = $this->M_data->tampil_kategori_iki();
        $id_usr = $this->session->userdata("nama");
        $data['hasil8'] = $this->M_data->tampil_id_user($id_usr)->result();
		$data['produk_all'] = $this->M_data->tampil_produk_all();
        $data['tampil_top'] = $this->M_data->tampil_top_produk_limit_3();
		if($this->session->userdata('status') != "login"){
            $this->load->view('Page/Header',$data);
                        $this->session->set_userdata('username','1');
        }else {
            $this->load->view('Page/Header2',$data);
        }
        $this->load->view('Page/'.$page,$data);
		$this->load->view('Page/Footer');
		}
		  public function Seach_produk()
{	

		$data['hasil'] = $this->M_data->tampil_kategori_iki();
		$data['produk_all'] = $this->M_data->tampil_produk_all();

        $id_usr = $this->session->userdata("nama");
        $data['hasil8'] = $this->M_data->tampil_id_user($id_usr)->result();
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
    if($this->session->userdata('status') != "login"){
            $this->load->view('Page/Header',$data);
                        $this->session->set_userdata('username','1');
        }else {
            $this->load->view('Page/Header2',$data);
        }
    $this->load->view("Page/Seach_produk", $data);
	$this->load->view('Page/Footer');
}
}
?>