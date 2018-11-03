<?php
require("connection.php");
// ładujemy plik z połączeniem
$conn=connection(); 
$sql="SELECT * FROM `artykul` WHERE ID_Articles=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["article"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>