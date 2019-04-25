<?php include('server.php');
?>
<!DOCTYPE html>
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
	 .button {
  background-color: #282828; 
  border: none;
  color: #282828;
  padding: 10px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  position:absolute;
  top:6%;
  right:0.2%;
  height:auto;
  width:75%;
  font-size: 16px;
  margin: 4px 2px;
  font-family = "Poppins-Regular";
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
.button2 {
  background-color: #282828; 
  color: white;
  top:25%;
  right:0.2%;
}

.button2:hover {
  background-color:green;
  color: white;
}
	
</style>

  <head>
</head>
<body>
<section id="ABC">
  <div class = "bg-centred" style = "position:absolute;top:60px;left:145px;font-size:30px;"><font color= "#FFFFFF";> <font face="Poppins-Regular">MusePlay</div>
	 <div class = "bg-centred" style = "position:absolute;top:55px;left:220px;font-size:10px;"><font color= "#FFFFFF";> <font face="Poppins-Regular">&copy</div>
	<img id = "theImage" style="position:absolute; top:37px; left:30px;width:40px;height:47px" SRC="Msymbol.gif"> 
	<div class = "bg-centred" style = "top:150px;left:100px;font-size:25px; "><a href ="home.php"><pre><font face="Poppins-Regular">&#9738;    Home</font></pre></a></div> 
	<div class = "bg-centred" style = "top:200px;left:108px;font-size:25px; "><a href ="presearch.php"><pre><font face="Poppins-Regular">&#9906;    Search</font></pre></a></div> 
	<div class = "bg-centred" style = "top:250px;left:145px;font-size:25px; "><a href ="playlist.php"><pre><font face="Poppins-Regular">|||   Your Playlists</font></pre></a></div> 
	<div class = "bg-centred" style = "top:600px;left:60px;font-size:25px; "><font face="Poppins-Regular">&#127795;	</font></div>
		<div style = "position:absolute;top:578px;left:90px;font-size:29px;"><font color= "#FFFFFF" face="Poppins-Regular" ;><?php print($_SESSION["display_name"]); ?></font></div>
</section>

<?php 
$query = "SELECT * FROM userg WHERE email_id = '$_SESSION[email_id]'";
$result = pg_query($query);
$row = pg_fetch_array($result);
?> 
<a class = "button button1" href = "toplocal.php"><font face="Poppins-Regular" size = "25px">Top 20 Local <?php echo "(". $row[4].")"; ?></font></a>
<a class = "button button2" href = "topglobal.php"><font face="Poppins-Regular" size = "25px">Top 20 Global</font></a>
