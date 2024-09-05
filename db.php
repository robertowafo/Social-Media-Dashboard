<?php
$host = 'localhost'; // Adjust if your MySQL server is hosted elsewhere
$dbname = 'social_media_dashboard'; 
$username = 'root'; 
$password = ''; 

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>