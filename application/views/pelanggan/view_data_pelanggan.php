<div class="container">
	<div class="page-header">
		<h3>Data Pelanggan</h3>
	</div>

	<a href="<?php echo base_url().'pelanggan/tambah_pelanggan/'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Tambah Data Pelanggan</a>
	<br><br>
	
	<table class="table table-dark table-striped table-hover" id="table-datatable">
		<tr>
			<th>No</th>
			<th>ID Pelanggan</th>
			<th>Nama</th>
			<th>No Telepon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php $no = 1; foreach($pelanggan as $p) : ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $p -> id_pelanggan; ?></td>
			<td><?php echo $p -> nama_pelanggan; ?></td>
			<td><?php echo $p -> no_telepon; ?></td>
			<td><?php echo $p -> alamat; ?></td>
			<td>
				<a href="<?php echo base_url().'pelanggan/edit_pelanggan/'.$p -> id_pelanggan; ?>" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				<a href="<?php echo base_url().'pelanggan/hapus_pelanggan/'.$p -> id_pelanggan; ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
		<div>
			<a href="<?php echo base_url().'admin_dashboard/index/'; ?>" class="btn btn-primary btn-sm">Kembali</a>
		</div>
</div>


</div>