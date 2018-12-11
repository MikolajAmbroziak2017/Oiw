

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<div class="sidenav">
  <a href="strona3.html">About</a>
  <a href="strona2.html">Services</a>
</div>
<div class="icon-bar">
  <a class="active" href="index.php"><i class="fa fa-home"></i></a> 
  <a href="zapytania.php"><i class="fa fa-search"></i></a> 
  <a href="strona3.html"><i class="fa fa-envelope"></i></a> 
  <a href="panel-admin.php"><i class="fa fa-globe"></i></a>
</div>

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
<hr>
<div class='alert alert-secondary'>
    <div  ng-app="myApp" ng-controller="myCtrl">
        <button ng-click="myFunc()" class="btn btn-info" >Filtry</button>
        <div ng-show="showMe" class="filtry">
        <form method="POST" action="szukaj_nazwisko.php" class="form-group">
			<label for="head" class="display-4">Szukaj artykułów autora <br><br>Podaj imie autora:</label>
			<input type="text" size="40" name="zapytanie" class="form-control">
			<label for="autor" class="display-4">Podaj Nazwisko autora: </label>
			<input type="text" size="40" name="nazwisko" class="form-control">
			<input type="submit" value="Wyswietl Artykul" class="btn btn-dark"><a href=szukaj_nazwisko.php>
		</form>
        </div>
    </div>
		</div>
		<hr>	


<p></p>
            <?php
						include("scripts/zapytanie.php");
				?>
        <p>Autorzy i ich artykuły:</p>
<form method = "get" action="zapytanie.php">
					<textarea name = "head" rows ="10" cols="70" class="form-control" >
<?php echo $row['Imie'];?> 
<?php echo $row['Nazwisko'];?>

<?php echo $row['Mail'];?>


<?php echo $row['Title'];?>

              <?php echo $row['Text_Articles'];?></textarea><br>
	<input type="submit" value="Zatwierdź" class="btn btn-dark"> <a href ="index.php" class="btn btn-dark">Powrót</a>
				</form>
	</form>
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
