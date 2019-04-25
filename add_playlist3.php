<html>
<body>

<?php
//this is for album page
session_cache_limiter(false);
include('server.php');
$album_id = $_GET['album_id'];
$result = pg_exec("select * from playlist_features_song ");
$dummy = $_SESSION['artist_id'];
$dummy2 = $_SESSION['display_name'];
$artist_id = $dummy;
$playlist_name= $_POST["playlist_name"];
$playlist_name1 = $dummy2.$playlist_name;
//echo $playlist_name;
$song_id=$_POST["song_id"];
//echo $song_id;
$timeis = pg_query("SELECT timestamp without time zone 'now'");
$rowtime = pg_fetch_array($timeis);
$rr = $rowtime[0];
$query = "INSERT INTO playlist_features_song VALUES ('$playlist_name1','$song_id','$rr')";
$result = pg_query($query);
$x = pg_query("SELECT artist_name,artist_id from artist where artist_id = '$artist_id'");
	$row123 = pg_fetch_array($x);
	$quagmire = $album_id.'&artist_id='.$row123[1];
	$row321= 'location:albums.php?album_id='.$quagmire;
	header($row321);



?>
</body>
</html>