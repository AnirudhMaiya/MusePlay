<?php
session_cache_limiter(false);
include('server.php');
$playlist_id = $_GET['playlist_id'];
$query = pg_query("DELETE FROM playlist_features_song where e_playlist_id2 = '$playlist_id'");
$query2 = pg_query("DELETE FROM playlist where playlist_id = '$playlist_id'");
$back = 'location:DeletePlaylist.php';
header($back);
?>