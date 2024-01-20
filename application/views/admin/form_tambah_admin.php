<div class="page-container2 ml-2">
		<div class="section-header">
		<h1>Tambah Data Admin</h1>	
		</div>
		<form method="post" action="<?php echo base_url('admin/admin/tambah_admin_aksi') ?>">
						<div class="form-group">
						<label>Nama Admin</label>
						<input type="text" name="nama_admin" placeholder="Masukkan Nama Admin" class="form-control">
						<?php echo form_error('nama_admin','<div class="text-danger-small" ml-3>') ?>
						
					 </div>
					 <div class="form-group">
						<label>Username</label>
						<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
						<?php echo form_error('username','<div class="text-danger-small" ml-3>') ?>
						
					 </div>
					 <div class="form-group">
						<label>Password</label>
						<input type="text" name="password" placeholder="Masukkan Password" class="form-control">
						<?php echo form_error('password','<div class="text-danger-small" ml-3>') ?>
						
					 </div>
			<button type="submit" class="btn btn-success">Submit</button>
			</form>		  


</div>
</div>
