<?php include('server.php');
?>
<!DOCTYPE HTML>
<html>
<style>
img:hover {
    webkit-filter: blur(2px); 
    filter: blur(1px);
}
 #ABC {
      background-color:black;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      width: 20%;
    }

    body{
      background: rgb(14,14,13);
      margin: 0;
	  	    } 
.bg-centred
{
  float: none;
  position: absolute;
  
  top: 4%;
  left: 24.8%;
  transform: translate(-50%, -50%);
}

audio {
	background-color: yellow;
    width: 270px;
    height: auto;
	position:fixed;
	bottom:150px;
	left:0px;
}
#playlist{
        }
#playlist div{
            color:white;
			height:500%;
			width:80%;
            text-decoration: none;	
			padding:20px;
			position:relative;
			left:535px;
			top:40px;
			margin-left:10px;
			font-size:22px;
        }
	#playlist1 div{
            color:white;
            text-decoration: none;	
			padding:20px;
			position:static;
			left:2500px;
			top:55px;
			font-size:20px;
        }
#playlist div a{
            color:white;
			font-family:'Poppins-Regular';
            text-decoration: none;	
			padding: 2px;
			width:40%
			margin-left:10px;	
        }
#playlist .current-song a{
            color:green;
        }
#playlist div {
 display:block; 
}
#playlist1 div {
 display:block; 
}

#playlist div:hover, div:focus {
 background-color:rgb(22, 24, 28);
}
@font-face { font-family: Poppins-Regular; src: url('Poppins-Regular.otf'); } 
    .poppins { font-family: Poppins-Regular; font-size: 4.2em; }
a{
	color:grey;
}
a:link{
	text-decoration: none;
}

a:hover{
	color: white;
	text-decoration: none;
	
}
input[type=text]{
	width:5%;
	height:5%;
	font-size:16px;
	text-align:center;
	font-family :'Poppins-Regular';
	background: transparent;
    border: none;
	background-color: #282828;
	margin-top:-14px;
}
input:focus { color:#FFFFFF;}
::placeholder {
    color: white;
	font-size:16px;
	position:absolute;
	font-family: 'Poppins-Regular';
    opacity: 0.6; /* Firefox */
}


 .button {
  background-color: #282828; 
  border: none;
  color: #282828;
  width:10%;
  height:5%;
  margin-top:-14px;
  font-size: 16px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: #282828; 
  color: white;
}

.button1:hover {
  background-color:green;
  color: white;
}

		</style>
		<body>
 <section id="ABC">
  
  
  <div class = "bg-centred" style = "position:absolute;top:60px;left:145px;font-size:30px;"><font color= "#FFFFFF" face="Poppins-Regular">MusePlay </font></div>
	 <div class = "bg-centred" style = "position:absolute;top:55px;left:220px;font-size:10px;"><font color= "#FFFFFF" face="Poppins-Regular">&copy </font></div>
	<img id = "theImage" style="position:absolute; top:37px; left:30px;width:40px;height:47px" SRC="Msymbol.gif"> 
	<div class = "bg-centred" style = "top:150px;left:100px;font-size:25px; "><a href ="home.php"><pre><font face="Poppins-Regular">&#9738;    Home</font></pre></a></div> 
	<div class = "bg-centred" style = "top:200px;left:108px;font-size:25px; "><a href ="presearch.php"><pre><font face="Poppins-Regular">&#9906;    Search</font></pre></a></div> 
		<div class = "bg-centred" style = "top:250px;left:145px;font-size:25px; "><a href ="playlist.php"><pre><font face="Poppins-Regular">|||   Your Playlists</font></pre></a></div> 
				<div class = "bg-centred" style = "top:600px;left:60px;font-size:25px; "><font face="Poppins-Regular">&#127795;	
</font></div>
		<div style = "position:absolute;top:578px;left:90px;font-size:29px;"><font color= "#FFFFFF" face="Poppins-Regular" ;><?php print($_SESSION["display_name"]); ?></font></div>

</section>

<?php
$album_id = $_GET['album_id'];
$artist_id = $_GET['artist_id'];
$query = "SELECT album_name,album_image,artist_id
	FROM album,artist,artist_releases_albums
	WHERE E_album_id6  = album_id and E_artist_id6 = artist_id and artist_id = '$artist_id' and album_id = '$album_id'";

$query2 = "SELECT song_name,song_file,duration,song_id
		FROM song,album,artist_releases_albums
		where album_id = '$album_id' and song.album_idfk = album.album_id and E_album_id6  = '$album_id'";
$result = pg_query($query);
$resultx = pg_query($query);
$row = pg_fetch_array($result);
$result2 = pg_query($query2);
$result3 = pg_query($query2);
$dummy = $row[2];
$_SESSION['$artist_id'] = $dummy;
$art_image = pg_fetch_array($resultx);
$art_i = $art_image[1];


?>
<body>
<?php echo "<div style='position:absolute;top:320px;left:265px;font-size:30px;height:20%;width:22%;text-align:center;'><font face = 'Poppins-Regular' color='#FFFFFF';> &nbsp;&nbsp;".$row[0]."</font></div>";?>
<img src = "<?php echo $art_i;?>" STYLE="position:absolute; TOP:50px; LEFT:295px; WIDTH:250px; HEIGHT:250px;border-radius:5%;"></a>

<audio src="" controls autoplay id="audioPlayer">
        Sorry, your browser doesn't support html5!
</audio>
<div id="playlist">
		<?php while($row2 = pg_fetch_array($result2)){?>
			        <form action="<?php echo "add_playlist3.php?album_id=".$album_id ?>" method="post" >
					<div><a href="<?php echo $row2[1];?>"><?php echo $row2[0];?></a></div>
					<input name="playlist_name" style="position:absolute;left:1150px;width:150px;" type="text" placeholder="playlist name"></input>
					<button class= "button button1" type="submit"  style="position:absolute;left:980px;">Add to playlist</button>
					<input type='hidden' name='song_id' value='<?php echo $row2[3];?>'/> 
					</form>
					<?php
		}?>
</div>
	<div class = "bg-centred" style = "top:430px;left:415px;font-size:15px;"><a href = "<?php echo "info.php?album_id=".$album_id."&artist_id=".$artist_id ; ?>"><font face="Poppins-Regular">More Info</font></a></div> 

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="audioPlayer.js"></script>
<script>
        // loads the audio player
        audioPlayer();
    </script>
</body>
</html>