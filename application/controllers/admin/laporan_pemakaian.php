<?php 
class Laporan_pemakaian extends CI_Controller  {

	public function index()
	{
$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		if((isset($_GET['bulan']) && $_GET['bulan']!='')&&(isset($_GET['tahun'])&& $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		} 
		$data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl WHERE  pm.id_pelanggan=pl.id_pelanggan AND pm.id_pemakaian AND pm.bulan='$bulantahun' ORDER BY pl.nama_pelanggan ASC ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/laporan_pemakaian', $data);
		$this->load->view('templates_admin/footer');
	}
	public function cetak_laporan_pemakaian()
	{

			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$bulantahun = $bulan.$tahun;
		
		$data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl  WHERE  pm.id_pelanggan=pl.id_pelanggan AND pm.id_pemakaian AND pm.bulan='$bulantahun' ORDER BY pl.nama_pelanggan ASC ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('admin/cetak_laporan_pemakaian', $data);
		$this->load->view('templates_admin/footer');
}
}