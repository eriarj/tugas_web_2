<div class="col-md-12 ">
	<div class="card">
		<div class="card-header bg-info"><?php echo $sub_judul; ?></div>
			<div class="card-body">

				<?php 

				if ($this->session->flashdata('info')) {
					echo "<div class='alert alert-primary'>" . $this->session->flashdata('info') . "</div>";
				}

				 ?>

				<a href="<?php echo site_url('admin/pengumuman/tambah'); ?>" 
					class="btn btn-primary">Tambah Data</a> <br> <br>

			<?php 
				foreach ($isi_tabel as $value):?>

			<div style="border: 1px solid blue; padding: 25px; 
				margin-bottom: 20px"> 
				
				<div class="row">
					<div class="col-sm-1">
						<img widht="200px" weight="200px" 
						src="<?= base_url('assets/mario.png')?>" 
						class="img-thumbnail">
					</div>
					<div class="col-sm-4">
						Penulis <strong><?= $value->penulis; ?></strong>
						<br>
						<small><?= $value->created_at ?></small>
					</div>

					<div class="col-sm-7">
						<a href="<?= site_url('admin/pengumuman/hapus/' . $value->id); ?>" 
							class="btn btn-danger btn-sm"
							onclick="return confirm('Anda Yakin?')">Hapus</a>

						<a href="<?= site_url('admin/pengumuman/edit/' . $value->id); ?>" 
							class="btn btn-warning btn-sm">Edit</a>

					</div>

				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4><?= $value->judul ?></h4>
						<br>
						

						<p><?= $value->isi ?></p>
					</div>
				</div>
				</div>

			<?php endforeach; ?>

			</div>
	</div>
</div>