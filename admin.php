<?php
include "header.php";
$host = "localhost";
$user = "root";
$password = "";
$dbName = "hospital";

$conn = mysqli_connect($host, $user, $password, $dbName);

// get data from the database
$query = "SELECT * FROM patients";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Data</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["date"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Error fetching data.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
