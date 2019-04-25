<!DOCTYPE HTML>
<html>
<body>
<style>
img{
	border-radius:50%;
</style>
<?php
$conn_string = "host=localhost port=5432 dbname=spotify user=postgres password=dodie";
$dbconn4 = pg_connect($conn_string);
$query = 'select * from artist';
$result = pg_query($query);
//echo "<table>";

while($row = pg_fetch_array($result)){
		//echo "<tr>";
		$url = addslashes($row["artist_image"]);
		//echo "<td>";
		?> 
		<img src = "<?php echo $url;?>" height ="100" width = "100">

	
		<?php echo "</td>";
		echo "<td>";
		echo $row["artist_name"];
		echo"</td>";
		//echo "</tr>";
}
?>
</body>
</html>