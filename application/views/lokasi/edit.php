<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Lokasi Reklame</h1>

<form method="post" action="<?= base_url('lokasi/update') ?>">

<input type="hidden" name="id_lokasi" value="<?= $lokasi->id_lokasi ?>">

<div class="form-group">
<label>Nama Lokasi</label>
<input type="text" name="nama_lokasi" class="form-control"
value="<?= $lokasi->nama_lokasi ?>">
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control"><?= $lokasi->alamat ?></textarea>
</div>

<div class="form-group">
<label>Kota</label>
<input type="text" name="kota" class="form-control"
value="<?= $lokasi->kota ?>">
</div>

<div class="form-group">
<label>Lokasi Map</label>

<div id="map" style="height:400px;"></div>

<input type="text" name="koordinat" id="koordinat" class="form-control mt-2" value="<?= $lokasi->koordinat ?>" readonly>

</div>

<button type="submit" class="btn btn-primary">
Update
</button>

<a href="<?= base_url('lokasi') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>
<script>

document.addEventListener("DOMContentLoaded", function(){

var koor = "<?= $lokasi->koordinat ?>".split(",");

var lat = parseFloat(koor[0]);
var lng = parseFloat(koor[1]);

var map = L.map('map').setView([lat,lng], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    attribution:'© OpenStreetMap contributors'
}).addTo(map);

var marker = L.marker([lat,lng]).addTo(map);

document.getElementById("koordinat").value = lat + "," + lng;

map.on('click', function(e){

    var newLat = e.latlng.lat;
    var newLng = e.latlng.lng;

    marker.setLatLng([newLat,newLng]);

    document.getElementById("koordinat").value =
    newLat + "," + newLng;

});

});

</script>