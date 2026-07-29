<?php

$conn = mysqli_connect("localhost","root","","bca_5c");

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM users WHERE id=$id");

header("Location: Program_30.php");

?>