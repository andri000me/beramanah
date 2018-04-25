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
	$this->db->where('status','1');
	return $this->db->get('barang');
}
public function tampil_barang_barokah(){
	$this->db->limit(4);
	$this->db->order_by('tgl_barang','desc');
	$this->db->where('harga_jual' < 'harga_modal');
	$this->db->where('status','1');
	return $this->db->get('barang');
}

}
?>