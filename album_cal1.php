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
	  	overflow-x: hidden; 
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
	
    filter: sepia(20%) saturate(70%) grayscale(1) contrast(99%) invert(12%);
    width: 1090px;
    height: 300px;
	position:absolute;
	top :350px;
	left:274px;
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
			left:570px;
			top:50px;
			margin-left:10px;
			font-size:22px;
        }
	#playlist1 div{
            color:white;
			height:500%;
			width:80%;
            text-decoration: none;	
			padding:20px;
			position:relative;
			left:1280px;
			top:-475px;
			margin-left:10px;
			margin-top:8px;
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

		</style>
		<body>
 <section id="ABC">
  
  
  <div class = "bg-centred" style = "position:absolute;top:60px;left:145px;font-size:30px;"><font color= "#FFFFFF" face="Poppins-Regular">MusePlay </font></div>
	 <div class = "bg-centred" style = "position:absolute;top:55px;left:220px;font-size:10px;"><font color= "#FFFFFF" face="Poppins-Regular">&copy </font></div>
	<img id = "theImage" style="position:absolute; top:37px; left:30px;width:40px;height:47px" SRC="Msymbol.gif"> 
	<div class = "bg-centred" style = "top:150px;left:100px;font-size:25px; "><a href ="home.php"><pre><font face="Poppins-Regular">&#9738;    Home</font></pre></a></div> 
	<div class = "bg-centred" style = "top:200px;left:108px;font-size:25px; "><a href ="search.php"><pre><font face="Poppins-Regular">&#9906;    Search</font></pre></a></div> 
		<div class = "bg-centred" style = "top:250px;left:145px;font-size:25px; "><a href ="k.php"><pre><font face="Poppins-Regular">|||   Your Playlists</font></pre></a></div> 
				<div class = "bg-centred" style = "top:600px;left:60px;font-size:25px; "><font face="Poppins-Regular">&#127795;	
</font></div>
		<div style = "position:absolute;top:578px;left:90px;color:black;font-size:29px;"><font color= "#FFFFFF";><?php print($_SESSION["fname"]); ?></font></div>

</section>
<?php
$query = "SELECT album_name,album_image
	FROM album,artist,artist_releases_albums
	WHERE E_album_id6  = album_id and E_artist_id6 = artist_id and artist_id = 'cal1' and album_id = 'album_cal1';";

$query2 = "SELECT song_name,song_file,duration
		FROM song,album,artist_releases_albums
		where album_id = 'album_cal1' and song.album_idfk = album.album_id and E_album_id6  = album_id;";
$result = pg_query($query);
$row = pg_fetch_array($result);
$result2 = pg_query($query2);
$result3 = pg_query($query2);

?>
<body>
<?php echo "<div style='position:absolute;top:320px;left:355px;font-size:30px;text-align:center;'><font face = 'Poppins-Regular' color='#FFFFFF';> &nbsp;&nbsp;".$row[0]."</font></div>";?>
<img src = "<?php echo $row[1];?>" STYLE="position:absolute; TOP:50px; LEFT:325px; WIDTH:250px; HEIGHT:250px;border-radius:5%;"></a>

<audio src="" controls autoplay id="audioPlayer">
        Sorry, your browser doesn't support html5!
</audio>
<div id="playlist">
        <?php while($row2 = pg_fetch_array($result2)){?>
			        <div><a href="<?php echo $row2[1];?>"><?php echo $row2[0];?></a></div><?php
		}?>
        

</div>
<div id="playlist1">
        	<?php while($row3 = pg_fetch_array($result3)){?>
			<div><?php echo $row3[2];?></div>
<?php
		}?>
		
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="audioPlayer.js"></script>
<script>
        // loads the audio player
        audioPlayer();
    </script>
</body>
</html>