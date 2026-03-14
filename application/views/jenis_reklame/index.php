<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Jenis Reklame</h1>

<a href="<?= base_url('jenis_reklame/tambah') ?>" class="btn btn-primary mb-3">
Tambah Data
</a>

<table class="table table-bordered">

<thead>
<tr>
<th>No</th>
<th>Jenis Reklame</th>
<th>Ukuran</th>
<th>Harga</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php $no=1; foreach($jenis as $j){ ?>

<tr>

<td><?= $no++ ?></td>
<td><?= $j->nama_jenis ?></td>
<td><?= $j->ukuran ?></td>
<td><?= number_format($j->harga) ?></td>
<td><?= $j->keterangan ?></td>

<td>

<a href="<?= base_url('jenis_reklame/edit/'.$j->id_jenis) ?>" 
class="btn btn-warning btn-sm">
Edit
</a>

<a href="<?= base_url('jenis_reklame/delete/'.$j->id_jenis) ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus data?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>