<div class="page-container2 ml-2 mr-2">
	<div class="card mx-auto" style="width:40%">
		<div class="card-header bg-primary text-white text-center">
			Laporan Tagihan Air
		</div>
		<form method="post" action="<?php echo base_url('admin/laporan_tagihan/cetak_laporan_tagihan') ?>">
		<div class="card-body">
			<div class="form-group row">
				<label  class="col-sm-3 col-form-label">Bulan
				</label>
				<div class="col-sm-9">
					 <select class="form-control" name="bulan">	
   <option value="">--Pilih Bulan--</option>	
   <option value="01">Januari</option>
   <option value="02">Februari</option>
   <option value="03">Maret</option>
   <option value="04">April</option>
   <option value="05">Mei</option>
   <option value="06">Juni</option>
   <option value="07">Juli</option>
   <option value="08">Agustus</option>
   <option value="09">September</option>
   <option value="10">Oktober</option>
   <option value="11">November</option>
   <option value="12">Desember</option>
   </select>	
				</div>
			</div>

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
			<button style="width:100%" type="submit" class="btn btn-warning"><i class="fas fa-print"> Cetak Laporan Tagihan</i></button>
		</div>
		</form>
	</div>
</div>