<?php
$file = file_get_contents('./data/point.latest');
$data = unserialize($file);
$lat = $data['lat'];
$lon = $data['lon'];
$tstamp = $data['timestamp'];
$altitude = $data['altitude'];
$speed = $data['speed'];
?>


<html>
<head>
  <title>Live Tracking</title>
  <link rel="stylesheet" href="./leaflet.css"/>
  <script src="./leaflet.js"></script>
  <style>
    #map{ height: 100% }
  </style>
  <meta http-equiv="refresh" content="360">
</head>
<body>

  <div id="map"></div>

  <script>

  // initialize the map
  var map = L.map('map').setView([44.0, 10.0], 16);
  L.control.scale().addTo(map)
  // load a tile layer
L.tileLayer( 
	'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    subdomains: ['a','b','c']
	}).addTo( map );
	var latlngs = [
 <?php
	include './config.php';
	$track = fopen('./data/point.history', 'r');
	if ($track and $ShowOnlyLastPos == false) {
    		$n = 0;
		while (($line = fgets($track)) !== false) {
			$n++;
			if ($n >= $MaxPoint) {
        			$n = 0;
        			break;
      			}
			$linenoLB = preg_replace( "/\r|\n/", "", $line );
			echo "[$linenoLB],\n";
		}
	} else {
		echo "[$lat, $lon]";
	}
	fclose($track);
?>
];
var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);
// zoom the map to the polyline
map.fitBounds(polyline.getBounds());

<?php
	$time = date("F j, Y, g:i a", ($tstamp / 1000) );
	echo "L.marker([$lat,$lon]).addTo(map).bindPopup('Lat: $lat<br>Lon: $lon<br>Altitude: $altitude<br>Speed: $speed<br>Time: $time').openPopup();"
?>

  </script>
  
</body>
</html>
