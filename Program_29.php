<?php

$username = "";
$password = "";

if(isset($_COOKIE["username"]))
{
    $username = $_COOKIE["username"];
}

if(isset($_COOKIE["password"]))
{
    $password = $_COOKIE["password"];
}

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(isset($_POST["remember"]))
    {
        setcookie("username", $username, time()+86400);
        setcookie("password", $password, time()+86400);
    }

    echo "Login Successful";
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form method="post">

Username:
<input type="text" name="username" value="<?php echo $username; ?>">
<br><br>

Password:
<input type="password" name="password" value="<?php echo $password; ?>">
<br><br>

<input type="checkbox" name="remember"> Remember Me
<br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>