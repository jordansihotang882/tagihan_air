<?php 
class Model_resep extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_resep');
	}
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function detail_resep($id_resep)
	{
		$result = $this->db->where('id_resep',$id_resep)->get('tb_resep');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
 }
