<?php
require "connection.php";

// Prepare SQL statement
$sql = "INSERT INTO student (fname, lname, sex) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Check if the statement was prepared successfully
if ($stmt === false) {
    die("Error preparing the SQL statement: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("sss", $fname, $lname, $sex);

// Insert first record
$fname = "Kalsh";
$lname = "Getachwu";
$sex = "Male";
$stmt->execute();

// Insert second record
$fname = "Merdikeyos";
$lname = "Tasewu";
$sex = "Male";
$stmt->execute();

// Insert third record
$fname = "Salem";
$lname = "Birhanu";
$sex = "Female";
$stmt->execute();

// Check for errors after execution
if ($stmt->affected_rows > 0) {
    echo "Multiple data are inserted successfully!";
} else {
    echo "Error inserting data: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
