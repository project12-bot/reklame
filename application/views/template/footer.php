</div>

<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
<span>Copyright &copy; Sistem Informasi Reklame 2026</span>
</div>
</div>
</footer>

</div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

document.addEventListener("DOMContentLoaded", function(){

var map = L.map('map').setView([-6.1783,106.6319], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    attribution:'© OpenStreetMap contributors'
}).addTo(map);

<?php foreach($lokasi as $l){

$koor = explode(",", $l->koordinat);

$lat = trim($koor[0]);
$lng = trim($koor[1]);

?>

L.marker([<?= $lat ?>, <?= $lng ?>])
.addTo(map)
.bindPopup(
"<b><?= $l->nama_lokasi ?></b><br><?= $l->alamat ?><br><?= $l->kota ?>"
);

<?php } ?>

});

</script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

</body>
</html>