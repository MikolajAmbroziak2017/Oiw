<?php
$servername = "localhost";
include("connection.php");					
					$head = $_POST['head'];
					$main = $_POST['main'];
                    $autor="XYZ";
					$sql = "INSERT INTO `artykul`(`ID_Articles`, `Title`, `Text_Articles`, `Description`, `Autor`) VALUES (null,'$head','$main','$main','$autor')";
					if (mysqli_query($conn, $sql)) {
						echo '<div class="alert alert-success">artykuł został dodany</div>';
					} else {
						echo '<div class="alert alert-danger">bład dodawania artykułu: ' . mysqli_error($conn)."</div>";
					}

				mysqli_close($conn);
				?>