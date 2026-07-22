<?php
    $conn = mysqli_connect("localhost","root","","bca_5c");
    $sql = "DELETE FROM `users` WHERE `id`=1";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "User Deleted Successfully";
    }else{
        echo "<h4 style='color:red;'>Error in Deleting User</h4>";
    }
?>