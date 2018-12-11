<?php
include("connection.php");
//$nazwisko = $_POST['zapytanie'];
//$main = $_POST['main'];
// ładujemy plik z połączeniem
$sql="SELECT * FROM artykul a INNER JOIN edytorzy e ON a.Autor=e.Imie";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
   


$conn->close();
?>



