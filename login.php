<?php
   include("conn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      $email = $_POST['email'];
      $password = $_POST['password']; 
      $password1= base64_encode($password);
      $sql = "SELECT id FROM signup WHERE email = '$email' and password = '$password1'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      if($count == 1) 
      {
        $_SESSION['login_user'] = $email;
        header("location: menu.php");
      }
      else 
      {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <link rel="stylesheet" href="style.css">
    <script >
    function validateForm() {

     
      var e_mail = document.forms["form1"]["email"].value;
      
      var password = document.forms["form1"]["password"].value;
    

      var name_regex = /^[a-zA-Z\s]+$/;
      var username_regex = /^[a-zA-Z]+$/;
      var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  
            

            if (!emailReg.test(e_mail))
                 {
                    document.getElementById('eerror').innerHTML="Please Enter Valid Email Address";  
                    b = false;
                 }
                else if (e_mail.length == 0)
                 {
                    document.getElementById('eerror').innerHTML="Please Enter Email Address";  
                    b = false;
                 }
            else 
                 {
                    document.getElementById('eerror').innerHTML=""; 
                    b = true;
                 }

           

      if (password.length ==0)
                 {
                    document.getElementById('perror').innerHTML="Please Enter Password ";  
                    d = false;                 
                }
            else
                 {
                    document.getElementById('perror').innerHTML=""; 
                    d = true;
                 }
                 
            
            if ( b == true &&  d == true )
                 {
                  return true;
                 }
            else
                 {
                  return false;
                 }

    }
 

         $(document).ready(function(){

             $("#open").click(function(){
                 $("#open").hide();
                 $("#closed").show();
                 $("#password").attr("type","text");
             });

             $("#closed").click(function(){
                 $("#closed").hide();
                 $("#open").show();
                 $("#password").attr("type","password");
             });

         });

       
        
</script>
  </head>
  <body>
<div class="login-box">
   <form name="form1" method="post" class="form-horizontal"  onsubmit="return validateForm()" >
  <h1 style="padding-top:170px">Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
   <input type='text' name="email"  id='email' placeholder="Enter your Email" /></div>
                <span class="text-danger" id="eerror"></span>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type='password' name="password"  id='password' placeholder="Enter your Password"  />
                </div><span class="text-danger" id="perror" ></span>
                <?php
      if(isset($count))
      {
        echo '<p class="textbox" style="font-size:15px;color:red">Invalid Email or password. Please try again</p>';
      }

      ?>
      <center>  <div style="width:50%;">
  <input   name="submit" type="submit" id="submit" value="Login" class="btn btn-info" style="background-color:lightgrey;font-size:22px;color:black" />
                         </div> </center>

  
     
<center>
<p class="textbox"> <a href="cpass.php" style="color:black;"><B>Forget Password?</B></a></p>
<p class="textbox">New User <a href="signup.html" style="color:black"><B>Register Here</B></a></p>

 </center>
 </div>
</form>
  </body>
</html>
