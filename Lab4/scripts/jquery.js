$(function ()
{
    $('#hide1').toggle( 300 ).delay( 1000 ).fadeIn( 400 ).hide();
    $('#hide2').toggle( 300 ).delay( 3000 ).fadeIn( 400 ).hide();
    $('#hide3').toggle( 300 ).delay( 6000 ).fadeIn( 400 ).hide();
    $('.dol_panel').toggle( 300 ).delay( 10000 ).fadeIn( 400 ).hide();

    

})


$('#pobierz').click(function() { /*Zdefiniowanie zdarzenia inicjującego                       ----SELECT ID_Articles, Text_Articles FROM `artykul` WHERE 1-----
    - kliknięcie przycisku pobierz*/
     
        $.ajax({
            type:"GET", /*Informacja o tym, że dane będą pobierane*/
            url:"pobierz_dane.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
            contentType:"application/json; charset=utf-8", /*Informacja o formacie transferu danych*/
            dataType:'json', /*Informacja o formacie transferu danych*/
             
                /*Działania wykonywane w przypadku sukcesu*/
                success: function(json) { /*Funkcja zawiera parametr*/
                     
                    /*Pętla typu for...in języka Javascript na danych w formacie JSON*/
                    for (var klucz in json)
                        {
                            var wiersz = json[klucz];  /*Kolejne przebiegi pętli wstawiają nowy klucz*/     
                            var ID_Articles = wiersz[0];
                            var  Text_Articles = wiersz[1];
                             
                            /*Ustalenie sposobu wyświetlania pobranych danych w bloku div*/
                            $("<span>id: "+ID_Articles+" tekst: "+Text_Articles+"</span>")
                            .appendTo('#response')
                            .append("<hr>")
                        } 
                     
                     
                    /*Dezaktywacja na określony czas przycisku wysyłającego - ten krok można pomninąć*/
                    $("#pobierz").attr("disabled", true);
                    setTimeout(function(){
                        $("#pobierz").attr("disabled", false); 
                    }, 10000);  
                 
                },
                 
                 
                /*Działania wykonywane w przypadku błędu*/
                error: function(blad) {
                    alert( "Wystąpił błąd");
                    console.log(blad); /*Funkcja wyświetlająca informacje 
                    o ewentualnym błędzie w konsoli przeglądarki*/
                }
             
        });
     
    });