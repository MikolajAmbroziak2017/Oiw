<?php
include("connection.php");
// ładujemy plik z połączeniem
$sql="SELECT * FROM `artykul` WHERE ID_Articles=4";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
   


$conn->close();
?>






