<?php 
class Kategori extends CI_Controller  {

	public function karo()
	{
		$data['karo'] = $this->model_kategori->karo()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('karo', $data);
		$this->load->view('templates/footer');
	}
	public function batak_toba()
	{
		$data['batak_toba'] = $this->model_kategori->batak_toba()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('batak_toba', $data);
		$this->load->view('templates/footer');
	}
	public function simalungun()
	{
		$data['simalungun'] = $this->model_kategori->simalungun()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('simalungun', $data);
		$this->load->view('templates/footer');
	}
	public function nias()
	{
		$data['nias'] = $this->model_kategori->nias()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('nias', $data);
		$this->load->view('templates/footer');
	}

	public function pakpak()
	{
		$data['pakpak'] = $this->model_kategori->pakpak()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pakpak', $data);
		$this->load->view('templates/footer');
	}

}