<?php
// Database connection URL
$db_url = "postgresql://glproject_user:nPH05hhOztNckFuNpGXLV9D5ctBK6VM7@dpg-ct10qr8gph6c73benv70-a/glproject";

// Parse the URL into components
$url_parts = parse_url($db_url);

$host = $url_parts["host"];
$port = isset($url_parts["port"]) ? $url_parts["port"] : 5432; // Default port for PostgreSQL
$user = $url_parts["user"];
$password = $url_parts["pass"];
$dbname = ltrim($url_parts["path"], "/"); // Remove leading '/' from the path

// Create a connection string
$connString = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Establish the connection
$conn = pg_connect($connString);

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
} else {
    echo "Connected successfully to the PostgreSQL database!";
}

// Close the connection when done
pg_close($conn);
?>
