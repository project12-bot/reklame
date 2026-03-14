<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Lokasi Reklame</h1>

<?php if($this->session->userdata('role') == 'admin'){ ?>

<a href="<?= base_url('lokasi/tambah') ?>" class="btn btn-primary mb-3">
Tambah Lokasi
</a>

<?php } ?>

<table class="table table-bordered">

<thead>
<tr>
<th>No</th>
<th>Nama Lokasi</th>
<th>Alamat</th>
<th>Kota</th>
<th>Koordinat</th>

<?php if($this->session->userdata('role') == 'admin'){ ?>
<th>Aksi</th>
<?php } ?>

</tr>
</thead>

<tbody>

<?php $no=1; foreach($lokasi as $l){ ?>

<tr>

<td><?= $no++ ?></td>
<td><?= $l->nama_lokasi ?></td>
<td><?= $l->alamat ?></td>
<td><?= $l->kota ?></td>
<td><?= $l->koordinat ?></td>

<?php if($this->session->userdata('role') == 'admin'){ ?>

<td>

<a href="<?= base_url('lokasi/edit/'.$l->id_lokasi) ?>" 
class="btn btn-warning btn-sm">
Edit
</a>

<a href="<?= base_url('lokasi/delete/'.$l->id_lokasi) ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus data?')">
Hapus
</a>

</td>

<?php } ?>

</tr>

<?php } ?>

</tbody>

</table>

</div>