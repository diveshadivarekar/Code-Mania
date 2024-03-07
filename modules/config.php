<?php
// Define the database credentials
$host = "localhost";
$database = "MCQ";
$username = "root";
$password = "";

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>