<?php
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual MySQL password


$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>