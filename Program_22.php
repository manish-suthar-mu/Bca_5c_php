<!DOCTYPE html>
<html>
<head>
    <title>Student Record</title>
</head>
<body>

<h2>Student Registration</h2>

<form method="POST">
    Name:<br>
    <input type="text" name="name" required><br><br>

    Course:<br>
    <input type="text" name="course" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Mobile:<br>
    <input type="text" name="mobile" required><br><br>

    <input type="submit" name="submit" value="Save">
</form>

<?php

$conn = mysqli_connect("localhost","root","","bca_5c");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO students(name,course,email,mobile)
            VALUES('$name','$course','$email','$mobile')";

    mysqli_query($conn,$sql);

    echo "<h3>Record Saved Successfully</h3>";
}

?>

<h2>Student Records</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM students");

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>