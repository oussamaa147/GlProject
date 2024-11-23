<?php
// Database configuration
$host = "mysql.railway.internal"; // Replace with your database host
$port = 3306;                     // Replace with your database port
$username = "root";               // Replace with your MySQL username
$password = "bwQvlcgRTMDTUmQNEIhvtlgwCbQJBOYT"; // Replace with your MySQL password
$database = "railway";            // Replace with your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
