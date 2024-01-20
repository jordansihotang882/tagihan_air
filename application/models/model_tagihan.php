<?php 
class Model_tagihan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_tagihan');
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
	public function detail_tagihan($id_tagihan)
	{
		$result = $this->db->where('id_tagihan',$id_tagihan)->get('tb_tagihan');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
	public function downloadpembayaran($id)
	{
		$query = $this->db->get_where('tb_pemakaian', array('id_pemakaian' => $id));
		return $query->row_array();
	}
 }
