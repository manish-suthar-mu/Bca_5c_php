<?php
$conn = mysqli_connect("localhost","root","","bca_5c");

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    mysqli_query($conn,"UPDATE users SET
    username='$username',
    email='$email',
    phone='$phone',
    password='$password'
    WHERE id=$id");

    header("Location: Program_30.php");
}
?>

<form method="post">
    Username : <input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>

    Email : <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

    Phone : <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

    Password : <input type="text" name="password" value="<?php echo $row['password']; ?>"><br><br>

    <input type="submit" name="update" value="Update">
</form>