<html>
<style>

</style>
<?php 
include('server.php');
if(isset($_POST['email_id'])){
		$follow_userid = $_POST['email_id'];
		$email_id = $_SESSION['email_id'];
		$artist_id = $_SESSION['artist_id'];
		$favour = $_GET['playlist_id'];
		$query = pg_query("SELECT favourite_boolean	
							   FROM playlist 
							   WHERE email_idfk='$email_id' AND playlist_id='$favour'
							  ");
		$leona = pg_fetch_array($query);
		if($leona[0] == '0'){
			pg_query("UPDATE playlist
						 SET favourite_boolean = '1'
						 WHERE email_idfk='$email_id' AND playlist_id='$favour'
						");
			//pg_close($conn);
		}
		
	}
	$x = pg_query("SELECT playlist_id from playlist where email_idfk='$email_id' AND playlist_id='$favour'");
	$row123 = pg_fetch_array($x);
	//$row12 = preg_replace('/\s+/', '', $row123[0]);
	$row321= 'location:displayplaylist.php?playlist_id='.$row123[0];
	header($row321);
?>

<?php 
?>
</html>
