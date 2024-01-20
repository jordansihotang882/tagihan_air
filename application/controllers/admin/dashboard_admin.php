<?php 
class Dashboard_admin extends CI_Controller {

	public function index()
	{
		$pemakaian = $this->db->query("SELECT * FROM tb_pemakaian");
		$pelanggan = $this->db->query("SELECT * FROM tb_pelanggan");
		$admin = $this->db->query("SELECT * FROM tb_admin");
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['pemakaian']=$pemakaian->num_rows();
		$data['admin']=$admin->num_rows();
		$data['pelanggan']=$pelanggan->num_rows();
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/dashboard_admin',$data);
		$this->load->view('templates_admin/footer');
	}
}

 ?>