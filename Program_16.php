<!DOCTYPE html>
<html>
<head>
    <title>Display Products</title>
</head>
<body>

<h2>Product Details</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Type</th>
        <th>Image</th>
        <th>Quantity</th>
    </tr>

<?php

$conn = mysqli_connect("localhost","root","","bca_5c");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['type']; ?></td>

    <td>
        <img src="images/<?php echo $row['image']; ?>" width="100" height="100">
    </td>

    <td><?php echo $row['qty']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>