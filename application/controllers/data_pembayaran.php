<?php 
class Data_pembayaran extends CI_Controller  {
public function index()
{
	$id_pelanggan=$this->session->userdata('id_pelanggan');
    $data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl WHERE pm.id_pelanggan=pl.id_pelanggan AND  pm.id_pelanggan='$id_pelanggan' ORDER BY pm.bulan ASC ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}
	
}