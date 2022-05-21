function change_theme($theme) {
    document.getElementById("homeBtn").classList.remove('btn-blue');

    switch ($theme) {
        case "Groen-Roze":
            $bgColor = "#65ff00";
            $color = "#ff006f";
            document.getElementById("homeBtn").classList.add('btn-pink');
            break;
        case "Paars-Groen":
            $bgColor = "#9100ff";
            $color = "#a0d700";
            document.getElementById("homeBtn").classList.add('btn-green');
            break;
        case "Oranje-Aqua":
            $bgColor = "#ffdb00";
            $color = "#00b6a6";
            document.getElementById("homeBtn").classList.add('btn-aqua');
            break;
        case "Roze-Blauw":
            $bgColor = "#ff0087";
            $color = "#2601e7";
            document.getElementById("homeBtn").classList.add('btn-blue');
            break;
        case "Oranje-Lichtpaars":
            $bgColor = "#ff7101";
            $color = "#5600d7";
            document.getElementById("homeBtn").classList.add('btn-lightpurple');
            break;
        case "Geel-Paars":
            $bgColor = "#fed000";
            $color = "#3d0077";
            document.getElementById("homeBtn").classList.add('btn-purple');
            break;
        case "Lichtroze-Lichtblauw":
            $bgColor = "#ff00fc";
            $color = "#0088fe";
            document.getElementById("homeBtn").classList.add('btn-lightblue');
            break;
        case "Blauw-Oranje":
            $bgColor = "#008ac3";
            $color = "#ff723d";
            document.getElementById("homeBtn").classList.add('btn-orange');
            break;
        case "Oceaanblauw-Lichtoranje":
            $bgColor = "#1c00a0";
            $color = "#ff9501";
            document.getElementById("homeBtn").classList.add('btn-lightorange');
            break;
        case "Muntgroen-Donkerroze":
            $bgColor = "#69ff94";
            $color = "#760147";
            document.getElementById("homeBtn").classList.add('btn-darkpink');
            break;
        case "Cyan-Lichtroze":
            $bgColor = "#760147";
            $color = "#d700d7";
            document.getElementById("homeBtn").classList.add('btn-lightpink');
            break;
        case "Oranjerood-Muntgroen":
            $bgColor = "#fe0000";
            $color = "#00fa74";
            document.getElementById("homeBtn").classList.add('btn-mintgreen');
            break;
        case "Olijfgroen-Donkergeel":
            $bgColor = "#187a15";
            $color = "#d6c109";
            document.getElementById("homeBtn").classList.add('btn-darkyellow');
            break;
        case "Donkerroze-Kiwigroen":
            $bgColor = "#8b005d";
            $color = "#5acb0f";
            document.getElementById("homeBtn").classList.add('btn-kiwi');
            break;
        case "Roze-Bladgroen":
            $bgColor = "#fe678a";
            $color = "#1ea020";
            document.getElementById("homeBtn").classList.add('btn-leafgreen');
            break;
        case "Bruin-Luchtblauw":
            $bgColor = "#7b0002";
            $color = "#2dbaba";
            document.getElementById("homeBtn").classList.add('btn-sky');
            break;
        default:
            $bgColor = "#ff0087";
            $color = "#2601e7";
            document.getElementById("homeBtn").classList.add('btn-blue');
            break;
    }

    // body
    document.body.style.backgroundColor = $bgColor;
    // title
    document.getElementById('home').style.color = $color;
    // challenge #1
    document.getElementById('counter').style.color = $color;

    // all <p> elements color
    document.querySelectorAll('p').forEach(e => e.style.color = $color);
    // hamburger menu bgcolor
    document.querySelectorAll('.spinner').forEach(e => e.style.backgroundColor = $color);

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