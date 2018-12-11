<?php
include("connection.php");
	$id=$_POST['ID_Articles'];
	$head = $_POST['head'];
    $main = $_POST['main'];
    $autor="XYZ";
	$sql="UPDATE `artykul` SET `Title`='$head',`Text_Articles`='$main',`Description`='$main',`Autor`='$autor' WHERE ID_Articles =4";
	if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Record updated successfully</div>";
} else {
    echo "<div class='alert alert-danger'>Error updating record: " . $conn->error."</div>";
}
	
$conn->close();
?>