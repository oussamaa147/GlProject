<?php
// Include the database connection file
include 'db.php';

// SQL query to fetch all data from the User table
$sql = 'SELECT * FROM "User"';
$result = pg_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die("Error in query: " . pg_last_error($conn));
}

// Check if there are any rows
if (pg_num_rows($result) > 0) {
    echo "<h2>User Table Content:</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Hashed Password</th>
            </tr>";
    
    // Fetch each row and display it in the table
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr>
                <td>" . htmlspecialchars($row["id"]) . "</td>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["email"]) . "</td>
                <td>" . htmlspecialchars($row["hachedPassword"]) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found in the User table.";
}

// Free the result set and close the connection
pg_free_result($result);
pg_close($conn);
?>
