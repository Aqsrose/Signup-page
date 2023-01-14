<?php 
$link=mysqli_connect("localhost","root","","bsse4");
	$id=$_REQUEST['id'];
		$update = true;
		$record = mysqli_query($link, "SELECT * FROM student WHERE id=$id");

		if (count($record) == 1 ) {
			$newrow = mysqli_fetch_array($record);
			$fname=$newrow['fullname'];
			
			$email = $newrow['email'];

			$name = $newrow['username'];

			$age = $newrow['age'];

			$gender = $newrow['gender'];

			$subject = $newrow['subject'];
		}
	
?>
<html>
<form method="post" action="editdb.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<label>fullname</label>
<input type="text" name="fname" value="<?php echo $fname; ?>">  <br><br><br>
<label>email</label>
<input type="text" name="email" value="<?php echo $email; ?>" >
<br><br><br>
<label>username</label>
<input type="text" name="uname" value="<?php echo $name; ?>" >


<br><br><br>
<label>age</label>
<input type="text" name="age" value="<?php echo $age; ?>" >

<br><br><br>
<label>gender</label>
<input type="text" name="gender" value="<?php echo $gender; ?>" >

<br><br><br>
<label> subject</label>
<select>
	<option value="<?php echo $subject; ?>" ><?php echo $subject; ?></option>
<option value="database">Database</option>
    <option value="web technology">web technology</option>
    <option value="math">mathematics</option>
    <option value="computer">Computer</option>
</select>
<input  type="submit" value="Update" />
            
</form>