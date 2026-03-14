<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Tambah Pelanggan</h1>

<form method="post" action="<?= base_url('pelanggan/simpan') ?>">

<div class="form-group">
<label>Nama Pelanggan</label>
<input type="text" name="nama_pelanggan" class="form-control" required>
</div>

<div class="form-group">
<label>Perusahaan</label>
<input type="text" name="perusahaan" class="form-control">
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control"></textarea>
</div>

<div class="form-group">
<label>No Telepon</label>
<input type="text" name="no_telp" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<button type="submit" class="btn btn-primary">
Simpan
</button>

<a href="<?= base_url('pelanggan') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>