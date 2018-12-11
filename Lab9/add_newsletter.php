<?php

include("connection.php");
$email = $_POST['email'];
$zapytanie = "INSERT INTO `Newsletter`(`Id_mail`, `mail`) VALUES (null,'$email')";
if( mysqli_query($conn,$zapytanie)){

}
else{
    echo "blad dodawania ".mysqli_error($conn);
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<a href="index.php">Wróć</a>
</body>
</html>
