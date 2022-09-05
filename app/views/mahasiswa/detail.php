<div class="container mt-5">
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title">Nama : <?= $data['mhs']['nama']; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted">Alamat : <?= $data['mhs']['alamat']; ?></h6>
	    <p class="card-text">Umur : <?= $data['mhs']['umur']; ?>.</p>
	    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
	  </div>
	</div>
</div>