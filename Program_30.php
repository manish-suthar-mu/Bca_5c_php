<?php
$conn = mysqli_connect("localhost","root","","bca_5c");

if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    mysqli_query($conn,"INSERT INTO users(username,password,email,phone)
    VALUES('$username','$password','$email','$phone')");
}
?>

<form method="post">
    Username : <input type="text" name="username"><br><br>

    Email : <input type="email" name="email"><br><br>

    Phone : <input type="text" name="phone"><br><br>

    Password : <input type="password" name="password"><br><br>

    <input type="submit" name="save" value="Register">
</form>

<br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Password</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM users");

while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['password']; ?></td>

    <td>
        <a href="Program_30_edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="Program_30_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php
}
?>

</table>