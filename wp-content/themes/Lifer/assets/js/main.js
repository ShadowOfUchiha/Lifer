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