<?php 
class Dashboard extends CI_Controller {

	public function index()
	{
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates_admin/footer');
	}
	public function detail($id_resep)
	{
		$data['resep'] = $this->model_resep->detail_resep($id_resep);
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_resep',$data);
		$this->load->view('templates/footer');
	}
	public function video($id_resep)
	{
		$data['resep'] = $this->model_resep->detail_resep($id_resep);
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('video_resep',$data);
		$this->load->view('templates/footer');
	}
}

 ?>