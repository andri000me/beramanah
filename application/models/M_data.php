<?php

class M_data extends CI_Model{


	public function tampil_kategori_iki()
{
    $this->db->order_by('urutan','ASC');
    $query = $this->db->get('Kategori_barang');
    $return = array();
    foreach ($query->result() as $category)
    {
        $return[$category->id_kategori_brg] = $category;
        $return[$category->id_kategori_brg]->subs = $this->barang($category->id_kategori_brg);

    }
    return $return;
}
function ambil_id_user($table,$where){
	return $this->db->get_where($table,$where);
}
function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}

function tampil_id_user($id_user)
{
		$this->db->where('username', $id_user);
		return $this->db->get('User');
}
function tampil_riwayat_belanja($id)
{		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
		$this->db->where('transaksi.id_user',$id);
		return $query = $this->db->get();
		}

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

function get_all_produk(){
		$hasil=$this->db->get('barang');
		return $hasil->result();
	}
		function pilih_produk($id){
		//$where="id=".$id;
		$this->db->where('id_barang', $id);
		return $this->db->get('barang');
	}

public function rekomendasi(){
	$this->db->limit(4);
	$this->db->order_by('tgl_barang','desc');
	return $this->db->get('barang');

}


public function barang($id)
{
    $this->db->order_by('liked','DESC');
    $this->db->where('id_kategori_brg', $id);
    $this->db->where('status','1');
    $this->db->limit(3);
    $query = $this->db->get('barang');
    return $query->result();
}

public function tampil_last_product(){
	$this->db->limit(4);
	$this->db->order_by('tgl_barang', 'desc');
	$this->db->where('status','1');
	return $this->db->get('barang');

}
public function tampil_slider(){
	$this->db->limit(3);
	$this->db->order_by('urutan','desc');
	return $this->db->get('Slider');
}

public function tampil_kategori_itu(){
	$this->db->limit(1);
	$this->db->where('tempat','1');
	return $this->db->get('banner');
}


public function tampil_kategori_itu2(){
	$this->db->limit(1);
	$this->db->where('tempat','2');
	return $this->db->get('banner');
}
public function tampil_kategori_itu3(){
	$this->db->limit(1);
	$this->db->where('tempat','3');
	return $this->db->get('banner');
}

public function tampil_kategori_itu4(){
	$this->db->limit(1);
	$this->db->where('tempat','4');
	return $this->db->get('banner');
}
public function tampil_barang_fashion(){
	$this->db->limit(3);
	$this->db->order_by('tgl_barang', 'desc');
	$this->db->where('id_kategori_brg','3');
	$this->db->where('liked > 80');
	$this->db->where('status','1');
	return $this->db->get('barang');
}
public function tampil_barang_barokah(){
	return $this->db->query("SELECT barang.id_barang, barang.nama_barang, barang.id_kategori_brg, barang.foto_barang, barang.harga_modal, barang.harga_jual, barang.tgl_barang, barang.status, barang.liked from barang where barang.harga_jual <= harga_modal and barang.status ='1' ");
}

public function tampil_produk_all(){
	return $this->db->get('barang')->result();
}
public function tampil_top_produk_limit_3(){
	$this->db->limit(3);
	return $this->db->get('barang')->result();
}
function searchMessages($string,$string2){
    $this->load->database();
    $query = $this->db->query("SELECT * FROM barang WHERE nama_barang  LIKE '%$string%' AND id_kategori_brg LIKE '%$string2%'");
    return $query->result();
    }

function searchMessages2($string){
    $this->load->database();
    $query = $this->db->query("SELECT * FROM barang WHERE id_kategori_brg LIKE '%$string%'");
    return $query->result();
    }


}
?>
