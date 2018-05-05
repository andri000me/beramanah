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
	return $this->db->query("SELECT barang.nama_barang, barang.id_kategori_brg, barang.foto_barang, barang.harga_modal, barang.harga_jual, barang.tgl_barang, barang.status, barang.liked from barang where barang.harga_jual <= harga_modal and barang.status ='1' ");
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