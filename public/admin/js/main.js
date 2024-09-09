//Dom selections
const toggleSidebar = document.getElementById("sidebarBtn");
const sideNavbar = document.querySelector("#sidenavbar");
const navlinks = document.querySelector("#navlinks li a");

toggleSidebar.addEventListener("click", () => {
  console.log("clicked");
  sideNavbar.classList.toggle("open");
});

// Countdown Functionality
var deadline = new Date("Apr 12, 2023 11:59:59").getTime();
var x = setInterval(function () {
  var now = new Date().getTime();
  var timeDiff = deadline - now;
  var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
  var hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
  document.getElementById("day").innerHTML = days;
  document.getElementById("hour").innerHTML = hours;
  document.getElementById("min").innerHTML = minutes;
  document.getElementById("sec").innerHTML = seconds;

  if (timeDiff < 0) {
    clearInterval(x);
    document.getElementById("expired").innerHTML = "EXPIRED";
    document.getElementById("day").innerHTML = "00";
    document.getElementById("hour").innerHTML = "00";
    document.getElementById("min").innerHTML = "00";
    document.getElementById("sec").innerHTML = "00";
  }
}, 1000);
