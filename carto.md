<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>carto Serre Connectée</title>

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.2.3/leaflet.draw.css" />

    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.2.3/leaflet.draw.js"></script>

    <script src="BoundaryCanvas.js"></script>
    <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.6.4/leaflet.css" />
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" />
<![endif]-->
 
<script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.6.4/leaflet.js"></script>

   <style>
   	#mapid { 
        margin-top:50px;
   		margin-left: 30px;
        margin-right: 30px;
        height: 400px;  }
   </style>
	<meta charset="UTF-8">
</head>
<body>
	<div id="mapid"></div>
	<script type="text/javascript">

	// creation carte londre (coordonnée londre attitude, ag ,alttitude)
		var mymap = L.map('mapid').setView([48.8588377,2.2770198,12, -0.09], 13);

	var positron = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZ2JlbmNoYWJhIiwiYSI6ImNrMnl4eG5vdzBhZHAzbW1tcjBqM2NwdDUifQ.AHssphbpuPjmvPAsMieRZg'
}).addTo(mymap);

//création marker ( myfood et Toit Tout vert)
L.marker([48.8461296,2.3796647,21, -0.09]).addTo(mymap).bindPopup("Toit Tout Vert.").openPopup();
L.marker([48.5366093,7.5140543, -0.09]).addTo(mymap).bindPopup("MyFood.");

	</script>
</body>
	</html>