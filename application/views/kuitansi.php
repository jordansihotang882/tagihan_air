<div class="page-container2 ml-2"> 
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header alert alert-primary">
					<center>Kuitansi Pembayaran</center>
				</div>
				<div class="card-body">

					<table class="table">
						<?php foreach ($pemakaian as $pmk) : ?>
						<tr>
						<th>Pemakaian Bulan</th>
						<td>:</td>
						<td><?php echo $pmk->bulan ?></td>
						</tr>
						<tr>
						<th>Jumlah Meter</th>
						<td>:</td>
						<td><?php echo $pmk->meter_akhir - $pmk->meter_awal ?></td>
						</tr>
						<tr>
						<th>Jumlah Bayar</th>
						<td>:</td>
						<td><?php echo ($pmk->meter_akhir - $pmk->meter_awal)*500 ?></td>
						<tr>
							</tr>	
						</tr>
						<?php endforeach; ?>
					</table>
<script type="text/javascript">
	window.print()
</script>