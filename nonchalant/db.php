<?php
$servername = "localhost";
$username = "root";  // Default username for MySQL
$password = "";      // Default password for MySQL (often empty)
$dbname = "nonchalant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
