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

}
?>