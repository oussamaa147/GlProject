<?php
// Include the database connection file
include 'db.php';

// Query to fetch data from the User table
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Database connection succeeded and data fetched successfully!</h2>";
    echo "<h3>User Records:</h3>";

    // Print the results
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " | Name: " . $row["name"] . " | Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found in the User table.";
}

// Close the connection
$conn->close();
?>
