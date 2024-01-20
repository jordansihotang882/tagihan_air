

    <div class="page-container2 ml-2">
	<div class="card">
  <div class="card-header">
    Data Tagihan
  </div>
  <div class="card-body">
    <form class="form-inline mb-2">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="">Bulan : </label>
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
  <div class="form-group mx-sm-3 mb-2">
    <label for="staticEmail2" class="">Tahun : </label>
   <select class="form-control" name="tahun">	
   <option value="">--Pilih Tahun--</option>	
   <?php 	$tahun = date('Y'); 
   for($i=2020;$i<$tahun+5;$i++) {?>
   <option value="<?php 	echo $i ?>"><?php 	echo $i ?></option>
<?php 	} ?>
</select>
  </div>
  <button type="submit" class="btn btn-primary ml-auto">Pilih</button>
</form>

<?php 	
		if((isset($_GET['bulan']) && $_GET['bulan']!='')&&(isset($_GET['tahun'])&& $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		} ?>
 <div class="alert laert-info">
Menampilkan Data Tagihan Pembayaran Air Bulan : <span class="font-weight-bold"><?php 	echo $bulan ?> </span> Tahun : <span class="font-weight-bold"><?php 	echo $tahun ?> </span>
 </div>
	<?php 	
$jml_data = count($tagihan);
if($jml_data > 0) {
	 ?>
	<div class="scroll">
		<form method="post">	
		<button class="btn btn-success mb-3" type="submit" value="submit" name="submit">Simpan</button>
	<table class="table table-bordered 700px">
		<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Jumlah Penggunaan</th>
		<th>Jumlah Tagihan</th>
		<th>Denda</th>
		<th>Total Bayar</th>
		<th>Tanggal Bayar</th>
		<th>Status Bayar</th>
		</tr>
		<?php 
		$no=1;
		foreach($tagihan as $pmk) : ?>
			<tr>
				<input type="hidden" name="bulan[]" class="form-control" value="<?php 	echo $bulantahun ?>">
				<input type="hidden" name="id_pelanggan[]" class="form-control" value="<?php 	echo $pmk->id_pelanggan ?>">
				<td><?php echo $no++ ?></td>
				<td><?php echo $pmk->nama_pelanggan ?></td>
				<td><?php echo $pmk->bulan ?></td>
				<td><?php echo $pmk->meter_akhir-$pmk->meter_awal ?></td>
				<td><input type="number" name="denda[]" class="form-control" value="0"></td>
				<td><?php echo ($pmk->meter_akhir-$pmk->meter_awal)*5000 ?></td>
				<td><input type="date" name="tgl_bayar[]" class="form-control"></td>
				<td><?php echo ($pmk->meter_akhir-$pmk->meter_awal)*5000+$pmk->denda ?></td>
				<td><input type="text" name="status[]" class="form-control" value="0"></td>
				
				

			</tr>
		<?php endforeach; ?>
	</table></form>
<?php 	}else{ ?>
	<span class="badge badge-danger ml-4">Data Masih Kosong
<?php 	} ?>
	</div>

</div>
</body>
</div>