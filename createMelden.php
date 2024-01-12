<?php


require_once 'nav.php';

?>


<!doctype html>
<html>
<head>
    <title>Rapporteren</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<h1>Probleem rapporteren</h1>

<div id="map" style="height: 400px;"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([51.9225, 4.47917], 12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
</script>


<div id="form">

<form  action="createMelden2.php" method="post">
<!--    <label for="locatie">locatie</label>-->
<!--    <input type="text" id = "locatie" name="locatie"><br/>-->

    <label for="beschrijving">Problemen beschrijving:</label>
    <input type="text" id = "beschrijving" name="beschrijving"><br/>

    <input type="submit">
</form>
</div>
</body>
</html>