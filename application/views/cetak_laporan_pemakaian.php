<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Laporan Pemakaian</title>
</head>
<body>
<center><h1>Pemeritah Desa Saragih</h1>
<h2>Laporan Pemakaian Air</h2></center>
<?php 
$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun'); ?>
<table>
	<tr>
		<td>Bulan</td>
		<td>:</td>
		<td><?php echo $bulan ?></td>
	</tr>
</table>
</body>
</html>