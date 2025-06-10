<?php
// db_connection.php

$host = 'localhost'; // Database server (typically localhost)
$dbname = 'todo_database'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password (empty for local development)

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optionally, set the charset to avoid encoding issues
mysqli_set_charset($conn, 'utf8');
?>
