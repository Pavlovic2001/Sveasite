
// scroll function, när nav classen lämnar toppen av hemsidan så läggs sticky classen till
$(window).scroll(function(){
  if($(window).scrollTop()){
      $("nav").addClass("sticky");
  }

  else{ //når den toppen igen, så tas sticky classen bort
      $("nav").removeClass("sticky");

  }
});

// reveal function, när elementet kommer på tittaren skärm så ska en active class läggas till, då kommer elementet från att vara osynligt glida in och bli synligt

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

// counter function, där man sätter start, range, och tid.

document.addEventListener("DOMContentLoaded", () => {
  function counter(id, start, end, duration) {
   let obj = document.getElementById(id),
    current = start,
    range = end - start,
    increment = end > start ? 1 : -1,
    step = Math.abs(Math.floor(duration / range)),
    timer = setInterval(() => {
     current += increment;
     obj.textContent = current;
     if (current == end) {
      clearInterval(timer);
     }
    }, step);
  }
  counter("count1", 0, 234, 3000);
  counter("count2", 200, 4, 3000);
  counter("count3", 0, 739, 3000); 
 });



// email validator, kolla om ett element är tomt, om tomt så ska en alert skickas annars ska submit

function validate(){
  var emailform = document.getElementsByClassName('fepost').value;
  var username= document.getElementById('uname').value;
  if(username == ""){
      alert('user name cannot be empty')
      return false
  }

  if(emailform == ""){
      alert('password cannot be empty')
      return false
  }

  return submit;
}







// filter



// slide animation


