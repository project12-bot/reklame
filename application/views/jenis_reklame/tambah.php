<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Tambah Jenis Reklame</h1>

<form method="post" action="<?= base_url('jenis_reklame/simpan') ?>">

<div class="form-group">
<label>Nama Jenis Reklame</label>
<input type="text" name="nama_jenis" class="form-control" required>
</div>

<div class="form-group">
<label>Ukuran</label>
<input type="text" name="ukuran" class="form-control">
</div>

<div class="form-group">
<label>Harga</label>
<input type="number" name="harga" class="form-control">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control"></textarea>
</div>

<button type="submit" class="btn btn-primary">
Simpan
</button>

<a href="<?= base_url('jenis_reklame') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>