<?php get_header(); ?>

    <section id="header">
        <div id="header-img">
            <img class="ps-4 pt-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/thema.png" alt="logo" height="80px">
            <div class="container h-100">
                <!-- hamburger menu -->
                <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                <label for="openSidebarMenu" class="sidebarIconToggle" onClick="navbar()">
                    <div class="spinner diagonal part-1"></div>
                    <div class="spinner horizontal"></div>
                    <div class="spinner diagonal part-2"></div>
                </label>
                <!-- nav items -->
                <div class="sidenav">
                    <a href="#">Over Lifer</a>
                    <a href="#">Podcasts</a>
                    <a href="#">videos</a>
                    <a href="#">studentenwelzijn op de VU</a>
                    <a href="#">privacy disclaimer</a>
                </div>
            </div>
        </div>
    </section>                                        
                                
    <section id="challenge">
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center">
                        <p class="">challenge #31</p>
                        <?php echo the_content();?>
                        <p class="text mt-4 pt-3 px-5">Eventuele extra beschrijving of instructies over de challenge (wat hoe waar etc).</p>
                        <div id="btn-div" class="mt-4 p-2 px-4 text-white"><button onclick="accepted()" class="btn btn-primary">challenge accepted</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

<?php
// get_header();

// echo "<hr>";

// // gets the challenge that is written in the content from homepage fast (NOT FOR LONG TERM)
// $challenge = the_content();

// // cms replacements to set challenges ready for the whole week
// $monday = "MAANDAG CHALLENGE";
// $tuesday = "DINSDAG CHALLENGE";
// $wednesday = "WOENSDAG CHALLENGE";
// $thursday = "DONDERDAG CHALLENGE";
// $friday = "VRIJDAG CHALLENGE";
// $saturday = "ZATERDAG CHALLENGE";
// $sunday = "ZONDAG CHALLENGE";

// // sets time zone and get date
// date_default_timezone_set('Europe/Amsterdam');
// //$timeToday = date('H:i');
// $dayToday = date('D');

// // checks if empty otherwise posts user friendly sentence
// $monday = !empty($monday) ? $monday : "De challenge wordt elk moment erop gezet. Sorry voor de vertraging!";
// $tuesday = !empty($tuesday) ? $tuesday : "De challenge wordt elk moment erop gezet. Sorry voor de vertraging!";
// $wednesday = !empty($wednesday) ? $wednesday : "De challenge wordt elk moment erop gezet. Sorry voor de vertraging!";
// $thursday = !empty($thursday) ? $thursday : "De challenge wordt elk moment erop gezet. Sorry voor de vertraging!";
// $friday = !empty($friday) ? $friday : "De challenge wordt elk moment erop gezet. Sorry voor de vertraging!";
// $saturday = !empty($saturday) ? $saturday : "De challenge wordt elk moment erop gezet. Sorry voor de vertraging!";
// $sunday = !empty($sunday) ? $sunday : "De challenge wordt elk moment erop gezet. Sorry voor de vertraging!";

// // checks day and if it matches get the good challenge for the day
// switch ($dayToday) {
//     case "Mon":
//         $answer = $monday;
//         // function = SELECT otherwise CREATE || code dat de challenge naar de database stuurt
//         break;
//     case "Tue":
//         $answer = $tuesday;
//         break;
//     case "Wed":
//         $answer = $wednesday;
//         break;
//     case "Thu":
//         $answer = $thursday;
//         break;
//     case "Fri":
//         $answer = $friday;
//         break;
//     case "Sat":
//         $answer = $saturday;
//         break;
//     case "Sun":
//         $answer = $sunday;
//         break;
// }

// // check the day and posts the message (cms that will be added later for 7 days challenges preset)
// echo $answer . "<br>";

// // quick challenge adding from content
// echo $challenge . "<br>";

// // day
// echo $dayToday;

// echo "<hr>";

// get_sidebar();
// get_footer();
?>