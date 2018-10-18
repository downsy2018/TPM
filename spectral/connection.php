<?php
function Connect()
{
$servername = "localhost";
$username = "chrisd";
$password = "podrules22";
$dbname = "tpm_responses";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
return $conn;
}
?>