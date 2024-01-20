<div class="page-container2 ml-2">
<div class="container-fluid">
		<div class="section-header">
		<h1>Update Data Admin</h1>	
		</div>
		<?php foreach($admin as $adm) : ?>
		<form method="post" action="<?php echo base_url('admin/admin/update_aksi'); ?>">
						<div class="form-group">
						<label>Nama Admin</label>
						<input type="hidden" name="id_admin"  value="<?php echo $adm->id_admin ?>">
						<input type="text" name="nama_admin" class="form-control" value="<?php echo $adm->nama_admin ?>">

					 </div>
					 <div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $adm->username ?>">

					 </div>
					 <div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control" value="<?php echo $adm->password ?>">

					 </div>
			<button type="submit" class="btn btn-success">Simpan</button>

			</form>		  

<?php endforeach; ?>
</div>