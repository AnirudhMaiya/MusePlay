<?php
 
include('server.php');
$email_id = $_SESSION['email_id'];
$link = pg_Connect("dbname=spotify user=postgres password=dodie");
$playlist_name = $_POST["playlist_name"];
//$date_created = $_POST['date_created'];
$rating =$_POST['rating'];
$favourite_Boolean =$_POST['favourite_Boolean'];
$xy = $_SESSION["display_name"].$playlist_name;
$presql = pg_query("SELECT DATE(now) from now()");
$row1 = pg_fetch_array($presql);
$sql  = "INSERT INTO playlist VALUES ('$xy','$row1[0]','$rating','$playlist_name','$favourite_Boolean','$email_id')";
pg_query($sql);
header('location:YourPlaylist.php');
?>