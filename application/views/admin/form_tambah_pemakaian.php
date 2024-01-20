<div class="page-container2 ml-2 mr-2">
		<div class="section-header">
		<h1>Data Pemakaian</h1>	
		</div>
		<form method="post"  action="<?php echo base_url('admin/pemakaian/tambah_pemakaian_aksi') ?>">
						<div class="form-group">
						<label>Nama Pelanggan</label>
						<input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" class="form-control">
						<?php echo form_error('nama_pelanggan','<div class="text-danger-small" ml-3>') ?>
					   </div>

						<div class="form-group">
						<label>Tanggal</label>
						<input type="date" name="bulan_tahun" placeholder="Masukkan Bulan" class="form-control">
						<?php echo form_error('bulan','<div class="text-danger-small" ml-3>') ?>
					</div>

					<div class="form-group">
						<label>Meter Awal</label>
						<input type="text" name="meter_awal" placeholder="Masukkan Meter Awal" class="form-control">
						<?php echo form_error('meter_awal','<div class="text-danger-small" ml-3>') ?>
					   </div>

					<div class="form-group">
						<label>Meter Akhir</label>
						<input type="text" name="meter_akhir" placeholder="Masukkan Meter Akhir" class="form-control">
						<?php echo form_error('meter_akhir','<div class="text-danger-small" ml-3>') ?>
					   </div>

			<button type="submit" class="btn btn-success">Simpan</button>
			</form>		  


</div>
</div>
