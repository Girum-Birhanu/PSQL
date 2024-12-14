<?php
require "connection.php";
$sql="update student set lname='updated' Where id='1'";

if(mysqli_query($conn,$sql)){
    echo "data is updated successfully!";
}else{
    echo"error updated table".mysqli_error($conn);
}
mysqli_close($conn);
?>