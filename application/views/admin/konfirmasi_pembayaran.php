 <div class="page-container2 ml-2">
<center>
	<section class="section mb-4">
		<div class="section-header">
			<h1>Konfirmasi Pembayaran</h1>
		</div>
		<div class="card" style="width:50%">
			<div class="card-header">
				Konfirmasi Pembayaran
			</div>
			<div class="card-body">
				<form method="post" action="<?php  echo base_url('admin/tagihan/cek_pembayaran') ?>">
					<?php foreach($pemakaian as $pmk) : ?>
						<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/tagihan/download_pembayaran/'.$pmk->id_pemakaian) ?>"><i class="fas fa-download"></i> Download Bukti Pembayaran</a>
						<div class="custom-control custom-switch"> 
							<input  type="hidden" class="custom-control-input" name="id_pemakaian" value="<?php  echo $pmk->id_pemakaian ?>">
							<input  type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
							<label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
						</div>
						<hr><button type="submit" class="btn btn-sm btn-primary">Simpan</button>
				<?php endforeach; ?>
					
				</form>
			</div>
		</div>
	</section>
</center>
</div>