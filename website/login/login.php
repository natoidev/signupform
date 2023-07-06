<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="jesusisoursaviour.jpg" type="image/jpg">
</head>
<body>
     <h1>Sign Up</h1>
    <form action="website/index.php" method="post">
        <label for="fname">Enter Your First Name:</label><br>
        <input type="text" name="fname" id="fname" required><br>
        <label for="lname">Enter Your First Name:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label for="">Choose Your Username:</label><br>
        <input type="text" name="uname" required><br>
        <label for="">Enter Your Email:</label> <br> 
        <input type="email" name="email" required><br>
        <label for="">Enter Your password:</label><br>
        <input type="password" name="pass" required><br>
        <label for="">Confirm Your Password:</label> <br>
        <input type="password" name="cpass" id="" required> <br>
        <input type="submit" value="Sign Up" id="btn">
    </form>
    p>New To Us <a href="login.php">SignUp</a></p>
</body>
</html>