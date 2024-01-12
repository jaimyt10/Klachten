<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...

require 'dbConnect.php';

    require_once 'nav.php';
?>
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
</head>
<H1>Klachten melden Rotterdam</H1>

<H2>Welkom <?php echo $_SESSION['fullname']?>!</H2>

<div id="map" style="height: 400px;"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([51.9225, 4.47917], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
</script>
<?php
