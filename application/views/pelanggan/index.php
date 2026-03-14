<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Pelanggan</h1>

<a href="<?= base_url('pelanggan/tambah') ?>" class="btn btn-primary mb-3">
Tambah Pelanggan
</a>

<table class="table table-bordered">

<thead>
<tr>
<th>No</th>
<th>Nama Pelanggan</th>
<th>Perusahaan</th>
<th>No Telepon</th>
<th>Email</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php $no=1; foreach($pelanggan as $p){ ?>

<tr>

<td><?= $no++ ?></td>
<td><?= $p->nama_pelanggan ?></td>
<td><?= $p->perusahaan ?></td>
<td><?= $p->no_telp ?></td>
<td><?= $p->email ?></td>

<td>

<a href="<?= base_url('pelanggan/edit/'.$p->id_pelanggan) ?>" 
class="btn btn-warning btn-sm">
Edit
</a>

<a href="<?= base_url('pelanggan/delete/'.$p->id_pelanggan) ?>" 
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