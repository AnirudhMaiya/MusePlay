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
#playlist div {
 display:block; 
}
@font-face { font-family: Poppins-Regular; src: url('Poppins-Regular.otf'); } 
    .poppins { font-family: Poppins-Regular; font-size: 4.2em; }
 .button {
  background-color: #282828; 
  border: none;
  color: #282828;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  position:absolute;
  top:62%;
  right:37.5%;
  height:8%;
  width:20%;
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

table{
    margin:240px 0 0 300px;
	table-layout: fixed;
}
td{
text-align:center;
 font-size: 175%;}


.table1 {
  margin:120px 0 0 570px;
	width:750px;
	table-layout: fixed;
	font-size: 100%;
}
.td1{
text-align:left;
border:dotted;
 }
 .button2 {
  background-color: #282828; 
  color: white;
}

.button2:hover {
  background-color:red;
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
	<div style = "position:absolute;top:578px;left:90px;color:black;font-size:29px;"><font color= "#FFFFFF";><?php print($_SESSION["display_name"]); ?></font></div>
</section>
<?php
$query = "SELECT artist_name,artist_image,artist_country,album_name
	FROM artist,album,artist_releases_albums
	WHERE E_album_id6  = album_id and E_artist_id6 = artist_id and artist_id = 'jmayer1';";
	
$query2 = "SELECT artist_name,COUNT(artist_name) as Most_Followed
	FROM userg,artist,user_follows_artist
	WHERE userg.email_id = user_follows_artist.E_mail_id5 and artist.artist_id = user_follows_artist.E_artist_id5 and artist_id= 'jmayer1'
	GROUP BY (artist_name);";

$query3 = "SELECT artist_name,style
	FROM artist,artist_style 
	WHERE artist.artist_id = artist_style.artist_id7 and artist_id = 'jmayer1';";

$query4 ="SELECT artist_name,COUNT(album_name)
	FROM artist,album,artist_releases_albums
	WHERE E_album_id6  = album_id and E_artist_id6 = artist_id and artist_id = 'jmayer1'
	GROUP BY (artist_name);";	

$counter = 0;
$query5 = "SELECT album_name,album_image,album_id
	FROM album,artist,artist_releases_albums
	WHERE E_album_id6  = album_id and E_artist_id6 = artist_id and artist_id = 'jmayer1';";

$result = pg_query($query);
$row = pg_fetch_array($result);
$_SESSION['artist_id'] = 'jmayer1';
echo "<div style='position:absolute;top:10px;left:300px;font-size:75px;'><font color= '#FFFFFF';>".$row[0]."</font></div>";?>
<img src = "<?php echo $row[1];?>" STYLE="position:absolute; TOP:120px; LEFT:300px; WIDTH:250px; HEIGHT:250px;border-radius:50%;"></a>

<?php
$result2 = pg_query($query2);
$row2 = pg_fetch_array($result2);
$result3 = pg_query($query3);
$row3 = pg_fetch_array($result3);
$row5 = pg_fetch_array($result3);
$row6 = pg_fetch_array($result3);
$result4 = pg_query($query4);
$row4 = pg_fetch_array($result4);
?>
<table class = "table1">
<tr>
    <td class = "td1" style = "padding :10px" width="40%">Number of followers</td>
	<td class = "td1" style = "padding :10px"><?php echo $row2[1] ;?></td>
  </tr>
    <td class = "td1" style = "padding :10px" width="40%">Number of Albums</td>
	<td class = "td1" style = "padding :10px"><?php echo $row4[1] ;?></td>
 <tr>
    <td class = "td1" style = "padding :5px" width="40%">Genre</td>
	<td class = "td1" style = "padding :5px" width="40%"><?php echo $row3[1].','.$row5[1].','.$row6[1] ;?></td>


  </tr>
  <tr>
  
  </tr>
</table>






<div style = "position:absolute;top:520px;left:300px;font-size:65px;"><font color= '#FFFFFF';>Albums</font></div>



<table >
<?php 
$email_id = $_SESSION['email_id'];

  $count = 0;
  $result5 = pg_query($query5);
  while($row5 = pg_fetch_row($result5)) {
	  $xyz = preg_replace('/\s+/', '', $row5[2]);
	  if ($count % 3 == 0){
	  echo '<tr>';}?>
	  
    <td style = "padding :50px;width:100px;"><a href = "<?php echo "albums.php?album_id=".$xyz."&artist_id="."jmayer1" ; ?>"><img src="<?php echo $row5[1];?>" STYLE="WIDTH:250px; HEIGHT:250px;border-radius:10%;"/></a><?php echo $row5[0];?> </td>
	    <?php if ($count % 3 == 2){
		echo '</tr>';
		}
    $count++;
  }?>
  
  </table>
  <?php 
$email_id = $_SESSION['email_id'];
$query2 = pg_query("SELECT E_artist_id5	FROM user_follows_artist WHERE E_mail_id5 = '$email_id' AND E_artist_id5 ='jmayer1'"); 	
if(pg_num_rows($query2)==0) {?> 
	<form method="post" action="pen1cal.php">
	<button class = "button button1" type = "submit" name = "email_id" >+ FOLLOW</button>
	</form>
<?php  }

else{?>
<form method="post" action="pen2cal.php">
	<button class = "button button2 "type = "submit" name = "email_id" >UNFOLLOW</button>
	</form>
<?php } ?>
	<div class = "bg-centred" style = "width:240px;top:420px;left:420px;font-size:25px;"><a href = "<?php echo "bio.php?album_id=album_jmayer1"."&artist_id=jmayer1" ; ?>"><font face="Poppins-Regular">Jump to Artist's Bio</font></a></div> 

</body>
</html>
 </body>
 </html>