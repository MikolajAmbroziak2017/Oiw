<?php
function connection() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artykuly";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
return $conn;
}
?>