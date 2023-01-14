<?php 
$fullname234 = $_POST['fullname'];  
									

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword =  $_POST['cpassword'];
	$gender=$_POST['gender'];
	$checkbox1=$_POST['chkbox'];
  $chk="";
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
$password1=  base64_encode($password);
	$cpassword2=  base64_encode($cpassword);
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0 ) {


// Temporary file name stored on the server

$tmpName = $_FILES['image']['tmp_name'];

// Read the file

$fp = fopen($tmpName, 'r');

$data = fread($fp, filesize($tmpName));

$data = addslashes($data);

fclose($fp);

$link = mysqli_connect("localhost","root","","bsse4");


$query = "INSERT INTO signup 
(fullname,email,username,password,cpassword,gender,chkbox,image) 
VALUES ('$fullname234','$email','$username','$password1','$cpassword2','$gender','$chk','$data')";
$run = mysqli_query($link,$query);

}
?>
<script>alert("Registered succesfully");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=signup.html"> 
