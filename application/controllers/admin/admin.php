<?php 
class Admin extends CI_Controller  {

	public function index()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['admin'] = $this->model_admin->tampil_data('tb_admin')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/admin', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_admin()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['admin'] = $this->model_admin->tampil_data('tb_admin')->result();
	    $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/form_tambah_admin', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_admin_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_admin();
		}else{
			$nama_admin = $this->input->post('nama_admin');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = array(
			'nama_admin'    => $nama_admin, 
			'username'      => $username,
			'password'      => $password
		);
			$this->model_admin->insert_data($data,'tb_admin');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/admin');
		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama_admin','nama_admin','required',['required' => 'Nama admin Wajib diisi']);
		$this->form_validation->set_rules('username','username','required',['required' => 'Username Wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password Wajib diisi']);
	}

	public function update($id)
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$where= array('id_admin' => $id);
		$data['admin'] = $this->db->query("select * from tb_admin where id_admin='$id'")->result();
		  $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/update_admin', $data);
		$this->load->view('templates_admin/footer');
	

	}
		public function update_aksi()
		{
		$id= $this->input->post('id_admin'); 
		$nama_admin= $this->input->post('nama_admin'); 
		$username= $this->input->post('username'); 
		$password= $this->input->post('password'); 

		$data = array(
			'nama_admin'    => $nama_admin,
			'username'    => $username, 
			'password'    => $password,  
		);

		$where = array(
			'id_admin'    => $id 
		);
		$this->model_admin->update_data($where,$data,'tb_admin');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/admin');
	}
	public function delete ($id)
	{
		$where = array('id_admin' => $id);
		$this->model_admin->delete_data($where,'tb_admin');
		redirect('admin/admin');
	}

}

 ?>