<?php 
include 'conn.php';
	$id=$_REQUEST['id']; 							
	
	

//$link = mysqli_connect("localhost","root","","bsse4");

 
$query = "delete from student where id='$id'"; 
$run = mysqli_query($link,$query);

?>

<meta HTTP-EQUIV="REFRESH" content="0; url=viewdata.php"> 
