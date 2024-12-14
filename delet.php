<?php
require "connection.php";
$sql="delete from student Where id=3";

if(mysqli_query($conn,$sql)){
    echo "data is Deleted successfully!";
}else{
    echo"error Deleting table".mysqli_error($conn);
}
mysqli_close($conn);
?>