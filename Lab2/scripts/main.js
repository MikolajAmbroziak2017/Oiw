alert('Witaj Milordzie! ');
var name = prompt('Podaj swoje imie!');
alert('Hah już wiem kim jesteś '+name);
var heading = document.querySelector('h1');
heading.textContent = 'Witaj '+name+' Drogi Przyjacielu!';
var myImage = document.querySelector('img');

myImage.onclick=function(){
		var number =  Math.floor((Math.random()*5)+1);
		var mySrc = myImage.getAttribute('src');
		if(number === 1){
			myImage.setAttribute('src','image/image-java.jpg');
		}else if(number===2){
			myImage.setAttribute('src','image/image-java2.jpg');
			
		}
		else if(number===3){
			myImage.setAttribute('src','image/image-java3.jpg');
			
		}
		else if(number===4){
			myImage.setAttribute('src','image/image-java4.jpeg');
			
		}
		else if(number===5){
			myImage.setAttribute('src','image/image-java5.jpg');
			
		}}