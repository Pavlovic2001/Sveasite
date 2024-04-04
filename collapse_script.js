
//collapse function

var coll = document.getElementsByClassName("collapsible"); //hämtar classnamnet
var i; //skapa en variable

for (i = 0; i < coll.length; i++) { //for sats
  coll[i].addEventListener("click", function() { //addeventlistener function
    this.classList.toggle("active"); //toggla class
    var content = this.nextElementSibling;
    if (content.style.maxHeight){ //if sats för hur max heighten på elemntet ska påverkas
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}