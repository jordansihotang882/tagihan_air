<?php 
class Model_pemakaian extends CI_Model{
	public function tampil_data($table){
		return $this->db->get($table);
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
	public function insert_batch($table = null, $data = array())
	{
		$jumlah = count($data);
		if($jumlah > 0)
		{
		$this->db->insert_batch($table, $data);
	}
	}
 }
