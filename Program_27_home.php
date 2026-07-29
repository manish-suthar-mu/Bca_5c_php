<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: Program_27_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Home Page</h2>

<?php
echo "Welcome " . $_SESSION['username'];
?>

<br><br>

<a href="Program_27_logout.php">Logout</a>

</body>
</html>