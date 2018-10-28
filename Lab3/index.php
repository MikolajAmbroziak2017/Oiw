

<!DOCTYPE html>
<html>
  <head>
     
      <link href="styles/style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>Programowanie serwisów www</title> 
   
  </head>
<body>
 
    <header>
   <div class="logo_image">
    <a href="index.html">
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
          <img src="logo.png" alt="Company Name" />
        </h1>
        <ul>
          <li><a href="index.html">Strona Główna</a></li>
          <li><a href="Strona3.html">Przedstaw się</a></li>
          <li><a href="Strona2.html">Elementy blokowe</a></li>
          <li><a href="Strona1.html">Zobacz film z przysięgi</a></li>
        </ul>
      </nav>
      
      

    <div role="main" class="page-main">
      
      <section class="article">
          <h2> Apple iPhone X</h2>
          <article id='one'>
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artykuly";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="SELECT * FROM `artykul` WHERE ID_Articles=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["Description"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
              <a id ="czytaj_dalej1" onclick="czytaj1()">czytaj dalej...</a>           
            </article>
<hr />
      </section>
      
              
      <section class="article">          
                <h2> Apple iPhone 7</h2>
                <article id='two'><!--SELECT Description FROM `artykuł` WHERE ID_Articles=2-->
              Wodoodporny smartfon z wyświetlaczem o przekątnej 4,7 cala, który bez problemu obsłużymy jedną dłonią. iPhone 7 z optycznym stabilizatorem obrazu powinien zadowolić miłośników fotografii, nawet jeżeli zdarzy się im się robić zdjęcia przy niezbyt dobrym oświetleniu. Dzięki akumulatorowi o pojemności 1960 mAh oraz cztero­rdzeniowemu procesorowi, który ma dwa energooszczędne rdzenie, iPhone 7 umożliwia do 11 godzin ciągłej pracy.
              <a id ="czytaj_dalej2" onclick="czytaj2()">czytaj dalej...</a>
            </article>
            <hr />
      </section>

      <section class="article">    
                <h2> Nokia 8</h2>
                <article id='three'><!--SELECT Description FROM `artykuł` WHERE ID_Articles=3-->
              Cena w stosunku do oferowanej wydajności w przypadku tego modelu jest niewątpliwie atrakcyjna. Design, wyświetlacz i innowacyjne aparaty z funkcją nagrywania wideo w 4K to najmocniejsze strony Nokii 8. Pozostałe komponenty, takie jak szybki procesor, duża ilość pamięci operacyjnej i wewnętrznej również nie zawodzą. Nokia 8 sprosta wszystkim zadaniom.
              <a id ="czytaj_dalej3" onclick="czytaj3()">czytaj dalej...</a>
            </article>
            
      </section>
              <script type ="text/javascript" src = "scripts/text.js"></script>  
            

    </div>
  </div>

          
  

 

  <footer>  
 
    <p class="tytul" >Gdzie chcesz iść dalej? </p>
    <div class="dol_panel">

        <div>
            <a class="panel_element" href="index.html"><h4>o stronie</h4></a> 
        </div>
  
        <div>
            <a class="panel_element" href="http://google.com"><h4>Google</h4></a>
        </div>
  
        <div>
            <a class="panel_element" href="index.html"><h4>regulamin</h4></a>
        </div>
  
        <div>
            <a class="panel_element"  href="index.html"><h4>kontakt</h4></a>
        </div>
   
    </div>
     
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



