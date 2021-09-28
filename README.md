# LiveTracking
  
Very simple Gps tracking viewer.  
  
In config.php:  
Set a SecretKey and use it in logger app or http get request.  
Set ShowOnlyLastPos to true to show only the last recorded position.  
Set MaxPoint maxium number of point displayed on map.  
  
Use an Android app like GpsLogger or OsmAnd (or a simple HTTP Get) to send data to the server:  
  
OsmAnd: https://yourserver/tracking.php?lat={0}&lon={1}&altitude={4}&acc={3}&timestamp={2}&speed={5}&key=[Key]  
GpsLogger: https://yourserver/tracking.php?lat=%LAT&lon=%LON&altitude=%ALT&speed=%SPD&timestamp=%TIMESTAMP&key=[Key]  
Generic HTTP GET: https://yourserver/tracking.php?lat=[LATITUDE]&lon=[LONGITUDE]&altitude=[ALTITUDE]&speed=[SPEED]&timestamp=[TIME]&key=[Key]  
    
Go to index.php to see the track.  
Go to https://yourserver/reset.php?key=[Key] to reset history and last location.  
