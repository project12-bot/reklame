<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Tambah Lokasi Reklame</h1>

<form method="post" action="<?= base_url('lokasi/simpan') ?>">

<div class="form-group">
<label>Nama Lokasi</label>
<input type="text" name="nama_lokasi" class="form-control" required>
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control"></textarea>
</div>

<div class="form-group">
<label>Kota</label>
<input type="text" name="kota" class="form-control">
</div>

<div class="form-group">
<label>Lokasi Map</label>

<div id="map" style="height:400px;"></div>

<input type="text" name="koordinat" id="koordinat" class="form-control mt-2" readonly>

</div>

<button type="submit" class="btn btn-primary">
Simpan
</button>

<a href="<?= base_url('lokasi') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>
<script>

document.addEventListener("DOMContentLoaded", function(){

var map = L.map('map').setView([-6.1783,106.6319], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    attribution:'© OpenStreetMap contributors'
}).addTo(map);

var marker = null;

map.on('click', function(e){

    var lat = e.latlng.lat;
    var lng = e.latlng.lng;

    if(marker !== null){
        map.removeLayer(marker);
    }

    marker = L.marker([lat,lng]).addTo(map);

    document.getElementById("koordinat").value = lat + "," + lng;

});

});

</script>