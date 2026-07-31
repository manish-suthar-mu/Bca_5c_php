<?php
$conn = mysqli_connect("localhost","root","","bca_5c");

if(isset($_POST['upload']))
{
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp,"images/".$image);

    mysqli_query($conn,"INSERT INTO slider(image) VALUES('$image')");
}

$result = mysqli_query($conn,"SELECT * FROM slider");
?>

<!DOCTYPE html>
<html>
<head>
<style>

.main{
    width:600px;
    height:350px;
    border:2px solid black;
    display:block;
    margin-bottom:10px;
}

.scroll{
    width:600px;
    overflow-x:auto;
    white-space:nowrap;
    border:1px solid #ccc;
    padding:5px;
}

.scroll img{
    width:100px;
    height:70px;
    margin-right:5px;
    cursor:pointer;
    border:2px solid transparent;
}

.scroll img:hover{
    border:2px solid blue;
}

</style>
</head>
<body>

<h2>Upload Image</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <input type="submit" name="upload" value="Upload">
</form>

<br>

<?php
$result = mysqli_query($conn,"SELECT * FROM slider");
$first = mysqli_fetch_assoc($result);
?>

<img id="mainImage" class="main" src="images/<?php echo $first['image']; ?>">

<div class="scroll">

<?php
mysqli_data_seek($result,0);

while($row=mysqli_fetch_assoc($result))
{
?>
<img src="images/<?php echo $row['image']; ?>"
onclick="changeImage(this.src)">
<?php
}
?>

</div>

<script>
function changeImage(src)
{
    document.getElementById("mainImage").src = src;
}
</script>

</body>
</html>