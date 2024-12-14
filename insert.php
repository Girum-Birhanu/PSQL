<?php
require "connection.php";
$sql="insert into student (fname,lname,sex) values('Girum', 'Birhanu','Male')";

if(mysqli_query($conn,$sql)){
    echo "data is inserted successfully!";
}else{
    echo"error inserting table".mysqli_error($conn);
}
mysqli_close($conn);
?>