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
  <div class = "bg-centred" style = "position:absolute;top:60px;left:145px;font-size:30px;"><font color= "#FFFFFF";> <font face="Poppins-Regular">MusePlay</div>
	 <div class = "bg-centred" style = "position:absolute;top:55px;left:220px;font-size:10px;"><font color= "#FFFFFF";> <font face="Poppins-Regular">&copy</div>
	<img id = "theImage" style="position:absolute; top:37px; left:30px;width:40px;height:47px" SRC="Msymbol.gif"> 
	<div class = "bg-centred" style = "top:150px;left:100px;font-size:25px; "><a href ="k.php"><pre><font face="Poppins-Regular">&#9738;    Home</font></pre></a></div> 
	<div class = "bg-centred" style = "top:200px;left:108px;font-size:25px; "><a href ="search.php"><pre><font face="Poppins-Regular">&#9906;    Search</font></pre></a></div> 
	<div class = "bg-centred" style = "top:250px;left:145px;font-size:25px; "><a href ="k.php"><pre><font face="Poppins-Regular">|||   Your Playlists</font></pre></a></div> 
	<div class = "bg-centred" style = "top:600px;left:60px;font-size:25px; "><font face="Poppins-Regular">&#127795;	</font></div>
	<div style = "position:absolute;top:578px;left:90px;color:black;font-size:29px;"><font color= "#FFFFFF";><?php print($_SESSION["fname"]); ?></font></div>
</section>
<div class = "bg-centred" style = "top:60px;left:365px;font-size:40px; "><font face="Poppins-Regular">ARTISTS</font></div> 
<?php include('john1.php');?>
</body>