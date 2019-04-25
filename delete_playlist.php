<?php
session_cache_limiter(false);
include('server.php');
$song_id = $_GET['song_id'];
$playlist_id = $_GET['playlist_id'];
$date_added = $_GET['date_added'];
$query = pg_query("DELETE FROM playlist_features_song where e_playlist_id2 = '$playlist_id' and e_song_id2 = '$song_id' and date_added = '$date_added'");
$back = 'location:displayplaylist.php?playlist_id='.$playlist_id;
header($back);

?>