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
table{
	font-family : Poppins-Regular;
    margin:320px 0 0 300px;
	table-layout: fixed;
}
td{
text-align:center;
 font-size: 175%;
 height:auto;}
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
		<div style = "position:absolute;top:578px;left:90px;font-size:29px;"><font color= "#FFFFFF" face="Poppins-Regular" ;><?php print($_SESSION["display_name"]); ?></font></div>


</section>
<div class = "bg-centred" style = "top:35px;left:378px;font-size:25px; "><b><font face="Poppins-Regular" color= "white">Made For You</font></b></div> 
<a href="madeforyou.php"><img src = "made.jpg" STYLE="position:absolute; TOP:60px; LEFT:285px; WIDTH:200px; HEIGHT:200px;border-radius:5%;"></a>
<?php
$email_id = $_SESSION['email_id'];
$sql = pg_query("SELECT * from user_follows_artist 
where e_mail_id5 = '$email_id'");
if(pg_num_rows($sql) == 0){
	
	$output = "You don't have any playlists yet";?>
	<div style = "position:absolute;top:300px;left:280px;font-size:25px;"><font face="Poppins-Regular" color = "white">Follow Artists To Get Recommendation!</font></div>
<?php	
}
else
{ 
$query = pg_query("drop table IF EXISTS user_doesnt_follow");
$query = pg_query("select style,artist_id7 into user_doesnt_follow 
from artist_style 
except
select style,artist_id7
from user_follows_artist,artist_style
where e_artist_id5 = artist_id7 and e_mail_id5 = '$email_id'");


$query = pg_query("drop table IF EXISTS xyz");
$query = pg_query("select style into xyz
from user_follows_artist,artist_style
where e_artist_id5 = artist_id7 and e_mail_id5 = '$email_id'
order BY RANDOM()");

$query123 = pg_query("select distinct artist_id7
from user_doesnt_follow,xyz
where user_doesnt_follow.style = xyz.style ");
pg_query("drop table IF EXISTS xyz");
pg_query("drop table IF EXISTS user_doesnt_follow");
 ?>
	<div style = "position:absolute;top:300px;left:280px;font-size:25px;"><font face="Poppins-Regular" color = "white">Similar To Artists You Follow</font></div>
<table>
<?php 
  $count = 0;
  while($row = pg_fetch_row($query123)) {
		$query2 = pg_query("SELECT artist_name,artist_image from artist
		where artist_id = '$row[0]'");
		$row2 = pg_fetch_array($query2);
	  $xyz = preg_replace('/\s+/', '', $row2[0]);
	  if ($count % 3 == 0){
	  echo '<tr>';}?>
	  
    <td style = "padding :60px;"><a href = "<?php echo $xyz.'.php' ?>"><img src="<?php echo $row2[1];?>" STYLE="WIDTH:210px; HEIGHT:210px;border-radius:50%;"/></a><font color = "#FFFFFF"><?php echo $row2[0];?></font> </td>
	    <?php if ($count % 3 == 2){
		echo '</tr>';
		}
    $count++;
  }?>
</table>
<?php
}
?>








</body>
</html>