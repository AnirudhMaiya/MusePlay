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

	table{
    margin:50px 0 0 590px;
	width:750px;
	table-layout: fixed;
	font-size: 175%;
}
td{
text-align:left;
border:dotted;
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
	<div style = "position:absolute;top:578px;left:90px;color:black;font-size:29px;"><font color= "#FFFFFF";><?php print($_SESSION["display_name"]); ?></font></div>
</section>

 <?php
$album_id = $_GET['album_id'];
$artist_id = $_GET['artist_id'];
$query = "SELECT artist_name,artist_image,artist_country,album_name,album_image,year_of_release,genre,label,style
	FROM artist,album,artist_releases_albums,artist_style
	WHERE album_id = '$album_id' and E_album_id6  = '$album_id' and E_artist_id6 = '$artist_id' and artist_id = '$artist_id' and artist_id7= '$artist_id'";
$result = pg_query($query);
$row = pg_fetch_array($result);	
$query2 = "SELECT artist_name,COUNT(song_name)
	FROM song,album,artist,artist_releases_albums
	WHERE album_idfk = album_id and E_artist_id6 = '$artist_id' and E_album_id6  = album_id and artist_id = '$artist_id'
	GROUP BY (artist_name)
	ORDER BY COUNT(*) DESC";
$result2 = pg_query($query2);
$row2 = pg_fetch_array($result2);

$query3 = "SELECT COUNT(album_name)
	FROM artist,album,artist_releases_albums
	WHERE  E_artist_id6 ='$artist_id' and  artist_id='$artist_id' and E_album_id6 = album_id ";
$result3 = pg_query($query3);
$row3 = pg_fetch_array($result3);

$result5 = pg_query($query);
$row5 = pg_fetch_array($result5);
$row6 = pg_fetch_array($result5);

?>
<img src = "<?php echo $row[1];?>" STYLE="position:absolute; TOP:50px; LEFT:290px; WIDTH:280px; HEIGHT:280px;border-radius:10%;"></a>
<table>
<tr>
    <td style = "padding :10px" width="30%">Artist</td>
	<td style = "padding :10px"><?php echo $row[0] ;?></td>
  </tr>
  <tr>
    <td style = "padding :10px">Country</td>
	<td style = "padding :10px"><?php echo $row[2] ;?></td>
  </tr>
  <tr>
	    <td style = "padding :10px">Genre</td>
	<td style = "padding :10px"><?php echo $row[6] ;?></td>
  </tr>
  <td style = "padding :10px">Label</td>	
	<td style = "padding :10px"><?php echo $row[7] ;?></td>
  </tr>
  <td style = "padding :10px">Songs</td>	
	<td style = "padding :10px"><?php echo $row2[1] ;?></td>
  </tr>
  <td style = "padding :10px">Albums</td>	
	<td style = "padding :10px"><?php echo $row3[0] ;?></td>
  </tr>
</table>
</body>
 </html>
 
 