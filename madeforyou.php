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
@font-face { font-family: Poppins-Regular; src: url('Poppins-Regular.otf'); } 
    .poppins { font-family: Poppins-Regular; font-size: 4.2em; }
	
#playlist1 div{
            color:white;
			height:500%;
			width:80%;
            text-decoration: none;	
			padding:8px;
			position:relative;
			left:520px;
			top:-2130px;
			margin-left:10px;
			font-size:20px;
}
#playlist1 div {
 display:block; 
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
.button {
  background-color: #282828; 
  border: none;
  color: #282828;
  width:10%;
  height:5%;
  margin-top:331px;
  font-size: 16px;
  -webkit-transition-duration: 0.4s; /* Safari */
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
  background-color: #282828; 
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
</style>


<?php 
$query = pg_query("drop  table IF EXISTS top_ten");
$query2 = pg_query("SELECT genre,COUNT(genre) INTO top_ten
	FROM song,artist,playlist_features_song,playlist,userg,album,artist_releases_albums
	WHERE song.song_id = playlist_features_song.E_song_id2 and playlist.playlist_id = playlist_features_song.E_playlist_id2 and song.album_idfk = album.album_id and artist_releases_albums.E_album_id6 = album.album_id and E_artist_id6 = artist_id and email_id = '$_SESSION[email_id]' and userg.email_id = playlist.email_idfk
	group by (genre)
	ORDER BY COUNT(*) DESC
	LIMIT 5");
$query3 = pg_query("SELECT * FROM top_ten");
$po= pg_num_rows($query3);
$query4 = pg_query("SELECT * FROM top_ten");
$row4 = pg_fetch_array($query4);
$query = pg_query("drop  table IF EXISTS pop");
$query5 = pg_query("SELECT song_name,artist_name,song_id,album_id,genre,song_file,artist_id INTO pop
	FROM song,artist,album,artist_releases_albums
	where song.album_idfk = album.album_id and E_artist_id6 = artist_id and E_album_id6  = album_id and album.genre = '$row4[0]'
    EXCEPT
    SELECT song_name,artist_name,song_id,album_id,genre,song_file,artist_id
	FROM song,artist,playlist_features_song,playlist,userg,album,artist_releases_albums
	WHERE userg.email_id = '$_SESSION[email_id]' and song.song_id = playlist_features_song.E_song_id2 and playlist.playlist_id = playlist_features_song.E_playlist_id2 and song.album_idfk = album.album_id and artist_releases_albums.E_album_id6 = album.album_id and E_artist_id6 = artist_id and userg.email_id = playlist.email_idfk and album.genre = '$row4[0]'
	order by (artist_name)");
$query5 = pg_query("delete from pop");
$i = 0;
$query6 = pg_query("SELECT * FROM top_ten");

$query = pg_query("drop  table IF EXISTS pop0");
$query = pg_query("drop  table IF EXISTS pop1");
$query = pg_query("drop  table IF EXISTS pop2");
$query = pg_query("drop  table IF EXISTS pop3");
$query = pg_query("drop  table IF EXISTS pop4");
while($row6 = pg_fetch_array($query6)) {
	$string = 'pop'.$i;
	pg_query("SELECT song_name,artist_name,song_id,album_id,genre,song_file,artist_id INTO $string
	FROM song,artist,album,artist_releases_albums
	where song.album_idfk = album.album_id and E_artist_id6 = artist_id and E_album_id6  = album_id and album.genre = '$row6[0]'
    EXCEPT
    SELECT song_name,artist_name,song_id,album_id,genre,song_file,artist_id
	FROM song,artist,playlist_features_song,playlist,userg,album,artist_releases_albums
	WHERE userg.email_id = '$_SESSION[email_id]' and song.song_id = playlist_features_song.E_song_id2 and playlist.playlist_id = playlist_features_song.E_playlist_id2 and song.album_idfk = album.album_id and artist_releases_albums.E_album_id6 = album.album_id and E_artist_id6 = artist_id and userg.email_id = playlist.email_idfk and album.genre = '$row6[0]'
	order by (artist_name)");
	$i = $i+1;
	pg_query("INSERT INTO pop
			SELECT * FROM $string ");
}
$query = pg_query("drop  table IF EXISTS pop0");
$query = pg_query("drop  table IF EXISTS pop1");
$query = pg_query("drop  table IF EXISTS pop2");
$query = pg_query("drop  table IF EXISTS pop3");
$query = pg_query("drop  table IF EXISTS pop4"); 
?>

<?php 
$sql = pg_query("SELECT * from pop 
ORDER BY RANDOM()
LIMIT 30");
$i = 1;
?>
<button type = "button" class= "button button2"  style="position:absolute;top:0px;left:285px;">&uarr;</button>
<div class = "bg-centred" style = "top:345px;left:328px;font-size:35px; "><b><font face="Poppins-Regular" color= "#ff3f14">&#8605;</font></b></div> 
<div class = "bg-centred" style = "top:345px;left:428px;font-size:25px; "><b><font face="Poppins-Regular" color= "white">Go to album</font></b></div> 
<button type = "button" class= "button button1"  style="position:absolute;top:0px;left:565px;">&uarr;</button>
<div class = "bg-centred" style = "top:345px;left:608px;font-size:35px; "><b><font face="Poppins-Regular" color= "green">&#8605;</font></b></div> 
<div class = "bg-centred" style = "top:345px;left:698px;font-size:25px; "><b><font face="Poppins-Regular" color= "white">Go to artist</font></b></div> 

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

<audio src="" controls autoplay id="audioPlayer">
        Sorry, your browser doesn't support html5!
</audio>
<div id="playlist">
		<?php while($row = pg_fetch_array($sql)){?>
					<div><a href="<?php echo $row[5];?>"><?php echo $i.str_repeat('&nbsp;', 5).$row[0].' - '.$row[1];?></a></div>
					<a class= "button button2" title="Go To Album" href = "<?php echo "albums.php?album_id=".$row[3]."&artist_id=".$row[6] ?>"><button type = "submit" class= "button button2"  style="position:absolute;left:1200px;">&uarr;</button></a>
					<?php $string = preg_replace('/\s+/', '', $row[1]); ?>
					<a class= "button button1" href = "<?php echo $string.'.php' ?>"><button title="Go To Artist" type = "submit" class= "button button1"  style="position:absolute;left:1300px;">&uarr;</button></a>
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


	<body>

<img src = "recommend.jpg" STYLE="position:absolute; TOP:60px; LEFT:295px; WIDTH:200px; HEIGHT:200px;border-radius:5%;">
<div class = "bg-centred" style = "top:70px;left:642px;font-size:25px; "><b><font face="Poppins-Regular" color= "white">Because you like</font></b></div> 


<div id="playlist1">
<?php
while($result = pg_fetch_array($query3)){?>
	<div><font face="Poppins-Regular"><?php echo $result[0] ;?></font></div>
<?php 
}
?>

</div>
</body>
</html>