<?php 	
class Register extends CI_Controller{
public function index()
	{
		$this->_rules();
		if($this->form_validation->run()== FALSE) {
		$this->load->view('templates_admin/header');
		$this->load->view('register_form');
		$this->load->view('templates_admin/footer');
	}else{
		    $nama_pelanggan = $this->input->post('nama_pelanggan');
			$id_ktp = $this->input->post('id_ktp');
			$no_hp = $this->input->post('no_hp');
			$desa = $this->input->post('desa');
			$kode_pos = $this->input->post('kode_pos');
			$alamat_pemasangan = $this->input->post('alamat_pemasangan');
			$email = $this->input->post('email');
			$kondisi_bangunan = $this->input->post('kondisi_bangunan');
			$luas_bangunan = $this->input->post('luas_bangunan');
			$jumlah_penghuni = $this->input->post('jumlah_penghuni');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$status = $this->input->post('status');

		$data = array(
			'nama_pelanggan'    => $nama_pelanggan, 
			'id_ktp'    => $id_ktp, 
			'no_hp'    => $no_hp,
			'desa'    => $desa, 
			'kode_pos'    => $kode_pos, 
			'alamat_pemasangan'    => $alamat_pemasangan,
			'email'    => $email, 
			'kondisi_bangunan'    => $kondisi_bangunan, 
			'luas_bangunan'    => $luas_bangunan, 
			'jumlah_penghuni'    => $jumlah_penghuni, 
			'username'    => $username, 
			'password'    => $password,
			'status'    => $status
		);
			$this->model_tagihan->insert_data($data,'tb_pelanggan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Anda Berhasil Mendaftar!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('auth_pelanggan/login');
	}
}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_pelanggan','nama_pelanggan','required',['required' => 'Nama Pelanggan Wajib diisi']);
		$this->form_validation->set_rules('username','username','required',['required' => 'Username Wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password Wajib diisi']);
	}
}




	
 ?>
