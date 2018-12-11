<?php
	include("connection.php");
		$sql = "DELETE FROM `artykul` WHERE `ID_Articles`= 4 ";
		if(mysqli_query($conn,$sql))
		{
		echo	'<div class="alert alert-success">artykuł został usuniety</div>';
		}else {
						echo '<div class="alert alert-danger">bład usuwania artykułu: ' . mysqli_error($conn)."</div>";
					}
	mysqli_close($conn);
?>