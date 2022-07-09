function change_theme($theme) {
    document.getElementById("homeBtn").classList.remove('btn-blue');

    switch ($theme) {
        case "3":
            $bgColor = "#65ff00";
            $color = "#ff006f";
            document.getElementById("homeBtn").classList.add('btn-pink');
            break;
        case "1":
            $bgColor = "#9100ff";
            $color = "#a0d700";
            document.getElementById("homeBtn").classList.add('btn-green');
            break;
        case "4":
            $bgColor = "#ffdb00";
            $color = "#00b6a6";
            document.getElementById("homeBtn").classList.add('btn-aqua');
            break;
        case "2":
            $bgColor = "#ff0087";
            $color = "#2601e7";
            document.getElementById("homeBtn").classList.add('btn-blue');
            break;
        case "6":
            $bgColor = "#ff7101";
            $color = "#5600d7";
            document.getElementById("homeBtn").classList.add('btn-lightpurple');
            break;
        case "5":
            $bgColor = "#fed000";
            $color = "#3d0077";
            document.getElementById("homeBtn").classList.add('btn-purple');
            break;
        case "7":
            $bgColor = "#ff00fc";
            $color = "#0088fe";
            document.getElementById("homeBtn").classList.add('btn-lightblue');
            break;
        case "8":
            $bgColor = "#008ac3";
            $color = "#ff723d";
            document.getElementById("homeBtn").classList.add('btn-orange');
            break;
        case "9":
            $bgColor = "#1c00a0";
            $color = "#ff9501";
            document.getElementById("homeBtn").classList.add('btn-lightorange');
            break;
        case "10":
            $bgColor = "#69ff94";
            $color = "#760147";
            document.getElementById("homeBtn").classList.add('btn-darkpink');
            break;
        case "11":
            $bgColor = "#760147";
            $color = "#d700d7";
            document.getElementById("homeBtn").classList.add('btn-lightpink');
            break;
        case "12":
            $bgColor = "#fe0000";
            $color = "#00fa74";
            document.getElementById("homeBtn").classList.add('btn-mintgreen');
            break;
        case "13":
            $bgColor = "#187a15";
            $color = "#d6c109";
            document.getElementById("homeBtn").classList.add('btn-darkyellow');
            break;
        case "14":
            $bgColor = "#8b005d";
            $color = "#5acb0f";
            document.getElementById("homeBtn").classList.add('btn-kiwi');
            break;
        case "15":
            $bgColor = "#fe678a";
            $color = "#1ea020";
            document.getElementById("homeBtn").classList.add('btn-leafgreen');
            break;
        case "16":
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

    // language switcher
    document.getElementById('trans_wrapper').querySelectorAll('li').forEach(e => e.style.color = $color);
    document.getElementById('trans_wrapper').querySelectorAll('a').forEach(e => e.style.color = $color);

    // hamburger menu bgcolor
    document.querySelectorAll('.spinner').forEach(e => e.style.backgroundColor = $color);

}

const checkbox = document.getElementById('openSidebarMenu')
const wrapper = document.getElementById('wrapper')
const isChecked = checkbox.value

const navbar = () => {
    let element = document.querySelector(".sidenav");
    element.classList.toggle("nav-width");
};

window.addEventListener('click', (e) => {
    if (!wrapper.contains(e.target) && checkbox.checked) {
        navbar()
        checkbox.checked = !isChecked
    }
})

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("homeBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/*
btn.onclick = function() {
    modal.style.display = "block";

    btnDiv = document.getElementById('btn-div');

    // change style button (give class)
    btnDiv.innerHTML = "✓ Challenge accepted!";  
}
*/

var currentUrl = window.location.href;

if (currentUrl.includes("popup")) {
    modal.style.display = "block";

    btnDiv = document.getElementById('btn-div');

    // change style button (give class)
    btnDiv.innerHTML = "✓ Challenge accepted!";

    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Set the date we're counting down to
    const today = new Date();
    const countDownDate = new Date(today);

    countDownDate.setDate(countDownDate.getDate() + 1);
    countDownDate.setHours(0, 0, 0, 0);

    setInterval(() => {
        const now = new Date().getTime();
        const distance = countDownDate.getTime() - now;
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        const message = `${hours}:${minutes}:${seconds}`;

        document.getElementById("countdown").innerHTML = message;

        if (distance <= 0) {
            countDownDate.setDate(countDownDate.getDate() + 1);
            countDownDate.setHours(0, 0, 0, 0);
        }
    }, 1000);
}



