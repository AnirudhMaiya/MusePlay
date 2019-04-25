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
	  overflow-x:hidden;
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
			left:260px;
			top:385px;
			margin-left:10px;
			font-size:22px;
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
#playlist div:hover, div:focus {
 background-color:rgb(22, 24, 28);
}
audio {
	background-color: yellow;
    width: 270px;
    height: auto;
	position:fixed;
	bottom:150px;
	left:0px;
}

.bg-centred
{
  float: none;
  position: absolute;
  
  top: 4%;
  left: 24.8%;
  transform: translate(-50%, -50%);
}
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
	margin-top:331px;
}
input:focus { color:#FFFFFF;}
::placeholder {
    color: white;
	font-size:16px;
	position:absolute;
	font-family: 'Poppins-Regular';
    opacity: 0.6; /* Firefox */
}
@font-face { font-family: Poppins-Regular; src: url('Poppins-Regular.otf'); } 
    .poppins { font-family: Poppins-Regular; font-size: 4.2em; }
.button {
  background-color: #282828; 
  border: none;
  color: #282828;
  width:10%;
  height:5%;
  margin-top:331px;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: green; 
  color: white;
  width:2%;
}

.button1:hover {
  background-color:yellow;
  color: white;
}
.button2 {
  background-color: #ff3f14; 
  color: white;
  width:2%;
}

.button2:hover {
  background-color:blue;
  color: white;
}
.button3 {
  background-color:#282828; 
  color: white;
}

.button3:hover {
  background-color:green;
  color: white;
}
.button4 {
  background-color: #282828; 
  color: white;
}

.button4:hover {
  background-color:red;
  color: white;
}
.button5 {
  background-color: #282828; 
  color: white;
  width:15%;
}

.button5:hover {
  background-color:red;
  color: white;
}

</style>


<?php 
$playlist_id = $_GET['playlist_id'];
$sql = pg_query("SELECT song_name,artist_name,song_file,artist_id,album_id,date_added,song_id,date_added
	FROM song,artist,playlist_features_song,playlist,userg,album,artist_releases_albums
	WHERE song.song_id = playlist_features_song.E_song_id2 and playlist.playlist_id = playlist_features_song.E_playlist_id2 and song.album_idfk = album.album_id and artist_releases_albums.E_album_id6 = album.album_id and E_artist_id6 = artist_id and email_id = '$_SESSION[email_id]' and userg.email_id = playlist.email_idfk and playlist_id = '$playlist_id'
	ORDER BY (date_added) ASC");
$i = 1;

$name = pg_query("SELECT playlist_name,date_created,rating,favourite_boolean from playlist where playlist_id = '$playlist_id'");
$row2  = pg_fetch_array($name);
	?>
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

</section>
<button type = "button" class= "button button2"  style="position:absolute;top:-20px;left:285px;">&uarr;</button>
<div class = "bg-centred" style = "top:325px;left:328px;font-size:35px; "><b><font face="Poppins-Regular" color= "#ff3f14">&#8605;</font></b></div> 
<div class = "bg-centred" style = "top:325px;left:428px;font-size:25px; "><b><font face="Poppins-Regular" color= "white">Go to album</font></b></div> 
<button type = "button" class= "button button1"  style="position:absolute;top:-20px;left:565px;">&uarr;</button>
<div class = "bg-centred" style = "top:325px;left:608px;font-size:35px; "><b><font face="Poppins-Regular" color= "green">&#8605;</font></b></div> 
<div class = "bg-centred" style = "top:325px;left:698px;font-size:25px; "><b><font face="Poppins-Regular" color= "white">Go to artist</font></b></div> 

<img src = "playlistimage.jpg" STYLE="position:absolute; TOP:40px; LEFT:285px; WIDTH:250px; HEIGHT:250px;border-radius:5%;"></a>
<div class = "bg-centred" style = "top:120px;left:412px;font-size:25px; "><b><font face="Poppins-Regular" color= "white">PLAYLIST</font></b></div> 
<div class = "bg-centred" style = "top:200px;left:412px;font-size:25px; "><b><font face="Poppins-Regular" color= "white"><?php echo $row2[0] ; ?></font></b></div> 
<div class = "bg-centred" style = "top:80px;left:700px;font-size:20px; "><b><font face="Poppins-Regular" color= "white">Date Created : <?php echo $row2[1] ; ?></font></b></div> 
<div class = "bg-centred" style = "top:120px;left:638px;font-size:20px; "><b><font face="Poppins-Regular" color= "white">Your Rating : <?php echo $row2[2] ; ?></font></b></div> 
<?php 
if($row2[3] == 1){
?>	<div class = "bg-centred" style = "top:160px;left:630px;font-size:20px; "><b><font face="Poppins-Regular" color= "white">Favourite :  <span style="color:green"> &#x2764 </span></font></b></div> 
<?php
}
else{
	?>	<div class = "bg-centred" style = "top:160px;left:630px;font-size:20px; "><b><font face="Poppins-Regular" color= "white">Favourite :  <span style="color:red">  	&#x1F494;  </span></font></b></div> 
<?php } ?>
<audio src="" controls autoplay id="audioPlayer">
        Sorry, your browser doesn't support html5!
</audio>
<div id="playlist">
		<?php while($row = pg_fetch_array($sql)){?>
					<form action="<?php echo "delete_playlist.php?song_id=".$row[6]."&playlist_id=".$playlist_id."&date_added=".$row[7] ?>" method="post" >
					<div><a href="<?php echo $row[2];?>"><?php echo $i.str_repeat('&nbsp;', 5).$row[0].' - '.$row[1];?></a></div>
					<a class= "button button2" title="Go To Album" href = "<?php echo "albums.php?album_id=".$row[4]."&artist_id=".$row[3] ?>"><button type = "submit" class= "button button2"  style="position:absolute;left:1200px;">&uarr;</button></a>
					<button class= "button button5" type="submit"  style="position:absolute;left:950px;">Delete From Playlist</button>
					<?php $string = preg_replace('/\s+/', '', $row[1]); ?>
					<a class= "button button1" href = "<?php echo $string.'.php' ?>"><button title="Go To Artist" type = "submit" class= "button button1"  style="position:absolute;left:1300px;">&uarr;</button></a>
					</form>
					<?php
					$i = $i +1;
		}?>

		
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="audioPlayer.js"></script>
<script>
        // loads the audio player
        audioPlayer();
    </script>
<form method="post" action="<?php echo "change_rating.php?playlist_id=".$playlist_id ; ?>">
	<input name="rating" style="position:absolute;top:-130px;left:1020px;width:150px;" type="text" placeholder="Change Rating"></input>
	<button class = "button button3" style="position:absolute;top:-130px;left:1200px;" type = "submit" >SUBMIT</button>
</form>

  <?php 
$email_id = $_SESSION['email_id'];
$query2 = pg_query("SELECT favourite_boolean FROM playlist WHERE email_idfk='$email_id' AND playlist_id='$playlist_id'"); 	
$uranium = pg_fetch_array($query2);
if($uranium[0] == '0') {?> 
	<form method="post" action="<?php echo "fav.php?playlist_id=".$playlist_id ; ?>">
	<button class = "button button3" style="position:absolute;top:-130px;left:565px;" type = "submit" name = "email_id" >LIKE </button>
	</form>
<?php  }
else{?>
<form method="post" action="<?php echo "fav2.php?playlist_id=".$playlist_id ; ?>">
	<button class = "button button4" style="position:absolute;top:-130px;left:565px;" type = "submit" name = "email_id" >DISLIKE</button>
	</form>
<?php } ?>
</body>
</html>