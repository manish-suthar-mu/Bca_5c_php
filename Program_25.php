<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="username" placeholder="Enter username : ">
        <input type="password" name="password" placeholder="Enter password : ">
        <input type="submit" value="Login" name="submit">
    </form>
    
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        setcookie("username",$username,time()+86400,"/");
    }

    // Read Cookie

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_COOKIE['username'];
        echo "Username : ". $_COOKIE['username'];
     }
?>