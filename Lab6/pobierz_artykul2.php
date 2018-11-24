<?php
 

header('Content-type: application/json');
 
/*Załączenie pliku odpowiadającego za połączenie z bazą danych.*/
include('connection.php');
 
connection();
$zapytanie_pobierz = "SELECT * FROM `artykul` WHERE ID_Articles=2";
/*Wykonanie zapytania SELECT*/
$wynik_pobierz = mysqli_query($conn, $zapytanie_pobierz);
/*Przygotowanie tablicy, która będzie przechowywać dane z bazy*/
$pobrane_dane = array();
 
/*Pętla typu "while" oparta o funkcję mysqli_fetch_row, 
wykonująca się na wyniku zapytania w celu zorganizowania pobranych danych w tabelę */
while ($wiersz = mysqli_fetch_row($wynik_pobierz)) 
{
  $pobrane_dane[] = $wiersz;
}
 
/*Wywołanie tabeli danych jako danych w formacie JSON. 
W istocie działania podjęte w tym pliku tworzą pakiet danych JSON, 
który będzie możliwy do zinterpretowania w pliku skrypt.js*/
echo json_encode($pobrane_dane);
 
?>