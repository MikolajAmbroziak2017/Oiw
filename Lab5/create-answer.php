<?php

//Tworzysz nagłówek

// Generowanie danych XML

header('Content-type: application/xml; charset=utf-8');

header("Expires: 0");

header("Cache-Control: no-cache, must-revalidate");

header("Pragma: no-cache");

//Nawiązujesz połączenie z DB

include("connection.php");
//Zaczynasz tworzyć XMLA

//zaczynasz plik xml i ustawiasz kodowanie na utf-8

echo '<?xml version="1.0" encoding="utf-8" ?>'."\n";

//zaczynasz dodawanie treści standardowymi komendami echo

echo'<rekordy>'."\n";//początek jednego rekordu

echo'   <utworzono>'.time().'</utworzono>'."\n";

$ii = 0; // to licznik inkrementujący licznik pozycji w XML

$sql = "SELECT * FROM `artykul` where ID_Articles=1";
$zapytanie=mysqli_query($conn, $sql); 


/*polecam do ćwiczeń zmianę sposobu odwoływania się do wyników zapytania z $wiersz[0] na np $wiersz->id łatwiej jest nimi operować i łatwiej odwołać się do konkretnej wartości i nei trzeba liczyć kolumn w mysql*/

$rekord = mysql_fetch_object($zapytanie)

while
    echo'   <rekord id="'.$ii.'">'."\n";//wyświetlenie inkrementowanego id pozycji

    echo'   <id>'.$rekord->ID_Articles.'</id>'."\n";//w ramkach <id> wpisuje wartość id rekordu pozostałe pozycje anlogicznie

    echo'   <post_created>'.$rekord->created.'</post_created>'."\n";

    echo'   <post_name><![CDATA['.strip_tags($rekord->Text_Articles,'<a>').']]></post_name>'."\n";

    echo'   <post_data ><![CDATA['.strip_tags($rekord->Autor,'<a>') .']]></post_data >'."\n";

    echo' </rekord>'."\n";

    mysqli_close($conn);

?>

 