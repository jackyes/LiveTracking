<?php
	include './config.php';
	$data['key'] = $_GET['key'];
	$key = $data['key'];
	if ($key == $SecretKey){
		$kml = fopen('./data/point.history', 'w');
		fclose($kml);
		echo "<b>track successfully reset</b>";
	} else {
		echo "WRONG KEY!";
	}
?>

