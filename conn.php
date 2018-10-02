<?php
$servername = "localhost";
$username = "mmhh_charity123";
$password = 'mmhh_charity123';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>