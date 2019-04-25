<html>
<body>
<style>
.error{
	width:92%;
	margin :0px auto;
	padding:10px;
	border:1px solid #a94442;
	color:#a94442;
	background : #f2dede;
	border-radius:5px;
	text-align :left;
}
</style>

<?php
//this is for topglobal page
session_cache_limiter(false);
include('server.php');
$album_id = $_GET['album_id'];
$result = pg_exec("select * from playlist_features_song");
$dummy = $_SESSION['artist_id'];
$dummy2 = $_SESSION['display_name'];
$artist_id = $dummy;
$email_id = $_SESSION['email_id'];
$playlist_name= $_POST["playlist_name"];
$playlist_name1 = $dummy2.$playlist_name;
//echo $playlist_name;
$song_id=$_POST["song_id"];
$timeis = pg_query("SELECT timestamp without time zone 'now'");
$rowtime = pg_fetch_array($timeis);
$rr = $rowtime[0];
$queryxyz = pg_query("SELECT * FROM playlist WHERE email_idfk = '$email_id' and playlist_id = '$playlist_name1'");
if(pg_num_rows($queryxyz)>0){
$query = "INSERT INTO playlist_features_song VALUES ('$playlist_name1','$song_id','$rr')";
$result = pg_query($query);
	$row321= 'location:topglobal.php';
	header($row321);
}
else{
   $message = "Oops!! We wish this playlist existed. TRY AGAIN";

    echo "<SCRIPT type='text/javascript'> 
        alert('$message');
        window.location.replace(\"topglobal.php\");
    </SCRIPT>";
	
}
?>
</div>
</body>
</html>