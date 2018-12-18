<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header bg-success "  ><?php echo $sub_judul; ?></div>
			<div class="card-body">
				<form action=" <?php echo site_url('admin/dosen/proses_tambah'); ?>" method="post">
						
						<div class="form-group">
							<label>NIK</label>
							<input type="text" class="form-control" name="nik">
						</div>
						<div class="form-group">
							<label>Nama Dosen</label>
							<input type="text" class="form-control" name="nama_dosen">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>
						</div>
						<input type="submit" name="submit" value="Simpan" class="btn btn-success">
						<a href=" <?php echo site_url('admin/dosen'); ?>" class="btn btn-dark">Batal</a>
					</form>
				</div>


			</div>
		</div> 