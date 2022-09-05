<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash();  ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
				Tambah data
			</button>
			<h3 class="mt-2">Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="JudulModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="JudulModal">Tambah data mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
					<div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control" required name="nama">
					</div>
					<div class="mb-3">
						<label class="form-label">Umur</label>
						<input type="number" class="form-control" required name="umur">
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" required name="alamat">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah data</button>
				</form>
			</div>
		</div>
	</div>
</div>