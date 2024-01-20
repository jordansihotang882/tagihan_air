<div class="container-fluid">
	<div class="card">
  <h5 class="card-header">Resep</h5>
  <div class="card-body">
  	<?php foreach($resep as $rsp): ?>
  <div class="row">
  	<div class="col-md-4">
  		<img src="<?php echo base_url().'/uploads/'.$rsp->foto ?>" class="card-img-top">
  	</div>
  	<div class="col-md-8">
  		<table class="table">
  			<tr><td>Bahan</td>
  				<td>Alat</td>
  			</tr>
  			<tr><td><?php echo $rsp->bahan ?></td>
  				<td><?php echo $rsp->alat ?></td>
  			</tr>
  		</table>
  		<div class="col-md-8">
  		<table class="table">
  			<tr class="text-center"><td colspan="2">Cara Memasak</td></tr>
  			<tr><td><?php echo $rsp->cara_buat ?></td></tr>
  		</table>
      <?php echo anchor('dashboard/video/'.$rsp->id_resep,'<div class="btn btn-sm btn-primary">Lihat Video Cara Memasak</div>') ?>
  	  		</div>
  	</div>
  </div>
<?php endforeach; ?>
  </div>
</div>
</div>