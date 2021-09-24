# LiveTracking

Set a SecretKey in config.php  
Use an Android app like μlogger or OsmAnd to send data to the server. 
OsmAnd: https://<yourserver>/tracking.php?lat={0}&lon={1}&altitude={4}&acc={3}&timestamp={2}&speed={5}&key=<Insert_Key>
GpsLogger: https://<yourserver>/tracking.php?lat=%LAT&lon=%LON&altitude=%ALT&speed=%SPD&timestamp=%TIMESTAMP&key=<Insert_Key>
Generic HTTP GET: https://<yourserver>/tracking.php?lat=<LATITUDE>&lon=<LONGITUDE>&altitude=<ALTITUDE>&speed=<SPEED>&timestamp=<TIME>&key=<Insert_Key>
  
Go to index.php to see the track.
