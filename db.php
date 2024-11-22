<?php
// Database configuration
$host = "127.0.0.1"; // Replace with your database host
$username = "root";      // Replace with your MySQL username
$password = "oussama2002";      // Replace with your MySQL password
$database = "glproject"; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If connected successfully
echo "Connected successfully to the database.";
?>
