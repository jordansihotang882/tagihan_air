<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Laporan Pemakaian</title>
</head>
 <div class="page-container2 ml-2">
<body>
<center><h1>Pemeritah Desa Saragih</h1>
<h2>Laporan Pemakaian Air</h2></center>
<?php 
$bulan = $this->input->post('bulan');
$tahun = $this->input->post('tahun'); ?>
<table>
	<tr>
		<td>Periode</td>
		<td>: </td>
		<td>&nbsp;
			<?php if ($bulan == '01') { 
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
				 } ?>
		</td>	
		<td>&nbsp;  <?php echo $tahun ?></td>
	</tr>
	<tr>
		
		
	</tr>
</table>
<table class="table table-bordered table-striped">
	<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Meter Awal</th>
		<th>Meter Akhir</th>
		<th>Total Meter</th>
	</tr>
	<?php $no=1; foreach($pemakaian as $pmk) : ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $pmk->nama_pelanggan ?></td>
		<td><?php echo $pmk->meter_awal ?></td>
		<td><?php echo $pmk->meter_akhir ?></td>
		<td><?php echo $pmk->meter_akhir - $pmk->meter_awal ?></td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</div>
</html>
<script type="text/javascript">
	window.print()
</script>