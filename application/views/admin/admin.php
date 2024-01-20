

<div class="page-container2 ml-2">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-user"></i> Admin
	</div>
	<?php echo $this->session->flashdata('pesan') ?>
	<a href="<?php echo base_url('admin/admin/tambah_admin') ?>" class="btn bt-sm btn-primary mb-3"> <i class="fas fa-plus fa-sm"></i>Tambah Admin</a>
	<table class="table table-bordered">
		<tr>
		<th>No</th>
		<th>Nama Admin</th>
		<th>Username</th>
		<th>Password</th>
		<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach($admin as $sk) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $sk->nama_admin ?></td>
				<td><?php echo $sk->username ?></td>
				<td><?php echo $sk->password ?></td>
				<td width="20px"><?php echo anchor('admin/admin/update/'.$sk->id_admin,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
				<td width="20px"><?php echo anchor('admin/admin/delete/'.$sk->id_admin,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>
	</table>
</div>