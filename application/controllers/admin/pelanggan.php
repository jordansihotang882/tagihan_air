<?php 
class Pelanggan extends CI_Controller  {

	public function index()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['pelanggan'] = $this->model_suku->tampil_data('tb_pelanggan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/pelanggan', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_pelanggan()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['pelanggan'] = $this->model_suku->tampil_data('tb_pelanggan')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_tambah_pelanggan', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_pelanggan_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_pelanggan();
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
			$this->model_suku->insert_data($data,'tb_pelanggan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pelanggan');
		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama_pelanggan','nama_pelanggan','required',['required' => 'Nama pelanggan Wajib diisi']);
		$this->form_validation->set_rules('username','username','required',['required' => 'Username Wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password Wajib diisi']);
		$this->form_validation->set_rules('no_hp','no_hp','required',['required' => 'Nomor Hp Wajib diisi']);
	}

	public function update($id)
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$where= array('id_pelanggan' => $id);
		$data['pelanggan'] = $this->db->query("select * from tb_pelanggan where id_pelanggan='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/update_pelanggan', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function update_aksi()
	{
		$id= $this->input->post('id_pelanggan'); 
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

		$where = array(
			'id_pelanggan'    => $id 
		);
		$this->model_suku->update_data($where,$data,'tb_pelanggan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pelanggan');
	}
	public function delete ($id)
	{
		$where = array('id_pelanggan' => $id);
		$this->model_suku->delete_data($where,'tb_pelanggan');
		redirect('admin/pelanggan');
	}
}

 ?>