function openNav() {
  var x = window.matchMedia("(max-width: 415px)");
  var y = window.matchMedia("(max-width: 540px) ");
    document.getElementById("mySidenavButton").style.display = 'block';
    document.getElementById("mySidenav").style.color = "black";
    document.getElementById("list").style.display = 'block';
    
    document.getElementById("mySidenav").style.transition = "0.05s";
    document.getElementById("mySidenavButton").style.color = "black";

    if(x.matches){
      document.getElementById("mySidenav").style.width = "80%";
    }else  if(y.matches){
      document.getElementById("mySidenav").style.width = "40%";
    }else {
      document.getElementById("mySidenav").style.width = "30%";
    }
    document.getElementById("list").animate([
{ // from
opacity: 0,easing: 'ease-in',
color: "black"
},
{ // to
opacity: 0.85,
color: "black"
},
{ // to
opacity: 1,easing: 'ease-in',
color: "white"
}
], 2200, );
    
  }
  
  function closeNav() {
    
    
    
    document.getElementById("list").style.transition = "0.4s";
    document.getElementById("list").style.display = 'none';
    

    document.getElementById("mySidenavButton").style.transition = "1.3s";
    document.getElementById("mySidenavButton").style.color = "white";
    document.getElementById("mySidenavButton").style.display = 'block';
    
    document.getElementById("mySidenav").style.transition = "0.5s";
    document.getElementById("mySidenav").style.width = "0%";

    document.getElementsByClassName("supSidenav").style.display ='none';
  }

  var dropdown = document.getElementsByClassName("sideButt");
var i;

for (i = 0; i < dropdown.length; i++) {
dropdown[i].addEventListener("click", function() {
this.classList.toggle("active");
var dropdownContent = this.nextElementSibling;
if (dropdownContent.style.display === "block") {
dropdownContent.style.display = "none";
} else {
dropdownContent.style.display = "block";
}
});
}

