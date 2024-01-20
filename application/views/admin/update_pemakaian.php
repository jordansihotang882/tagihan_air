<div class="container-fluid">
		<div class="section-header">
		<h1>Update Data Pemakaian</h1>	
		</div>
		<?php foreach($pemakaian as $pmk) : ?>
		<form method="post" action="<?php echo base_url('admin/pemakaian/update_aksi'); ?>">
					<div class="form-group">
						<label>Nama Pelanggan</label>
						<input type="hidden" name="id_pemakaian"  value="<?php echo $pmk->id_pemakaian ?>">
						<input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $pmk->nama_pelanggan ?>">
					 </div>
					 <div class="form-group">
						<label>Bulan</label>
						<input type="date" name="bulan" class="form-control" value="<?php echo $pmk->bulan ?>">
					 </div>

					 <div class="form-group">
						<label>Meter Awal</label>
						<input type="text" name="meter_awal" class="form-control" value="<?php echo $pmk->meter_awal ?>">
					 </div>

					  <div class="form-group">
						<label>Meter Akhir</label>
						<input type="text" name="meter_akhir" class="form-control" value="<?php echo $pmk->meter_akhir ?>">
					 </div>
					
			<button type="submit" class="btn btn-success">Simpan</button>

			</form>		  

<?php endforeach; ?>
</div>