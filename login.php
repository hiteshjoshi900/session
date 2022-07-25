<?php
    session_start();
    if (isset($_POST["log"]))
    {
        $em=$_POST["email"];
        $pass=$_POST["pass"];

        if ($em=='hiteshjoshi900@gmail.com' && $pass=='hiteshjoshi900') 
        {
            echo "<h3 align='center' style='color:green'> You are Login Succsessfully<h3>";
            header("refresh:4,profil.php");
        }
        else
        {
            echo "<h3 align='center' style='color:red'> Your Email Or Password are Incorect<h3>";
            header("refresh:4,login.php");
        }
     
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sesstion Demo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="POST">
        <center>
            <br><br>
            <input type="text" name="email" placeholder="Enter Email Address" require>
            <br><br>
            <input type="password" name="pass" placeholder="Enter Password" require>
            <br><br>
            <Input type="submit" name="log" value="Log In">
        </center>
    
</body>
</html>