<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Jenis Reklame</h1>

<form method="post" action="<?= base_url('jenis_reklame/update') ?>">

<input type="hidden" name="id_jenis" value="<?= $jenis->id_jenis ?>">

<div class="form-group">
<label>Nama Jenis Reklame</label>
<input type="text" name="nama_jenis" class="form-control"
value="<?= $jenis->nama_jenis ?>">
</div>

<div class="form-group">
<label>Ukuran</label>
<input type="text" name="ukuran" class="form-control"
value="<?= $jenis->ukuran ?>">
</div>

<div class="form-group">
<label>Harga</label>
<input type="number" name="harga" class="form-control"
value="<?= $jenis->harga ?>">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control"><?= $jenis->keterangan ?></textarea>
</div>

<button type="submit" class="btn btn-primary">
Update
</button>

<a href="<?= base_url('jenis_reklame') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>