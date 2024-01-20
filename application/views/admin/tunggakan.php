

    <div class="page-container2 ml-2">
	<div class="card">
  <div class="card-header">
    Data Tunggakan
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
  <button type="submit" class="btn btn-primary ml-auto">Tampil Data</button>
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
Menampilkan Data Tunggakan Air Bulan : <span class="font-weight-bold"><?php 	echo $bulan ?> </span> Tahun : <span class="font-weight-bold"><?php 	echo $tahun ?> </span>
 </div>
	<?php 	
$jml_data = count($pemakaian);
if($jml_data > 0) {
	 ?>
	<div class="scroll">
	<table class="table table-bordered 700px">
		<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Bulan</th>
		<th>Jumlah Meter</th>
		<th>Total bayar</th>
		<th>Status Pembayaran</th>
		</tr>
		<?php 
		$no=1;
		foreach($pemakaian as $pmk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $pmk->nama_pelanggan ?></td>
				<td><?php if ($bulan == '01') { 
				 echo "Januari"; 
				}elseif($bulan =='02'){
				 	echo "Februari";
				 	}elseif($bulan =='03'){
				 	echo "Maret";
				 	}elseif($bulan =='04'){
				 	echo "April";
				 	}elseif($bulan =='05'){
				 	echo "Mei";
				 }elseif($bulan == '06'){
				 	echo "Juni";
				 }elseif($bulan == '07'){
				 	echo "Juli";	
         }elseif($bulan =='08'){
				 	echo "Agustus";
				 	}elseif($bulan =='09'){
				 	echo "September";
				 	}elseif($bulan =='10'){
				 	echo "Oktober";
				 	}elseif($bulan =='11'){
				 	echo "November";

				 }else{
				 	echo "Desember";
				 } ?></td>
					<td><?php echo number_format($pmk->meter_akhir - $pmk->meter_awal) ?></td>
					<td><?php echo number_format($pmk->meter_akhir - $pmk->meter_awal)*500 ?></td>
					<td><center><?php
						if(empty($pmk->bukti_pembayaran)) { ?><button class="btn btn-sm btn-primary">Belum Bayar</button>

							<?php }elseif($pmk->status_pembayaran =='0'){ ?>
				<a href="<?php echo base_url('admin/tagihan/konfirmasi_pembayaran/'.$pmk->id_pemakaian) ?>"><button class="btn btn-sm btn-primary">Belum Bayar</i></button></a>
			<?php }elseif($pmk->status_pembayaran =='1'){ ?> 
				<button width="100%" class="btn btn-sm btn-success">Sudah Bayar</button>
			<?php } ?>
			</center></td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php 	}else{ ?>
	<span class="badge badge-danger ml-4">Data Masih Kosong
<?php 	} ?>
	</div>

</div>
</body>
</div>