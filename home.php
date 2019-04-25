<?php include('server.php');
?>

<!DOCTYPE html>
<html>
  <head>
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

    </style>

  </head>

  <body>


<section id="ABC">

	<a href="jk.php"><img style="position:absolute; top:90px; left:365px;width:200px;height:200px;border-radius : 50%;" SRC="artist.jpg"></a> 
	<a href="charts.php"><img style="position:absolute; top:90px; left:650px;width:200px;height:200px;border-radius : 50%;" SRC="top50.jpg"></a> 
	<a href="discover.php"><img style="position:absolute; top:90px; left:940px;width:200px;height:200px;border-radius : 50%;" SRC="phoebe.jpg"></a> 
	<a href="popular.php"><img style="position:absolute; top:380px; left:365px;width:200px;height:200px;border-radius : 50%;" SRC="avicii.jpg"></a> 
	<div class = "bg-centred" style = "position:absolute;top:60px;left:145px;font-size:30px;"><font color= "#FFFFFF";> <font face="Poppins-Regular">MusePlay</div>
	<div class = "bg-centred" style = "position:absolute;top:55px;left:220px;font-size:10px;"><font color= "#FFFFFF";> <font face="Poppins-Regular">&copy </div>
	<img id = "theImage" style="position:absolute; top:37px; left:30px;width:40px;height:47px" SRC="Msymbol.gif"> 
	<div class = "bg-centred" style = "top:150px;left:100px;font-size:25px; "><a href ="home.php"><pre><font face="Poppins-Regular">&#9738;    Home</font></pre></a></div> 
	<div class = "bg-centred" style = "top:200px;left:108px;font-size:25px; "><a href ="presearch.php"><pre><font face="Poppins-Regular">&#9906;    Search</font></pre></a></div> 
	<div class = "bg-centred" style = "top:250px;left:145px;font-size:25px; "><a href ="playlist.php"><pre><font face="Poppins-Regular">|||   Your Playlists</font></pre></a></div> 
	<div class = "bg-centred" style = "top:578px;left:60px;font-size:25px; "><font face="Poppins-Regular">&#127795;	</font></div> 
	<div style = "position:absolute;top:558px;left:90px;color:black;font-size:29px;"><font color= "#FFFFFF";><?php print($_SESSION["display_name"]); ?></font></div>
	<div class = "bg-centred" style = "top:60px;left:465px;font-size:20px; "><font face="Poppins-Regular">ARTISTS</font></div> 
	<div class = "bg-centred" style = "top:350px;left:485px;font-size:20px;width:200px; "><font face="Poppins-Regular">POPULAR ARTISTS</font></div> 
	<div class = "bg-centred" style = "top:60px;left:750px;font-size:20px; "><font face="Poppins-Regular">CHARTS</font></div> 
	<div class = "bg-centred" style = "top:60px;left:1035px;font-size:20px; "><font face="Poppins-Regular">DISCOVER</font></div> 	
	<div class = "bg-centred" style = "top:620px;left:95px;font-size:25px; "><a href="home.php?logout='1'">Logout</a></div>
		
</section>

