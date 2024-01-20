
<div class="page-container2 ml-2">
		<div class="section-header">
		<h1>Data pelanggan</h1>	
		</div>
		<form method="post" action="<?php echo base_url('admin/pelanggan/tambah_pelanggan_aksi') ?>">
						<div class="form-group">
						<label>Nama pelanggan</label>
						<input type="text" name="nama_pelanggan" placeholder="Masukkan Nama pelanggan" class="form-control">
						<?php echo form_error('nama_pelanggan','<div class="text-danger-small" ml-3>') ?>
						
					 </div>
					 <div class="form-group">
						<label>Id Ktp</label>
						<input type="text" name="id_ktp" placeholder="Masukkan Nama pelanggan" class="form-control">
						<?php echo form_error('id_ktp','<div class="text-danger-small" ml-3>') ?>
						
					 </div>
						
					 <div class="form-group">
						<label>Nomor Hp</label>
						<input type="text" name="no_hp" placeholder="Masukkan Nomor Hp" class="form-control">
						<?php echo form_error('no_hp','<div class="text-danger-small" ml-3>') ?>
						
					 </div>
					 <div class="form-group">
						<label>Desa</label>
						<input type="text" name="desa" placeholder="Masukkan Nomor Hp" class="form-control">
						<?php echo form_error('desa','<div class="text-danger-small" ml-3>') ?>
					 </div>
					 <div class="form-group">
						<label>Kode Pos</label>
						<input type="text" name="kode_pos" placeholder="Masukkan Kode Pos" class="form-control">
						<?php echo form_error('kode_pos','<div class="text-danger-small" ml-3>') ?>
					 </div>
					 <div class="form-group">
						<label>Alamat Pemasangan</label>
						<input type="text" name="alamat_pemasangan" placeholder="Masukkan Alamat Pemasangan" class="form-control">
						<?php echo form_error('alamat_pemasangan','<div class="text-danger-small" ml-3>') ?>
					 </div>
					 <div class="form-group">
						<label>Email</label>
						<input type="text" name="email" placeholder="Masukkan Nomor Hp" class="form-control">
						<?php echo form_error('email','<div class="text-danger-small" ml-3>') ?>
					 </div>
					 <div class="form-group">
						<label>Kondisi Bangunan</label>
						<input type="text" name="kondisi_bangunan" placeholder="Masukkan Kondisi Bangunan" class="form-control">
						<?php echo form_error('kondisi_bangunan','<div class="text-danger-small" ml-3>') ?>
					 </div>
					 <div class="form-group">
						<label>Luas Bangunan</label>
						<input type="text" name="luas_bangunan" placeholder="Masukkan Luas Bangunan" class="form-control">
						<?php echo form_error('luas_bangunan','<div class="text-danger-small" ml-3>') ?>
					 </div>
					 <div class="form-group">
						<label>Jumlah Penghuni</label>
						<input type="text" name="jumlah_penghuni" placeholder="Masukkan Luas Bangunan" class="form-control">
						<?php echo form_error('jumlah_penghuni','<div class="text-danger-small" ml-3>') ?>
					 </div>

					 <div class="form-group">
						<label>Username</label>
						<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
						<?php echo form_error('username','<div class="text-danger-small" ml-3>') ?>
						
					 </div>
					 <div class="form-group">
						<label>Password</label>
						<input type="text" name="password" placeholder="Masukkan password" class="form-control">
						<input type="hidden" name="status" value="aktif" class="form-control">
						<?php echo form_error('password','<div class="text-danger-small" ml-3>') ?>
					</div>
			<button type="submit" class="btn btn-success">Submit</button>
			</form>		  


</div>
</div>
