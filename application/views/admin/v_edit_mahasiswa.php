<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header bg-warning "  ><?php echo $sub_judul; ?></div>
			<div class="card-body">
				<form action=" <?php echo site_url('admin/mahasiswa/proses_edit'); ?>" method="post">		
					<div class="form-group">
						<label>NIM</label>
						<input type="text" class="form-control" name="nim"
							value="<?php echo $isi_data->nim; ?>">
					</div>
					<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="text" class="form-control" name="nama_mahasiswa" 
							value="<?php echo $isi_data->nama_mahasiswa; ?>">
					</div>
					<div class="form-group">
						<label>Program Studi</label>
						<select class="form-control" name="program_studi">
							<?php echo $isi_data->program_studi; ?>
							<option value="pilih Prodi">Pilih Prodi...</option>
							<option value="D3 MI">D3 MI</option>
							<option value="D3 TI">D3 TI</option>
							<option value="S1 TI">S1 TI</option>	
						</select>
						<input type="hidden" name="nim_mahasiswa" 
						value="<?php echo $isi_data->nim; ?>">
					</div>
						<input type="submit" name="submit" value="Simpan" 
						class="btn btn-success">
						<a href=" <?php echo site_url('admin/mahasiswa'); ?>" 
							class="btn btn-dark">Batal</a>
				</form>
		</div>
	</div>
</div> 