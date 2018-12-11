<?php
include("connection.php");
$imie = $_POST['zapytanie'];
$nazwisko = $_POST['nazwisko'];
// ładujemy plik z połączeniem
$sql="SELECT * FROM artykul a INNER JOIN edytorzy e ON a.Autor=e.Imie WHERE e.Imie='$imie' AND e.Nazwisko ='$nazwisko' ;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>









<!DOCTYPE html>
<html>
  <head>
    
  <link rel="stylesheet" href="styles/css/bootstrap.css" />
  <link rel="stylesheet" href="styles/css/bootstrap-theme.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="scripts/js/bootstrap.js"></script>
  <link href="styles/style.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>Programowanie serwisów www</title> 
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type ="text/javascript" src = "scripts/text.js"></script>  
  </head>

<body>



    <header>
   <div class="logo_image">
    <a href="index.php">
      <img src="image\index_image.jpg" alt="logo">
    </a>  
  </div>
</header>

  <div class="wrap-all">
      <span class="navigation-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>
   
      <nav class="navigation" role="navigation">
        <h1 href="" class="logo">
          <img src="image\logo.jpg" alt="Kurs www" />
        </h1>
        <ul>
          <li><a href="index.php">Strona Główna</a></li>
          <li><a href="Strona3.html">Przedstaw się</a></li>
          <li><a href="Strona2.html">Elementy blokowe</a></li>
          <li><a href="Strona1.html">Zobacz film z przysięgi</a></li>
        </ul>
      </nav>
      
      </header>



<main id = "main" class ="container-fluid">	
			<div id="abc">

<textarea name = "" rows ="10" cols="70" class="form-control" ><?php echo $row['Nazwisko'];?> 
<?php echo $row['Text_Articles'];?></textarea>
<a href ="zapytania.php" class="btn btn-dark">Powrót</a>

	</div>
		</main>
        


















            <param>Zapisz się na newsletter</p>
      <form method="POST" action="add_newsletter.php">
      Podaj e-mail: <input type="text" size="40" name="email"><br>
      <input type="submit" value="Zapisz się!">
</form>
    </div>
  </div>

  <footer>  
    <p class="tytul" >Gdzie chcesz iść dalej? </p>
    <script src="scripts/jquery.js"></script>
    <div class="dol_panel">

        <div>
            <a class="panel_element" href="strona3.html"><h4>o mnie</h4></a> 
        </div>
  
        <div>
            <a class="panel_element" href="http://google.com"><h4>Google</h4></a>
        </div>
  
        <div>
            <a class="panel_element" href="index.php"><h4>regulamin</h4></a>
        </div>
  
        <div>
            <a class="panel_element"  href="panel-admin.php"><h4>kontakt</h4></a>
        </div>
   
    </div>
     <script src="jquery.js"></script>
  </footer>
 


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
    $(function() {
      $('.navigation-toggle').on('click', function(e) {
        $('body').toggleClass('navigation-show');
      });
    });
  </script>

</body>
</html>
