<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" type="text/css" href="loginstyle.css">
        <title> Login By user</title>
    </head>
    <body>
        <div class="center">
            <h1>Login</h1>
            
            <form action="#" method="POST">

            <div class ="form">
                <input type ="text" name="username" class="textfield" placeholder="username">
                <input type ="password" name="password" class="textfield" placeholder="password">

                <div class ="forgetpass"><a href="#" class="link">Forget Password?</a></div>
                <input type ="submit" name="login" value="Login" class="btn">

                <div class="signup">New Member?<a href="#" class="link" >SignUp Here</a></div>
            </div>
        </div>
</form>
</body>
</html>

<?php
include("connection.php");

if(isset($_POST['login']))
{

  $username = $_POST['username'];
  $password = $_POST['password'];

    if ($username === 'Gargee' && $password === '12345') {
        $_SESSION["username"] = $username;
        header("Location: display.php"); 
        exit();
    } else {
       
        $error_message = "Invalid username or password";
    }
}

?>