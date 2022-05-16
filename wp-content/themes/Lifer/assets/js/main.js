function change_theme($theme) {
    document.getElementById("homeBtn").classList.remove('btn-blue');

    switch ($theme) {
        case "Groen-Roze":
            $bgColor = "#66ff00";
            $color = "#ff006f";
            document.getElementById("homeBtn").classList.add('btn-pink');
            break;
        case "Paars-Geel":
            $bgColor = "#9100ff";
            $color = "#bfff00";
            document.getElementById("homeBtn").classList.add('btn-yellow');
            break;
        case "Oranje-Aqua":
            $bgColor = "#ffdb00";
            $color = "#00b6a6";
            document.getElementById("homeBtn").classList.add('btn-aqua');
            break;
        case "Roze-Blauw":
            $bgColor = "#fb0484";
            $color = "#1004c3";
            document.getElementById("homeBtn").classList.add('btn-blue');
            break;
        default:
            $bgColor = "#fb0484";
            $color = "#1004c3";
            document.getElementById("homeBtn").classList.add('btn-blue');
            break;
    }

    document.body.style.backgroundColor = $bgColor;
    document.getElementById('home').style.color = $color;
    document.getElementById('counter').style.color = $color;

    // If you have just one class for the element
    document.querySelectorAll('p').forEach(e => e.style.color = $color);

}

function navbar() {
    let element = document.querySelector(".sidenav");
    element.classList.toggle("nav-width")
}

function accepted() {
    btnDiv = document.getElementById('btn-div');

    // change style button (give class)
    btnDiv.innerHTML = "✓ Challenge accepted!";  
}

function navbar() {
    let element = document.querySelector(".sidenav");
    element.classList.toggle("nav-width");
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("homeBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Set the date we're counting down to
var countDownDate = new Date("may 17, 2022 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="countdown"
  document.getElementById("countdown").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);