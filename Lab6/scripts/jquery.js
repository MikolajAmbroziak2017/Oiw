$(function ()
{
    $('#hide1').toggle( 300 ).delay( 500 ).fadeIn( 400 ).hide();
    $('#hide2').toggle( 300 ).delay( 1500 ).fadeIn( 400 ).hide();
    $('#hide3').toggle( 300 ).delay( 2500 ).fadeIn( 400 ).hide();
    $('.dol_panel').toggle( 300 ).delay( 3500 ).fadeIn( 400 ).hide();

    

})









    $('#czytaj_dalej1').click(function() { /*Zdefiniowanie zdarzenia inicjującego                       ----SELECT ID_Articles, Text_Articles FROM `artykul` WHERE 1-----
    - kliknięcie przycisku pobierz*/
     
        $.ajax({
            type:"GET", /*Informacja o tym, że dane będą pobierane*/
            url:"pobierz_artykul1.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
            contentType:"application/json; charset=utf-8", /*Informacja o formacie transferu danych*/
            dataType:'json', /*Informacja o formacie transferu danych*/
             
                /*Działania wykonywane w przypadku sukcesu*/
                success: function(json) { /*Funkcja zawiera parametr*/
                     
                    /*Pętla typu for...in języka Javascript na danych w formacie JSON*/
                    for (var klucz in json)
                        {
                            var wiersz = json[klucz];  /*Kolejne przebiegi pętli wstawiają nowy klucz*/     
                            var ID_Articles = wiersz[0];
                            var Title=wiersz[1]
                            var Text_Articles = wiersz[2];
                            var Description=wiersz[3];
                            var Autor=wiersz[4];
                            var Least=wiersz[5];

                             
                            /*Ustalenie sposobu wyświetlania pobranych danych w bloku div*/
                            $('#hide1').hide();
                            $("<h2>"+Title+"</h2>"+"<article id='one'>"+Text_Articles+"</article>"+"<p>"+Autor+"</p>")
                            .appendTo('#show1')
                            .append("<hr>")
                        } 
                     
                     
                    /*Dezaktywacja na określony czas przycisku wysyłającego - ten krok można pomninąć*/
                    $("#czytaj_dalej1").attr("disabled", true);
                    setTimeout(function(){
                        $("#czytaj_dalej1").attr("disabled", false); 
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



    $('#czytaj_dalej2').click(function() { /*Zdefiniowanie zdarzenia inicjującego                       ----SELECT ID_Articles, Text_Articles FROM `artykul` WHERE 1-----
    - kliknięcie przycisku pobierz*/
     
        $.ajax({
            type:"GET", /*Informacja o tym, że dane będą pobierane*/
            url:"pobierz_artykul2.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
            contentType:"application/json; charset=utf-8", /*Informacja o formacie transferu danych*/
            dataType:'json', /*Informacja o formacie transferu danych*/
             
                /*Działania wykonywane w przypadku sukcesu*/
                success: function(json) { /*Funkcja zawiera parametr*/
                     
                    /*Pętla typu for...in języka Javascript na danych w formacie JSON*/
                    for (var klucz in json)
                        {
                            var wiersz = json[klucz];  /*Kolejne przebiegi pętli wstawiają nowy klucz*/     
                            var ID_Articles = wiersz[0];
                            var Title=wiersz[1]
                            var Text_Articles = wiersz[2];
                            var Description=wiersz[3];
                            var Autor=wiersz[4];
                            var Least=wiersz[5];

                            $('#hide2').hide();
                            /*Ustalenie sposobu wyświetlania pobranych danych w bloku div*/
                            $("<h2>"+Title+"</h2>"+"<article id='two'>"+Text_Articles+"</article>"+"<p>"+Autor+"</p>")
                            .appendTo('#show2')
                            .append("<hr>")
                        } 
                     
                     
                    /*Dezaktywacja na określony czas przycisku wysyłającego - ten krok można pomninąć*/
                    $("#czytaj_dalej2").attr("disabled", true);
                    setTimeout(function(){
                        $("#czytaj_dalej2").attr("disabled", false); 
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
    
    $('#czytaj_dalej3').click(function() { /*Zdefiniowanie zdarzenia inicjującego                       ----SELECT ID_Articles, Text_Articles FROM `artykul` WHERE 1-----
    - kliknięcie przycisku pobierz*/
     
        $.ajax({
            type:"GET", /*Informacja o tym, że dane będą pobierane*/
            url:"pobierz_artykul3.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
            contentType:"application/json; charset=utf-8", /*Informacja o formacie transferu danych*/
            dataType:'json', /*Informacja o formacie transferu danych*/
             
                /*Działania wykonywane w przypadku sukcesu*/
                success: function(json) { /*Funkcja zawiera parametr*/
                     
                    /*Pętla typu for...in języka Javascript na danych w formacie JSON*/
                    for (var klucz in json)
                        {
                            var wiersz = json[klucz];  /*Kolejne przebiegi pętli wstawiają nowy klucz*/     
                            var ID_Articles = wiersz[0];
                            var Title=wiersz[1]
                            var Text_Articles = wiersz[2];
                            var Description=wiersz[3];
                            var Autor=wiersz[4];
                            var Least=wiersz[5];

                            $('#hide3').hide();
                            /*Ustalenie sposobu wyświetlania pobranych danych w bloku div*/
                            $("<h2>"+Title+"</h2>"+"<article id='tree'>"+Text_Articles+"</article>"+"<p>"+Autor+"</p>")
                            .appendTo('#show3')
                            .append("<hr>")
                        } 
                     
                     
                    /*Dezaktywacja na określony czas przycisku wysyłającego - ten krok można pomninąć*/
                    $("#czytaj_dalej3").attr("disabled", true);
                    setTimeout(function(){
                        $("#czytaj_dalej3").attr("disabled", false); 
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