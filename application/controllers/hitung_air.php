<?php 
class Hitung_air extends CI_Controller  {
public function index($data = null)
{
   $hasil=0;
		$this->load->view('templates_admin/header');
		$this->load->view('hitung_air',$data);
		$this->load->view('templates_admin/footer');
	}
	public function hasil()
{
	$jumlah=$this->input->post('jumlah');
	$angka= 500;
	$hasil= $jumlah*$angka;

	$data['jumlah']=$jumlah;
	
   
		$this->load->view('templates_admin/header');
	    $this->load->view('hitung_air_hasil',$data);
		$this->load->view('templates_admin/footer');
	}
	
}