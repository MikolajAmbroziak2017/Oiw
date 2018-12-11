<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artykuly";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('<div class="alert alert-danger">Connection failed: ' . $conn->connect_error."</div>");
} 
$conn->set_charset("utf8");
?>