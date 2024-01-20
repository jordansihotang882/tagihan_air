<div class="container-fluid">
		<div class="section-header">
		<h1>Data Tagihan</h1>	
		</div>
		<form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/tagihan/tambah_tagihan_aksi') ?>">
						<div class="form-group">
						<label>Nama Pelanggan</label>
						<input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" class="form-control">
						<?php echo form_error('nama_pelanggan','<div class="text-danger-small" ml-3>') ?>
					   </div>

						<div class="form-group">
						<label>tanggal</label>
						<input type="date" name="tanggal" placeholder="Masukkan Tanggal" class="form-control">
						<?php echo form_error('tanggal','<div class="text-danger-small" ml-3>') ?>
					</div>

					<div class="form-group">
						<label>Jumlah Pemakaian</label>
						<input type="text" name="jumlah_pemakaian" placeholder="Masukkan Jumlah Pemakaian" class="form-control">
						<?php echo form_error('jumlah_pemakaian','<div class="text-danger-small" ml-3>') ?>
					   </div>

					<div class="form-group">
						<label>Jumlah Tagihan</label>
						<input type="text" name="jumlah_tagihan" placeholder="Masukkan Jumlah Tagihan" class="form-control">
						<?php echo form_error('jumlah_tagihan','<div class="text-danger-small" ml-3>') ?>
					   </div>

			<button type="submit" class="btn btn-success">Simpan</button>
			</form>		  


</div>
</div>
