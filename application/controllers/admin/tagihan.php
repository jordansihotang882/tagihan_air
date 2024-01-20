<?php 
class Tagihan extends CI_Controller  {

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
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/tagihan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function input()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		if($this->input->post('submit', TRUE) == 'submit'){
		$post = $this->input->post();
		foreach ($post['bulan'] as $key => $value) {
			if($post['bulan'][$key] !='' || $post['id_pelanggan'][$key] !='' || $post['id_pemakaian'][$key] !='')
			{
				$simpan[] = array(
						'bulan' => $post['bulan'][$key],
						'id_pelanggan' => $post['id_pelanggan'][$key],
						'denda' => $post['denda'][$key],
						'tgl_bayar' => $post['tgl_bayar'][$key],
						'status' => $post['status'][$key],
				);
			}
		}	
				$this->model_pemakaian->insert_batch('tb_tagihan',$simpan);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/tagihan');
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
		$data['tagihan'] = $this->db->query("SELECT * FROM tb_pelanggan pl,  tb_pemakaian pmk, tb_tagihan tg WHERE  pl.id_pelanggan AND NOT EXISTS (SELECT * FROM tb_tagihan WHERE bulan='$bulantahun' AND pl.id_pelanggan=pmk.id_pelanggan) ORDER BY pmk.id_pelanggan ASC  ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_input_tagihan', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function konfirmasi_pembayaran($id)
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$where = array('id_pemakaian' => $id);
	 $data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian WHERE  id_pemakaian='$id'")->result();	
	 $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/konfirmasi_pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function cek_pembayaran()
	{
		$id = $this->input->post('id_pemakaian');
		$status_pembayaran = $this->input->post('status_pembayaran');
	 $data = array(
	 	'status_pembayaran'=> $status_pembayaran);
	 	$where = array(
	 		'id_pemakaian'=> $id);	
	 	$this->model_tagihan->update_data($where,$data,'tb_pemakaian');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil konfirmasi!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/tagihan');
	}
	public function download_pembayaran($id)
	{
		$this->load->helper('download');
		$filepembayaran = $this->model_tagihan->downloadpembayaran($id);
		$file = 'uploads/'.$filepembayaran['bukti_pembayaran'];
		force_download($file, NULL);
	}

	public function tambah_tagihan()
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['tagihan'] = $this->model_tagihan->tampil_data('tb_tagihan')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/form_tambah_tagihan', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function tambah_tagihan_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_tagihan();
		}else{
			$nama_pelanggan = $this->input->post('nama_pelanggan');
			$tanggal = $this->input->post('tanggal');
			$pemakaian = $this->input->post('pemakaian');
			$tagihan = $this->input->post('tagihan');
			}
			
			$data = array(
			'nama_pelanggan'    => $nama_pelanggan, 
			'tanggal'    => $tanggal,
			'pemakaian'    => $pemakaian,
			'tagihan'    => $tagihan
		);
			$this->model_tagihan->insert_data($data,'tb_tagihan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/tagihan');
		}

	
	public function _rules()
	{
		$this->form_validation->set_rules('nama_pelanggan','nama_pelanggan','required',['required' => 'Nama Pelanggan Wajib diisi']);
		$this->form_validation->set_rules('tanggal','tanggal','required',['required' => 'Tanggal Wajib diisi']);
	}

	public function update($id)
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$where= array('id_tagihan' => $id);
		$data['tagihan'] = $this->db->query("select * from tb_tagihan where id_tagihan='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/update_tagihan', $data);
		$this->load->view('templates_admin/footer');	
	}
	public function update_aksi()
	{
		$id= $this->input->post('id_tagihan');
		$nama_pelanggan= $this->input->post('nama_pelanggan'); 
		$tanggal= $this->input->post('tanggal'); 
		$pemakaian= $this->input->post('pemakaian'); 
		$tagihan= $this->input->post('tagihan'); 

		$data = array(
			'nama_pelanggan'    => $nama_pelanggan, 
			'tanggal'    => $tanggal,
			'pemakaian'    => $pemakaian,
			'tagihan'    => $tagihan
		);

		$where = array(
			'id_tagihan'    => $id 
		);
		$this->model_tagihan->update_data($where,$data,'tb_tagihan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('admin/tagihan');
			}
	
	public function delete ($id)
	{
		$where = array('id_tagihan' => $id);
		$this->model_tagihan->delete_data($where,'tb_tagihan');
		redirect('admin/tagihan');
	}
	public function detail($id_tagihan)
	{
		$belum_aktif = $this->db->query("SELECT * FROM tb_pelanggan WHERE status='belum_aktif' ");
		$data['belum_aktif']=$belum_aktif->num_rows();
		$data['tagihan'] = $this->model_tagihan->detail_tagihan($id_tagihan);
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/detail_tagihan',$data);
		$this->load->view('templates_admin/footer');
	}
	public function video($id_tagihan)
	{
		$data['tagihan'] = $this->model_tagihan->detail_tagihan($id_tagihan);
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/video_tagihan',$data);
		$this->load->view('templates_admin/footer');
	}
}

 ?>