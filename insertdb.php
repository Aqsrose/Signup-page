<?php 
include 'conn.php';
$fullname234 = $_POST['fullname'];  
									

	$email = $_POST['email'];
	$username = $_POST['username'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$subject=$_POST['subject'];

//$link = mysqli_connect("localhost","root","","bsse4");


$query = "INSERT INTO student 
(fullname,email,username,age,gender,subject) 
VALUES ('$fullname234','$email','$username','$age','$gender','$subject')";
$run = mysqli_query($link,$query);

?>
<script>alert("Record added succesfully");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=insert.php"> 
