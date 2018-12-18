<div class="col-md-6 offset-md-3 ">
	<div class="card">
		<div class="card-header bg-success"><?php echo $sub_judul; ?></div>
			<div class="card-body">

				<form action="<?php echo site_url('admin/dosen/proses_edit'); ?>" 
					method="post">
					<div class="form-group">
						<label>Nik</label>
						<input type="text" class="form-control" 
						name="nik_dosen" 
						value="<?php echo $isi_data->nik; ?>">
					</div>
					<div class="form-group">
						<label>Nama Dosen</label>
						<input type="text" class="form-control" name="nama_dosen" 
						value="<?php echo $isi_data->nama_dosen; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" cols="30" rows="5" 
						class="form-control"><?php echo $isi_data->alamat; ?></textarea>

						<input type="hidden" name="nik_dosen" 
						value="<?php echo $isi_data->nik; ?>">
					</div>
					<input type="submit" name="submit" value="simpan" 
					class="btn btn-success">

					<a href="<?php echo site_url('admin/dosen'); ?>"
						class="btn btn-warning">Batal</a>

				</form>
			</div>
	</div>
</div>