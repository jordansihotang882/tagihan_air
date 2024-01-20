

<?php 
class Pemakaian extends CI_Controller  {
public function index()
{
	$id_pelanggan=$this->session->userdata('id_pelanggan');
    $data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl WHERE pm.id_pelanggan=pl.id_pelanggan AND  pm.id_pelanggan='$id_pelanggan' ORDER BY pm.bulan ASC ")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pemakaian', $data);
		$this->load->view('templates_admin/footer');
	}
	public function pembayaran($id)
	{
	 $data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl WHERE  pm.id_pemakaian='$id' AND  pm.id_pelanggan=pl.id_pelanggan ORDER BY pm.bulan ASC ")->result();	
	 $this->load->view('templates_admin/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}
	public function kuitansi($id)
{
	$data['pemakaian'] = $this->db->query("SELECT * FROM tb_pemakaian pm, tb_pelanggan pl WHERE  pm.id_pemakaian='$id' AND  pm.id_pelanggan=pl.id_pelanggan ORDER BY pm.bulan ASC ")->result();	
		$this->load->view('templates_admin/header');
		$this->load->view('kuitansi', $data);
		$this->load->view('templates_admin/footer');
	}
	public function pembayaran_aksi()
	{
	 $id = $this->input->post('id_pemakaian');
	 $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
	 if($bukti_pembayaran){
	 	$config ['upload_path'] = './uploads/.';
	 	$config ['allowed_types'] = 'jpg|jpeg|png|tiff';
	 	$this->load->library('upload', $config);
	 	if($this->upload->do_upload('bukti_pembayaran')){
	 		$bukti_pembayaran=$this->upload->data('file_name');
	 		$this->db->set('bukti_pembayaran', $bukti_pembayaran);
	 	}else{
	 		echo $this->upload->display_errors();
	 	}
	 }

			$data = array(
			'bukti_pembayaran'          => $bukti_pembayaran,
		);
			$where= array(
			'id_pemakaian' => $id
			);
			$this->model_pemakaian->update_data($where,$data,'tb_pemakaian');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Bukti Pembayaran Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('data_pembayaran');
	}


	public function pembayaranlangsung_aksi()
	{
	 $id = $this->input->post('id_pemakaian');
	 $opsi_pembayaran = $this->input->post('opsi_pembayaran');
	

			$data = array(
			'opsi_pembayaran'          => $opsi_pembayaran,
		);
			$where= array(
			'id_pemakaian' => $id
			);
			$this->model_pemakaian->update_data($where,$data,'tb_pemakaian');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Bukti Pembayaran Berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
			redirect('data_pembayaran');
	}
}