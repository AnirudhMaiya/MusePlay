<!DOCTYPE HTML>
<html>
<style>

img:hover {
    webkit-filter: blur(2px); 
    filter: blur(1px);
}
body{
		margin: 0;
	  	overflow-x: hidden; 
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

#playlist{
        }
#playlist div{
            color:white;
			height:10%;
			width:80%;
            text-decoration: none;	
			padding:20px;
			position:relative;
			left:275px;
			top:100px;
			font-size:35px;
        }
#playlist div a{
            color:white;
			font-family:'Poppins-Regular';
            text-decoration: none;	
			width:40%	
        }
		#playlist div:hover, div:focus {
 background-color:green;);
}
#playlist div {
 display:block; 
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
.button {
  background-color: #282828; 
  border: none;
  color: #282828;
  width:10%;
  height:5%;
  margin-top:35px;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #282828; 
  color: white;
  width:15%;
}

.button1:hover {
  background-color:red;
  color: white;
}



		</style>
<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
include('server.php');
$xyz = $_SESSION["email_id"];
$query = pg_query("SELECT * from playlist where email_idfk = '$xyz'");
$count = pg_num_rows($query);
if($count == 0){
			$output = "You don't have any playlists yet";
			?><div style = "position:absolute;top:200px;left:300px;font-size:25px;"><font face="Poppins-Regular" color = "white">You don't have any playists yet!</font></div>
<?php }
else{?>

<div id="playlist">
		<?php while($row = pg_fetch_array($query)){?>
					<form action="<?php echo "delete_complete_playlist.php?playlist_id=".$_SESSION['display_name'].$row[3] ?>" method="post" >
					<div><a href="<?php echo "displayplaylist.php?playlist_id=".$_SESSION['display_name'].$row[3] ?>"><?php echo $row[3];?></a></div>
					<button class= "button button1" type="submit"  style="position:absolute;left:950px;">Delete Playlist</button>
					</form>
					<?php
		}
}?>
</div>

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
		<div style = "position:absolute;top:578px;left:90px;color:black;font-size:29px;"><font color= "#FFFFFF";><?php print($_SESSION["display_name"]); ?></font></div>

</section>
		<div class = "bg-centred" style = "top:50px;left:395px;font-size:55px; "><pre><font face="Poppins-Regular" color="white">Playlists</font></div> 

		</body>
</html>
