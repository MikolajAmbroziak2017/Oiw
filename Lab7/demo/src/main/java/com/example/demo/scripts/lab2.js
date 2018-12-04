var newDiv = null;
 function function1(){
    newDiv = document.createElement("div");
    newDiv.setAttribute("id","klocek");
    newDiv.style.width = "100px";
    newDiv.style.height = "100px";
    newDiv.style.backgroundColor = "red";
    document.body.appendChild(newDiv);
 }