<?php
$servername = "localhost";
$username = "mega369";
$password = "@Mega369$";
$db = "mega369";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
