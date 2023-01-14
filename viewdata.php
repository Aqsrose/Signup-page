 <?php 
include ('session.php');
?>




<html>
<body>
 <a href="logout.php" style="font-size:18px"><span class="glyphicon glyphicon-log-in"></span> Logout</a>

<table border="1">
<th>ID</th>
<th>Fullname</th>
<th>Email</th>
<th>Username</th>
<th>age</th>
<th>gender</th>
<th>subject</th>
<?php

// $link=mysqli_connect("localhost","root","","bsse4");
$query="SELECT * FROM student";
$run=mysqli_query($link,$query);
while($row = mysqli_fetch_array($run))
{
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['fullname'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['username'];?></td>
	<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['subject'];?></td>

	<td><a href="edit.php?id=<?php echo $row['id'];?>">edit</a></td>

	<td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
</tr>

	


<?php
}
?>
</table>
</body>
</html>
