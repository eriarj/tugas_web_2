<div class="col-md-12">
	<div class="card">
		<div class="card-header bg-danger" ><?php echo $sub_judul; ?></div>
			<div class="card-body">
				<?php 

				if ($this->session->flashdata('info')) {
					echo "<div class='alert alert-danger'>" . $this->session->flashdata('info') . "</div>";
				}

				 ?>
					<a href="<?php echo site_url('admin/mahasiswa/tambah'); ?>" class="btn btn-danger btn sm">Tambah Data</a>
					<hr>
				<table class="table table-bordered">
					<tr>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Program Studi</th>
						<th>Tgl Dibuat</th>
						<th>Aksi</th>
					</tr>	

					<?php foreach ($isi_tabel as $key) {   ?>

					<tr>
						<td><?php echo $key->nim; ?></td>
						<td><?php echo $key->nama_mahasiswa; ?></td>
						<td><?php echo $key->program_studi; ?></td>
						<td><?php echo date('d M y', strtotime($key->created_at)) ; ?></td>
						<td>							
							<a href="<?= site_url('admin/mahasiswa/hapus/' . $key->nim); ?>" 
							class="btn btn-danger btn-sm"
							onclick="return confirm('Anda Yakin?')">Hapus</a>

							<a href="<?= site_url('admin/mahasiswa/edit/' . $key->nim); ?>" 
							class="btn btn-warning btn-sm">Edit</a>
						</td>
					</tr>	
				<?php } ?>
			</table>
		</div>
	</div>
</div> 

	