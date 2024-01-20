<?php 
class Laporan_pelanggan extends CI_Controller  {

	public function index()
	{

		$data['pelanggan'] = $this->db->query("SELECT * FROM tb_pelanggan  ORDER BY nama_pelanggan ASC ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('admin/laporan_pelanggan', $data);
		$this->load->view('templates_admin/footer');
	}
	public function cetak_laporan_pelanggan()
	{

			$data['pelanggan'] = $this->db->query("SELECT * FROM tb_pelanggan  ORDER BY nama_pelanggan ASC ")->result();
		$this->load->view('templates_admin/header');
		
		$this->load->view('admin/cetak_laporan_pelanggan', $data);
		$this->load->view('templates_admin/footer');
}
}