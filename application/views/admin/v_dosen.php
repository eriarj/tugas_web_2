		 <div class="col-md-12">
			<div class="card">
				<div class="card-header bg-drag bg-success" ><?php echo $sub_judul; ?></div>
				<div class="card-body">
					<?php 

				if ($this->session->flashdata('info')) {
					echo "<div class='alert alert-success'>" . $this->session->flashdata('info') . "</div>";
				}

				 ?>
					<a href="<?php echo site_url('admin/dosen/tambah'); ?>" class="btn btn-success btn sm">Tambah Data</a>
					<hr>
					<table class="table table-bordered">
						<tr>
							<th>NIK</th>
							<th>Nama Dosen</th>
							<th>Alamat</th>
							<th>Tgl Dibuat</th>
							<th>Aksi</th>
						</tr>	

						<?php foreach ($isi_tabel as $key) {   ?>


						<tr>
							<td><?php echo $key->nik; ?></td>
							<td><?php echo $key->nama_dosen; ?></td>
							<td><?php echo $key->alamat; ?></td>
							<td><?php echo date('d M y', strtotime($key->created_at)) ; ?></td>
							<td>
								<a href="<?= site_url('admin/dosen/hapus/' . $key->nik); ?>" 
							class="btn btn-danger btn-sm"
							onclick="return confirm('Anda Yakin?')">Hapus</a>

							<a href="<?= site_url('admin/dosen/edit/' . $key->nik); ?>" 
							class="btn btn-warning btn-sm">Edit</a>
							</td>
						</tr>	

						<?php } ?>

					</table>
				</div>
			</div>
		</div> 
