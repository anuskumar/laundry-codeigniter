<div class="col-md-6 col-md-offset-3">
	<div class="page-header">
		<h3>Tambah Data Pakaian</h3>
		<div class="right">
			<a href="<?php echo base_url().'admin_dashboard/pakaian/'; ?>" class="btn btn-primary btn-sm">Batal</a>
			</div>
	</div>
	<form action="<?php echo base_url().'pakaian/aksi_tambah_pakaian/' ?>" method="post">
	<div class="form-group">
	<label for="id_pakaian">ID Pakaian</label>
	<input type="text" name="id_pakaian" class="form-control">
	</div>
		<div class="form-group">
			<label>Nama Pelanggan</label>
			<select name="id_pelanggan" class="form-control">
			<?php foreach($pelanggan as $p) : ?>
			<option value="<?php echo $p -> id_pelanggan; ?>"><?php echo $p -> nama_pelanggan; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="jenis_pakaian">Jenis Pakaian</label>
			<select name="jenis_pakaian" class="form-control">
				<option value="jas">Jas</option>
				<option value="piama">Piama</option>
				<option value="general">general</option>
			</select>
		</div>
		<div class="form-group">
			<label for="jumlah_pakaian">Jumlah Pakaian</label>
				<input type="text" name="jumlah_pakaian" class="form-control" placeholder="Isi Jumlah Pakaian">
		</div>
		<div class="form-group">
			<label for="berat_pakaian">Berat Pakaian</label>
			<input type="text" name="berat_pakaian" class="form-control" placeholder="Isi Berat Pakaian">
		</div>
		<div class="form-group">
			<input type="submit" value="Simpan" class="btn btn-success btn-block">
		</div>
	</form>

			
</div>