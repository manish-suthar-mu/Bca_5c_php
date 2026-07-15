<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        form{
            background-color: #153237;
            padding: 30px;
            width:500px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #000;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;

        }
        input{
            width: 100%;
            height: 40px;
            margin-top: 7px;
            font-size: 18px;
            border-radius: 9px;
            background-color: #dffaff;
        }
        
        .sub{
            background-color: #24cce9;
            color: white;
            width: 100%;
            height: 40px;
            border-radius: 5px; 
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">
    Username:<br>
    <input type="text" name="username" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Phone:<br>
    <input type="text" name="phone" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    Confirm Password:<br>
    <input type="password" name="confirm_password" required><br><br>

    <input type="submit" name="submit" value="Register" class="sub">
</form>

</body>
</html>
<?php

$conn = mysqli_connect("localhost", "root", "", "bca_5c");

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if($password == $confirm)
    {
        $sql = "INSERT INTO users(username, password, email, phone)
                VALUES('$username','$password','$email','$phone')";

        if(mysqli_query($conn, $sql))
        {
            echo "<br>Registration Successful";
        }
        else
        {
            echo "<br>Error";
        }
    }
    else
    {
        echo "<br>Password does not match!";
    }
}

?>
