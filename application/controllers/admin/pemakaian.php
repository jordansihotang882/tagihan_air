<?php 
class Pemakaian extends CI_Controller  {

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
		$this->load->view('admin/pemakaian', $data);
		$this->load->view('templates_admin/footer');
	}

	public function input()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		if($this->input->post('submit', TRUE) == 'submit'){
		$post = $this->input->post();
		foreach ($post['bulan'] as $key => $value) {
			if($post['bulan'][$key] !='' || $post['id_pelanggan'][$key] !='')
			{
				$simpan[] = array(
						'bulan' => $post['bulan'][$key],
						'id_pelanggan' => $post['id_pelanggan'][$key],
						'meter_awal' => $post['meter_awal'][$key],
						'meter_akhir' => $post['meter_akhir'][$key],
						
				);
			}
		}	
			$this->model_pemakaian->insert_batch('tb_pemakaian',$simpan);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pemakaian');
		}

		if((isset($_GET['bulan']) && $_GET['bulan']!='')&&(isset($_GET['tahun'])&& $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		} 
		$data['pemakaian'] = $this->db->query("SELECT * FROM tb_pelanggan WHERE  tb_pelanggan.id_pelanggan AND NOT EXISTS (SELECT * FROM tb_pemakaian WHERE bulan='$bulantahun' AND tb_pelanggan.id_pelanggan=tb_pemakaian.id_pelanggan) ORDER BY tb_pelanggan.id_pelanggan ASC  ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_input_pemakaian', $data);
		$this->load->view('templates_admin/footer');	


	}

	public function tambah_pemakaian()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['pemakaian'] = $this->model_pemakaian->tampil_data('tb_pemakaian')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/form_tambah_pemakaian', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_pemakaian_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_pemakaian();
		}else{
			$nama_pelanggan = $this->input->post('nama_pelanggan');
			$bulan = $this->input->post('bulan');
			$meter_awal = $this->input->post('meter_awal');
			$meter_akhir = $this->input->post('meter_akhir');
			$data = array(
			'nama_pelanggan'          => $nama_pelanggan,
			'bulan'                   => $bulan,
			'meter_awalmeter_awal'    => $meter_awalmeter_awal,
			'meter_akhir'             => $meter_akhir, 
		);
			$this->model_pemakaian->insert_data($data,'tb_pemakaian');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pemakaian');
		}

	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama_pelanggan','nama_pelanggan','required',['required' => 'Nama pelanggan Wajib diisi']);
	}

	public function update($id)
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$where= array('id_pemakaian' => $id);
		$data['pemakaian'] = $this->db->query("select * from tb_pemakaian where id_pemakaian='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/update_pemakaian', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function update_aksi()
	{
		$id= $this->input->post('id_pemakaian'); 
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$bulan = $this->input->post('bulan');
		$meter_awal = $this->input->post('meter_awal');
		$meter_akhir = $this->input->post('meter_akhir');

		$data = array(
			'nama_pelanggan'          => $nama_pelanggan,
			'bulan'                   => $bulan,
			'meter_awalmeter_awal'    => $meter_awalmeter_awal,
			'meter_akhir'             => $meter_akhir, 
		);

		$where = array(
			'id_pemakaian'    => $id 
		);
		$this->model_pemakaian->update_data($where,$data,'tb_pemakaian');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/pemakaian');
	}
	public function delete ($id)
	{
		$where = array('id_pemakaian' => $id);
		$this->model_pemakaian->delete_data($where,'tb_pemakaian');
		redirect('admin/pemakaian');
	}
}

 ?>