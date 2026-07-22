<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="password">Enter New Password : </label>
        <input type="password" name="password" required>
        <br><br>
        <label for="password">Enter Confirm Password : </label>
        <input type="password" name="cpassword" required>
        <br><br>
        <input type="submit" value="Submit">
    </from>
</body>
</html>

<?php
    $conn = mysqli_connect("localhost","root","","bca_5c");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($password == $cpassword){
            $query = "UPDATE `users` SET `password`='$password' WHERE `id`=1";
            $result = mysqli_query($conn,$query);
            if($result){
                echo "Password Updated Successfully";
            }else{
                echo "Error in Updating Password";
            }
        }else{
            echo "Password and Confirm Password do not match";
        }
    }
?>