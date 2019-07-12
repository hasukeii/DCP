<link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
<script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>

<style>
#map { height: 180px; }
</style>
<div id="map"></div>

<script>
var map = L.map('map').setView([42.35, -71.08], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
      maxZoom: 17,
      minZoom: 9   
}).addTo(map);
</script>