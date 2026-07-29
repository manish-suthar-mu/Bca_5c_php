<?php
session_start();

session_destroy();

header("Location: Program_27_login.php");
exit();
?>