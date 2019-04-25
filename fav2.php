<html>
<?php
session_start();
include('server.php');
if(isset($_POST['email_id'])){
		$unfollow_userid = $_POST['email_id'];
		$email_id = $_SESSION['email_id'];
		$artist_id = $_SESSION['artist_id'];
		$favour = $_GET['playlist_id'];
		$query = pg_query("SELECT favourite_boolean	
							   FROM playlist 
							   WHERE email_idfk='$email_id' AND playlist_id='$favour'
							  ");
		$leona = pg_fetch_array($query);
		if($leona[0] == '1' ){
			pg_query("UPDATE playlist
						 SET favourite_boolean = '0'
						 WHERE email_idfk='$email_id' AND playlist_id='$favour'
						");
		}
}
$query2 = pg_query("SELECT e_id	FROM user_follows_artist WHERE E_mail_id5 = '$email_id' AND E_artist_id5 ='$artist_id'"); 	

if(pg_num_rows($query2)=='0'){ ?>
	<form method="post" action="<?php echo "fav.php?playlist_id=".$favour ; ?>">
	<button type = "submit" name = "email_id" >+ FOLLOW</button>
	</form>
	<?php }
	$x = pg_query("SELECT playlist_id from playlist where email_idfk='$email_id' AND playlist_id='$favour'");
	$row123 = pg_fetch_array($x);
	//$row12 = preg_replace('/\s+/', '', $row123[0]);
	$row321= 'location:displayplaylist.php?playlist_id='.$row123[0];
	header($row321);
	?>
</html>