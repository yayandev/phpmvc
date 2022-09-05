<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash();  ?>
		</div>
	</div>

	<div class="row mb-2">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
				Tambah data
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group mb-2">
					<input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
					<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h3 class="mt-2">Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Tambah data mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
					<input type="hidden" id="id" name="id">
					<div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control" required id="nama" name="nama">
					</div>
					<div class="mb-3">
						<label class="form-label">Umur</label>
						<input type="number" class="form-control" required id="umur" name="umur">
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" required id="alamat" name="alamat">
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