<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Laporan Pembayaran</title>
</head>
 <div class="page-container2 ml-2">
<body>
<center><h1>Pemeritah Desa Saragih</h1>
<h2>Laporan Tunggakan Air Tahun </h2></center>
<?php 
$tahun = $this->input->post('tahun'); ?>
<table>
	<tr>
		<td>Tahun</td>
		<td>: </td>
		<td> <?php echo $tahun ?></td>
	</tr>
</table>
<table class="table table-bordered table-striped">
	<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Total Meter</th>
		<th>Jumlah Bayar</th>
	</tr>
	<?php $no=1; foreach($pemakaian as $pmk) : ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $pmk->nama_pelanggan ?></td>
		<td><?php echo $pmk->meter_akhir - $pmk->meter_awal ?></td>
				<td><?php echo ($pmk->meter_akhir - $pmk->meter_awal)*500 ?></td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</div>
</html>
<script type="text/javascript">
	window.print()
</script>