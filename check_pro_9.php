<?php
session_start();

if($_POST["userid"] == $_SESSION["userid"] &&
   $_POST["password"] == $_SESSION["password"])
{
    header("Location: welcome_pro_9.php");
}
else
{
    echo "Invalid User ID or Password";
}
?>