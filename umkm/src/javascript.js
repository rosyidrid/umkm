function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("footer").style.backgroundColor = "rgba(0,0,0,0.4)";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("footer").style.backgroundColor = "#c7ecee";
    document.body.style.backgroundColor = "white";
  }