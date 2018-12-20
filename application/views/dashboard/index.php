<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4><span class="glyphicon glyphicon-dashboard"></span> <b>Dashboard Administrator</b></h4>
				</div>
				<div class="panel-body">
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-user"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b><?php echo $this -> model_laundry -> get_data('pelanggan') -> num_rows(); ?></b></font>
										<div><b>Jumlah Pelanggan</b></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-retweet"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b><?php echo $this -> model_laundry -> edit_data(['status_transaksi' => 'proses'],'transaksi') -> num_rows();  ?></b></font>
										<div><b>Jumlah Cucian Diproses</b></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-sort"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b><?php echo $this -> model_laundry -> edit_data(['status_transaksi'=>'ready'],'transaksi')->num_rows(); ?></b></font>
										<div><b>Jumlah Cucian Siap Ambil</b></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-ok"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b>0</b></font>
										<div><b>Jumlah Cucian Selesai</b></div>
									</div>
								</div>
							</div>
						
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4><b>Riwayat Transaksi Terakhir</b></h4>
				</div>
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
							<td><?php echo $t -> status_transaksi;?></td>
						</tr>

						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>



	</div>
</div>

