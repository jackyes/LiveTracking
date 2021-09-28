<?php
    include './config.php';
    $data['lat'] = $_GET['lat'];
    $data['lon'] = $_GET['lon'];
    $data['timestamp'] = $_GET['timestamp'];
    $data['hdop'] = $_GET['hdop'];
    $data['altitude'] = $_GET['altitude'];
    $data['speed'] = $_GET['speed'];
    $data['bearing'] = $_GET['bearing'];
    $data['key'] = $_GET['key'];

    $lat = $data['lat'];
    $lon = $data['lon'];
    $key = $data['key'];
    
	if ($key == $SecretKey){
		$f = fopen('./data/point.latest', 'w');
		fwrite($f, serialize($data));
		fclose($f);

		$body = fopen('./data/point.history', 'a');
		fwrite($body, "${lat}, ${lon}\n");
		fclose($body);
		echo "<b>saving location to file</b>";
	} else {
		echo "WRONG KEY!";
	}
?>


