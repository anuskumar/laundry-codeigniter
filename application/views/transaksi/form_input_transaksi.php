<div class="col-md-6 col-md-offset-3">
	<div class="page-header">
		<h3>Tambah Transaksi Baru</h3>
		<br>
		<a href="<?php echo base_url().'admin_dashboard/transaksi'?>" class="btn btn-primary btn-sm">Kembali</a>
		<br>
	</div>
	
<br><br>
	<form action="<?php echo base_url().'admin_dashboard/aksi_tambah_transaksi' ?>" method="post" >
		<div class="form-group">
		<label for="id_transaksi">ID Transaksi</label>
		<input type="text" name="id_transaksi" class="form-control">
		</div>
		<div class="form-group">
		<label for="id_pelanggan">ID Pelanggan</label>
		<select name="id_pelanggan" class="form-control">
		<?php foreach($pelanggan as $p) : ?>
		<option value="<?php echo $p -> id_pelanggan; ?>"><?php echo $p -> nama_pelanggan; ?></option>
		<?php endforeach; ?>
		</select>
		<div class="form-group">
		<label for="id_pakaian">ID Pakaian</label>
		<select name="id_pakaian" class="form-control">
		<?php foreach($pakaian as $pa) : ?>
		<option value="<?php echo $pa -> id_pakaian; ?>"><?php echo $pa -> id_pakaian;  ?></option>
		<?php endforeach; ?>
		</select>
		</div class="form-group">
		<label for="tanggal_masuk">Tanggal Masuk</label>
		<input type="date" name="tanggal_masuk" class="form-control">
		</div>
		<div class="form-group">
		<label for="tanggal_selesai">Tanggal Selesai</label>
		<input type="date" name="tanggal_selesai" class="form-control">
		</div>
		<div class="form-group">
		<label for="harga">Harga</label>
		<input type="text" name="harga" class="form-control">
		</div>
		<div class="form-group">
		<label for="status_transaksi">Status Transaksi</label>
		<select name="status_transaksi" class="form-control">
		<option value="proses">Proses</option>
		<option value="ready">Ready</option>
		</select>
		</div>
		<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-success btn-block">
		</div>
	</form>
</div>