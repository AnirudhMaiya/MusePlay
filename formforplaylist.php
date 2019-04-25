<?php include('server.php');
?>

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

input{
	position:absolute;
	width:100%;
	height:5%;
	top:25%;
	left:20%;
    padding: 21px 20px;
    margin: 8px 0;
	font-size:25px;
	font-family :'Poppins-Regular';
	background: transparent;
    border: none;
	background-color: #282828;
}
input:focus { color:#FFFFFF;}
::placeholder {
    color:#FFFFFF;
	font-size:45px;
	position:absolute;
	font-family: 'Poppins-Regular';
    opacity: 0.6; /* Firefox */
}


input.topnav {
        border: none;
        font-size: 16px;
		position:absolute;
		width:100%;
		height:5%;
		top:12%;
		right:50%;
		padding: 21px 20px;
		font-family :'Poppins-Regular';
		margin: 8px 0;
		font-size:45px;
		background: transparent;
		border: none;
		background-color: #282828;
}
input.topnav1 {
		position:absolute;
		width:100%;
		height:5%;
		top:67%;
		left:-28%;
}
input.topnav4 {
		position:absolute;
		width:100%;
		height:5%;
		top:67%;
		left:-20%;
}
input.topnav2 {
        border: none;
        font-size: 16px;
		position:absolute;
		width:100%;
		height:5%;
		top:28%;
		left:20%;
		padding: 21px 20px;
		font-size:25px;
		font-family :'Poppins-Regular';
		margin: 8px 0;
		background: transparent;
		border: none;
		background-color: #282828;
		color:white;
		opacity: 0.6; 
}
input.topnav3 {
        border: none;
        font-size: 16px;
		position:absolute;
		width:100%;
		height:5%;
		top:44%;
		left:20%;
		padding: 21px 20px;
		font-family :'Poppins-Regular';
		margin: 10px 0;
		font-size:45px;
		background: transparent;
		border: none;
		background-color: #282828;
}
.button {
  background-color: #282828; 
  border: none;
  color: #282828;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position:absolute;
  top:13%;
  right:0%;
  height:8%;
  width:25%;
  font-size: 16px;
  margin: 4px 2px;
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
.button4 {position:absolute;
  top:75%;
  left:50%;
  width:25%;
  
  color:white;}
.button4:hover {
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
		<div style = "position:absolute;top:578px;left:90px;color:black;font-size:29px;"><font color= "#FFFFFF";><?php print($_SESSION["display_name"]); ?></font></div>

</section>
<p style="position:absolute;top:-50px;left:280px;color:white;font-size:55px;"><font color= "#FFFFFF" face = "Poppins-Regular";>Songs</font></p>
  <form action = "CreatePlaylist.php" method = "post">
  <input class="topnav" type="text" name = 'playlist_name' placeholder="Name of the playlist..." autocomplete = "off"></input>
   <input class="topnav3" type="number" name = 'rating' placeholder="Rating(1-10)" autocomplete = "off"></input>
   <div style = "position:absolute;width:500px;height:100px;left:295px;top:400px;font-size:25px;"><font color= "#FFFFFF" face = "Poppins-Regular";>Favourite Playlist?</font></div>
    <input class = "topnav1" type="radio" name="favourite_Boolean" value=1 />
  	<input class = "topnav4" type="radio" name="favourite_Boolean" value=0 />
      <div style = "position:absolute;width:500px;height:100px;left:315px;top:445px;font-size:22px;"><font color= "#FFFFFF" face = "Poppins-Regular";>YES</font></div>
      <div style = "position:absolute;width:500px;height:100px;left:425px;top:445px;font-size:22px;"><font color= "#FFFFFF" face = "Poppins-Regular";>NO</font></div>
		<button class = "button button4" name = "CreatePlaylist" type="submit";><span>Create Playlist</span></button>
  </form>

</body>
</html>