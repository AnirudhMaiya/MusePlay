<?php
session_cache_limiter(false);
include('server.php');
$rating= $_POST["rating"];
$playlist_id = $_GET['playlist_id'];
$query = pg_query("UPDATE playlist SET rating = '$rating' where playlist_id = '$playlist_id'");
$row321= 'location:displayplaylist.php?playlist_id='.$playlist_id;
header($row321);


?>