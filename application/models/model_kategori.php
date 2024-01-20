<?php 
class Model_kategori extends CI_Model{
public function karo(){
	return $this->db->get_where("tb_resep",array('suku' => 'karo'));
}

public function batak_toba(){
	return $this->db->get_where("tb_resep",array('suku' => 'batak toba'));
}
public function simalungun(){
	return $this->db->get_where("tb_resep",array('suku' => 'simalungun'));
}
public function nias(){
	return $this->db->get_where("tb_resep",array('suku' => 'nias'));
}
public function pakpak(){
	return $this->db->get_where("tb_resep",array('suku' => 'pakpak'));
}

 }
 ?>
