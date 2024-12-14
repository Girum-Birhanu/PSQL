<?php
require "connection.php";

// Select data from the database and create an HTML table
echo "<table border='1'>";
echo "<tr><th>ID</th><th>F_name</th><th>L_name</th><th>Sex</th></tr>";

$sql = "SELECT id, fname, lname, sex FROM student";
$result = mysqli_query($conn, $sql);

// Output data of each row
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['fname']}</td>
            <td>{$row['lname']}</td>
            <td>{$row['sex']}</td>
          </tr>";
}

echo "</table>";
mysqli_close($conn);
?>
