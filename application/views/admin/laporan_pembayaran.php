<div class="page-container2 ml-2 mr-2">
	<div class="card mx-auto" style="width:40%">
		<div class="card-header bg-primary text-white text-center">
			Laporan Tunggakan Air / Tahun
		</div>
		<form method="post" action="<?php echo base_url('admin/laporan_pembayaran/cetak_laporan_pembayaran') ?>">
		<div class="card-body">

			<div class="form-group row">
				<label  class="col-sm-3 col-form-label">Tahun
				</label>
				<div class="col-sm-9">
					<select class="form-control" name="tahun">	
   <option value="">--Pilih Tahun--</option>	
   <?php 	$tahun = date('Y'); 
   for($i=2020;$i<$tahun+5;$i++) {?>
   <option value="<?php 	echo $i ?>"><?php 	echo $i ?></option>
<?php 	} ?>
</select>
				</div>
			</div>
			<button style="width:100%" type="submit" class="btn btn-warning"><i class="fas fa-print"> Cetak Laporan Tunggakan</i></button>
		</div>
		</form>
	</div>
</div>