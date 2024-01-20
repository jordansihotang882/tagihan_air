<div class="page-container2 ml-2">
		<div class="section-header">
		<h1>Update Data pelanggan</h1>	
		</div>
		<?php foreach($pelanggan as $plk) : ?>
		<form method="post" action="<?php echo base_url('admin/pelanggan/update_aksi'); ?>">
						<div class="form-group">
						<label>Nama pelanggan</label>
						<input type="hidden" name="id_pelanggan"  value="<?php echo $plk->id_pelanggan ?>">
						<input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $plk->nama_pelanggan ?>">

					 </div>
					 <div class="form-group">
						<label>Id KTP</label>
						<input type="text" name="id_ktp" class="form-control" value="<?php echo $plk->id_ktp ?>">
					 </div>
					 <div class="form-group">
						<label>Nomor HP</label>
						<input type="text" name="no_hp" class="form-control" value="<?php echo $plk->no_hp ?>">
					 </div>
					 <div class="form-group">
						<label>Desa</label>
						<input type="text" name="desa" class="form-control" value="<?php echo $plk->desa ?>">
					 </div>
					 <div class="form-group">
						<label>Kode Pos</label>
						<input type="text" name="kode_pos" class="form-control" value="<?php echo $plk->kode_pos ?>">
					 </div>
					 <div class="form-group">
						<label>Alamat Pemasangan</label>
						<input type="text" name="alamat_pemasangan" class="form-control" value="<?php echo $plk->alamat_pemasangan ?>">
					 </div>
					  <div class="form-group">
						<label>Kondisi Bangunan</label>
						<input type="text" name="kondisi_bangunan" class="form-control" value="<?php echo $plk->kondisi_bangunan ?>">
					 </div>
					 <div class="form-group">
						<label>Luas Bangunan</label>
						<input type="text" name="luas_bangunan" class="form-control" value="<?php echo $plk->luas_bangunan ?>">
					 </div>
					 <div class="form-group">
						<label>Jumlah Penghuni</label>
						<input type="text" name="jumlah_penghuni" class="form-control" value="<?php echo $plk->jumlah_penghuni ?>">
					 </div>
					 <div class="form-group">
						<label>Luas Bangunan</label>
						<input type="text" name="luas_bangunan" class="form-control" value="<?php echo $plk->luas_bangunan ?>">
					 </div>
					 <div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" value="<?php echo $plk->email ?>">
					 </div>
					 <div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $plk->username ?>">
					 </div>

					 <div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control" value="<?php echo $plk->password ?>">
					 </div>

					 <div class="form-group">
						<label>Status</label>
						<select name="status">
							<option value="belum_aktif">Belum Aktif</option>
							<option value="aktif">Aktif</option>
						</select>
					 </div>
			<button type="submit" class="btn btn-success">Simpan</button>

			</form>		  

<?php endforeach; ?>
</div>