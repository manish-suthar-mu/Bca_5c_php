<!DOCTYPE html>
<html>
<head>
    <title>Display Users</title>
</head>
<body>

<h2>User Details</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

<?php

$conn = mysqli_connect("localhost","root","","bca_5c");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>