<?php 
	$id = $_POST['id'];  							
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$age=$_POST['age'];
	$gender= $_POST['gender'];
	$sub=$_POST['subject'];
	
$host="localhost";
$uname34="root";
$pass="";
$db="bsse4";
$link = mysqli_connect("$host","$uname34","$pass","$db");

 
$query = "update student set 
fullname='$fname',email='$email',username='$uname', age='$age', 
gender='$gender', subject='$sub' where id='$id'"; 
$run = mysqli_query($link,$query);

?>
<script>alert("update succesfully");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=viewdata.php"> 
