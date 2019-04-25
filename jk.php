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


table{
    margin:45px 0 0 300px;
	table-layout: fixed;
}
td{
text-align:center;
 font-size: 175%;}



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
$counter = 0;
//$query5 = "SELECT album_name,album_image
	//FROM album,artist,artist_releases_albums
	//WHERE E_album_id6  = album_id and E_artist_id6 = artist_id and artist_id = 'cla1';";
$query5 = "select * from artist";
$result5 = pg_query($query5);
?>
<div class = "bg-centred" style = "top:60px;left:365px;font-size:40px; "><font face="Poppins-Regular">ARTISTS</font></div> 

<table >
<?php 
  $count = 0;
  while($row5 = pg_fetch_row($result5)) {
	  $xyz = preg_replace('/\s+/', '', $row5[1]);
	  if ($count % 3 == 0){
	  echo '<tr>';}?>
	  
    <td style = "padding :60px;"><a href = "<?php echo $xyz.'.php' ?>"><img src="<?php echo $row5[2];?>" STYLE="WIDTH:210px; HEIGHT:210px;border-radius:50%;"/></a><?php echo $row5[1];?> </td>
	    <?php if ($count % 3 == 2){
		echo '</tr>';
		}
    $count++;
  }?>
  
  </table>
 </body>
 </html>