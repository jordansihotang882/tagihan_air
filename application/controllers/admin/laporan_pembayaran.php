<?php 
class Laporan_pembayaran extends CI_Controller  {

	public function index()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();

		if((isset($_GET['tahun'])&& $_GET['tahun']!='')){
			$tahun = $_GET['tahun'];
			$thn = $tahun;
		}else{
			$tahun = date('Y');
			$thn = $tahun;
		} 
		$data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl WHERE  pm.id_pelanggan=pl.id_pelanggan AND pm.status_pembayaran='0' AND pm.id_pemakaian ORDER BY pl.nama_pelanggan ASC ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/laporan_pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}
	public function cetak_laporan_pembayaran()
	{

			$tahun = $this->input->post('tahun');
			$thn = $tahun;
		
		$data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl  WHERE  pm.id_pelanggan=pl.id_pelanggan AND pm.status_pembayaran='0' AND pm.id_pemakaian AND pm.tahun='$thn' ORDER BY pl.nama_pelanggan ASC ")->result();
		$this->load->view('templates_admin/header');
		
		$this->load->view('admin/cetak_laporan_pembayaran', $data);
		$this->load->view('templates_admin/footer');
}
}