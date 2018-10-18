<?php
function Connect()
{
//$servername = "localhost";
$servername = "database3.lcn.com";
//$username = "chrisd";
$username = "LCN377022_chrisd";
$password = "podrules22";
$dbname = "theparentmentor_co_uk_tpm_responses";
//$dbname = "tpm_responses";

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