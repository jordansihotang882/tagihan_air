<div class="container-fluid">
		<div class="section-header">
		<h1>Update Data Tagihan</h1>	
		</div>
		<?php foreach($tagihan as $tgh) : ?>
		<form method="post" action="<?php echo base_url('admin/tagihan/update_aksi'); ?>">
					<div class="form-group">
						<label>Nama Pelanggan</label>
						<input type="hidden" name="id_tagihan"  value="<?php echo $tgh->id_tagihan ?>">
						<input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $tgh->nama_pelanggan ?>">
					 </div>
					 <div class="form-group">
						<label>Tanggal</label>
						<input type="date" name="tanggal" class="form-control" value="<?php echo $tgh->tanggal ?>">
					 </div>

					 <div class="form-group">
						<label>Jumlah Pemakaian</label>
						<input type="text" name="pemakaian" class="form-control" value="<?php echo $tgh->pemakaian ?>">
					 </div>

					  <div class="form-group">
						<label>Jumlah Tagihan</label>
						<input type="text" name="tagihan" class="form-control" value="<?php echo $tgh->tagihan ?>">
					 </div>
					
			<button type="submit" class="btn btn-success">Simpan</button>

			</form>		  

<?php endforeach; ?>
</div>