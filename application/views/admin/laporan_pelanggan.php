<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Laporan Pelanggan</title>
</head>
 <div class="page-container2 ml-2">
<body>
<center><h1>Pemeritah Desa Saragih</h1>
<h2>Laporan Pelanggan PAMDES</h2></center>

<table class="table table-bordered table-striped mt-4">
	<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Username</th>
		<th>Nomor Telpon</th>
	</tr>
	<?php $no=1; foreach($pelanggan as $pmk) : ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $pmk->nama_pelanggan ?></td>
		<td><?php echo $pmk->username ?></td>
		<td><?php echo $pmk->no_hp ?></td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</div>
</html>
<script type="text/javascript">
	window.print()
</script>