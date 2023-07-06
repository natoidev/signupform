<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="shortcut icon" href="jesusisoursaviour.jpg" type="image/jpg">
    <script src="script.js" defer></script>
</head>
<body>
     <h1>Sign Up</h1>
    <form action="index.php" method="post">
        <label for="fname">Enter Your First Name</label><br>
        <input type="text" name="fname"><br>
        <label for="lname">Enter Your First Name</label><br>
        <input type="text" name="lname"><br>
        <label for="">Choose Your Username</label><br>
        <input type="text" name="uname" required><br>
        <label for="">Enter Your Email</label> <br> 
        <input type="email" name="email" required><br>
        <label>Enter Your Password</label><br>
        <input type="password" name="pass" required><br>
        <label for="">Confirm Your Password</label> <br>
        <input type="password" name="cpass" id="cpass" required> <br>
        <p id="mismes"></p>
        <button type="submit" id="btn">Sign Up</button>
    </form>
    <p>Already Have An Account <a href="login.htm" target="_blank" title="Click On This Link If You Have An Account">Login</a></p>
</body>
</html>


<?php 
 $name = $_POST["fname"];
 $lname = $_POST["lname"];
 $pass = $_POST["pass"];
 $cpass = $_POST["cpass"];

  if($name == $lname){
    echo "First Name & Last Name can't Be Same" . "<br>";
  }
  else{
    echo "tnx, you filed all fileds successfully" . "<br>";
  } 
    
  if ($pass < 8 ) {
    echo "Password Must Be  8 Character";
  }
 
?>
