

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
      
      

    <div role="main" class="page-main">
      
    <li><a href="add_article.php">Dodaj Artykuł</a></li>
    <li><a href="edit.php">Edytuj Artykuł</a></li>
    <li><a href="del.php">Usuń Artykuł<a></li>
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
            <a class="panel_element"  href="index.php"><h4>kontakt</h4></a>
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



