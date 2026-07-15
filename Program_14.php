<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>
</head>
<body>

<h2>Add Product</h2>

<form method="POST" enctype="multipart/form-data">

    Product Name:<br>
    <input type="text" name="product_name" required><br><br>

    Price:<br>
    <input type="number" name="price" required><br><br>

    Type:<br>
    <select name="type" required>
        <option value="">Select Type</option>
        <option>Electronics</option>
        <option>Clothes</option>
        <option>Food</option>
    </select><br><br>

    Image:<br>
    <input type="file" name="image" required><br><br>

    Quantity:<br>
    <input type="number" name="qty" required><br><br>

    <input type="submit" name="submit" value="Save">

</form>

<?php

$conn = mysqli_connect("localhost","root","","bca_5c");

if(!$conn)
{
    die("Database Connection Failed");
}

if(isset($_POST['submit']))
{
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $qty = $_POST['qty'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    // Create images folder if not exists
    if(!is_dir("images"))
    {
        mkdir("images",0777,true);
    }

    $target = "images/" . basename($image);

    if(move_uploaded_file($temp,$target))
    {
        $sql = "INSERT INTO products(product_name,price,type,image,qty)
                VALUES('$name','$price','$type','$image','$qty')";

        if(mysqli_query($conn,$sql))
        {
            echo "<h3 style='color:green;'>Product Saved Successfully</h3>";
        }
        else
        {
            echo "<h3 style='color:red;'>Database Error</h3>";
        }
    }
    else
    {
        echo "<h3 style='color:red;'>Image Upload Failed</h3>";
    }
}

?>

</body>
</html>