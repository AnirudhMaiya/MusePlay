<!DOCTYPE HTML>
<html>
<body>
<style>
img{
	border-radius:50%;
}
@font-face { font-family: Poppins-Regular; src: url('Poppins-Regular.otf'); } 
    .poppins { font-family: Poppins-Regular; font-size: 4.2em; }

</style>
<?php
//$conn_string = "host=localhost port=5432 dbname=spotify user=postgres password=dodie";
//$dbconn4 = pg_connect($conn_string);
$query = 'select * from artist';
//echo "<table>";
$result = pg_query($query);
$row = pg_fetch_array($result);

$row1 = pg_fetch_array($result);
$row2 = pg_fetch_array($result);
$row3 = pg_fetch_array($result);
$row4 = pg_fetch_array($result);
$row5 = pg_fetch_array($result);
$row6 = pg_fetch_array($result);
$row7 = pg_fetch_array($result);
$row8 = pg_fetch_array($result);
$row9 = pg_fetch_array($result);
$row10 = pg_fetch_array($result);

$row11 = pg_fetch_array($result);

//$url = addslashes($row[2])
//while($row = pg_fetch_array($result)){
		//echo "<tr>";
	//	$url = addslashes($row[2]);		
		?> 
<a href = 'clairo.php'><img src = "<?php echo $row[2];?>" STYLE="position:absolute; TOP:120px; LEFT:350px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'chainsmokers.php'><img src = "<?php echo $row1[2];?>"STYLE="position:absolute; TOP:120px; LEFT:700px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'halsey.php'><img src = "<?php echo $row2[2];?>"STYLE="position:absolute; TOP:120px; LEFT:1050px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'pbridgers1.php'><img src = "<?php echo $row3[2];?>"STYLE="position:absolute; TOP:430px; LEFT:350px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row4[2];?>"STYLE="position:absolute; TOP:430px; LEFT:700px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row5[2];?>"STYLE="position:absolute; TOP:430px; LEFT:1050px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row6[2];?>"STYLE="position:absolute; TOP:740px; LEFT:350px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row7[2];?>"STYLE="position:absolute; TOP:740px; LEFT:700px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row8[2];?>"STYLE="position:absolute; TOP:740px; LEFT:1050px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row9[2];?>"STYLE="position:absolute; TOP:1050px; LEFT:350px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row10[2];?>"STYLE="position:absolute; TOP:1050px; LEFT:700px; WIDTH:210px; HEIGHT:210px"></a>
<a href = 'xyz.php'><img src = "<?php echo $row11[2];?>"STYLE="position:absolute; TOP:1050px; LEFT:1050px; WIDTH:210px; HEIGHT:210px"></a>


<?php
$result = pg_query($query);
$row = pg_fetch_array($result);
		echo "<div style='position:absolute;top:340px;left:415px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:340px;left:695px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:340px;left:1120px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:650px;left:350px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:650px;left:735px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:650px;left:1090px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:960px;left:380px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:960px;left:700px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:960px;left:1090px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";
$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:1270px;left:375px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";

$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:1270px;left:740px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";

$row = pg_fetch_array($result);
			echo "<div style='position:absolute;top:1270px;left:1090px;font-size:25px;'><font color= '#FFFFFF';>".$row[1]."</font></div>";

while($row = pg_fetch_array($result)){
		//echo"$row[1]['clairo']";
		//echo <$row["artist_name"];
		//echo"</td>";
		//echo "</tr>";
}

?>

		
</body>
</html>