<div class="container">
			
				<div class="page-header">
					<h3><b>Data Transaksi</b></h3>
				</div>
				<a href="<?php echo base_url().'admin_dashboard/input_transaksi/' ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Input Transaksi Baru</a>
				<br><br>
				<div class="panel-body">
					<table class="table table-dark table-striped table-hover" id="table-datatable">
						<tr>
							<th>No</th>
							<th>ID Transaksi</th>
							<th>ID Pelanggan</th>
							<th>ID Pakaian</th>
							<th>Tanggal Masuk</th>
							<th>Tanggal Selesai</th>
							<th>Harga</th>
							<th>Status</th>
							<th>Detail</th>
						</tr>
						<?php $no = 1; foreach($transaksi as $t) : ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $t -> id_transaksi; ?></td>
							<td><?php echo $t -> id_pelanggan; ?></td>
							<td><?php echo $t -> id_pakaian; ?></td>
							<td><?php echo $t -> tanggal_masuk; ?></td>
							<td><?php echo $t -> tanggal_selesai; ?></td>
							<td><?php echo $t -> harga; ?></td>
							<td><?php if($t -> status_transaksi == "proses")
							{
								echo "Proses";
							} elseif($t -> status_transaksi == "ready")
							{
								echo "Ready";
							} ?> </td>
							<td><a href="#"><span class="badge badge-primary"> Detail Transaksi</span></a></td>
						</tr>

						<?php endforeach; ?>

					</table>

					<a href="<?php echo base_url().'admin_dashboard/index/'; ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
		</div>
