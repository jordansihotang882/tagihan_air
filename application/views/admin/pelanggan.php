

<div class="page-container2 ml-2">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-user"></i> Pelanggan
	</div>
	<?php echo $this->session->flashdata('pesan') ?>
	<a href="<?php echo base_url('admin/pelanggan/tambah_pelanggan') ?>" class="btn bt-sm btn-primary mb-3"> <i class="fas fa-plus fa-sm"></i>Tambah Pelanggan</a>
	<table class="table table-bordered">
		<tr>
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Username</th>
		<th>Password</th>
		<th>Nomor Hp</th>
		<th>Status</th>
		<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach($pelanggan as $plg) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $plg->nama_pelanggan ?></td>
				<td><?php echo $plg->username ?></td>
				<td><?php echo $plg->password ?></td>
				<td><?php echo $plg->no_hp ?></td>
				<td><?php echo $plg->status ?></td>
				<td width="20px"><?php echo anchor('admin/pelanggan/update/'.$plg->id_pelanggan,'<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
				<td width="20px"><?php echo anchor('admin/pelanggan/delete/'.$plg->id_pelanggan,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>

			</tr>
		<?php endforeach; ?>
	</table>
</div>