<?php 
include('session.php');
?>
<html lang="en" dir="ltr">
  <head>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <a href="logout.php" style="font-size:18px"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
<div class="login-box">
  <h1 style="padding-top:170px">"Insertion"</h1>
  <form  class="form-horizontal" action="insertdb.php" method="post"  >

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input  type='text' name="fullname"  placeholder="Full Name" id='name' /> </div>
   <span class="text-danger" id="nmerror"></span>
 
  <div class="textbox">
    <i class="fas fa-box"></i>
    <input type='text' name="email"  id='email' placeholder="e.g. admin@yahoo.com" /></div>
                <span class="text-danger" id="eerror"></span>
  
<div class="textbox">
    <i class="fas fa-user"></i>
   <input type='text' name="username"  placeholder="UserName" id='uname'/> </div>
                <span class="text-danger" id="uerror"></span>
 
 <div class="textbox">
    <i class="fas fa-user"></i>
   <input type='number' name="age"  placeholder="Age" id='uname'/> </div>
                <span class="text-danger" id="uerror"></span>
 
  <div class="textbox">
    <input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
    </div>

     <label >Choose a subject:</label>

  <select name="subject"  multiple>
    <option value="database">Database</option>
    <option value="web technology">web technology</option>
    <option value="math">mathematics</option>
    <option value="computer">Computer</option>
  </select>

    <center>  <div style="width:50%;">
  <input  type="submit" value="Insert" style="background-color:lightgrey;font-size:22px;color:black" class="btn btn-info"/>
                         </div> </center>
</div>
</form>
  </body>
</html>
