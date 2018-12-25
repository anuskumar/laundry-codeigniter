<div class="container">
	<div class="page-header">
		<h3>Data Pakaian</h3>
	</div>
	<a href="<?php echo base_url() . 'admin_dashboard/input_pakaian/' ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Tambah Data Pakaian</a>
	<br><br>
	<table class="table table-striped table-hover" id="table-datatable">
		<tr>
			<th>ID Pakaian</th>
			<th>ID Pelanggan </th>
			<th>Jenis Pakaian Pelanggan</th>
			<th>Jumlah Pakaian</th>
			<th>Berat Pakaian</th>
			
		</tr>
	
		<tr>			
			<?php foreach ($pakaian as $pa) : ?>
				
			<td><?php echo $pa->id_pakaian; ?></td>

			<td><?php echo $pa->id_pelanggan; ?></td>

			<td><?php if ($pa->jenis_pakaian == "jas") {
							echo "Jas";
						} elseif ($pa->jenis_pakaian == "piama") {
							echo "Piama";
						} elseif ($pa->jenis_pakaian == "general") {
							echo "General";
						}
						?></td>

			<td><?php echo $pa->jumlah_pakaian; ?></td>
			<td><?php echo $pa->berat_pakaian; ?></td>
		
		</tr>
		<?php endforeach; ?>
	</table>
	<div>
	<a href="<?php echo base_url() . 'admin_dashboard/index/'; ?>" class="btn btn-primary btn-sm">Kembali</a>
	</div>
</div>