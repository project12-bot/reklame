<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Pelanggan</h1>

<form method="post" action="<?= base_url('pelanggan/update') ?>">

<input type="hidden" name="id_pelanggan" value="<?= $pelanggan->id_pelanggan ?>">

<div class="form-group">
<label>Nama Pelanggan</label>
<input type="text" name="nama_pelanggan" class="form-control"
value="<?= $pelanggan->nama_pelanggan ?>">
</div>

<div class="form-group">
<label>Perusahaan</label>
<input type="text" name="perusahaan" class="form-control"
value="<?= $pelanggan->perusahaan ?>">
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control"><?= $pelanggan->alamat ?></textarea>
</div>

<div class="form-group">
<label>No Telepon</label>
<input type="text" name="no_telp" class="form-control"
value="<?= $pelanggan->no_telp ?>">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control"
value="<?= $pelanggan->email ?>">
</div>

<button type="submit" class="btn btn-primary">
Update
</button>

<a href="<?= base_url('pelanggan') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>