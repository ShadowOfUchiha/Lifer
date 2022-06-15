<?php get_header(); ?>
<?php $published_posts = wp_count_posts()->publish; // gets the total posts for challenge #? 
$published_posts /= 2; // divided by 2 bcs there will be always a english version of the same challenge
?>

<?php
// check if posts = true and while its true loops through the posts and searches for matching date
// after that get the category and put it in $theme then send it to js and do onload in body to add styling
    if (have_posts()) :
        while (have_posts()) : the_post();

            if (get_the_date( 'Y-m-d' ) == date("Y-m-d")) {

                $cato = get_the_category();
                $theme = $cato[0]->name;
                $func = "javascript:change_theme('$theme')";

            }

        endwhile;
    endif;
?>

<body onLoad="<?=$func;?>">
    <section id="header">
        <div id="header-img">
            <img class="ps-4 pt-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_lifer.png" alt="logo" height="60px">
        <!-- outputs a list of languages flags -->
        <!-- <ul>
                <?php //pll_the_languages( array( 'show_flags' => 1,'show_names' => 0 ) ); ?>
            </ul> -->
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
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
            </div>
        </div>
    </section>                                        
                                
    <section id="challenge">
        <div class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 text-center">
                        <div id="counter" class="counter mb-4 pb-3">Challenge #<?php echo $published_posts; ?></div>

                        <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();

                                    if (get_the_date( 'Y-m-d' ) == date("Y-m-d")) { ?>
                                        <h1 id="home" class="home mb-4 pb-1"><?php the_title(); ?></h1>

                                        <?php
                                        the_content();
                                        the_post_thumbnail(); 
                                        break; // otherwise it loops too much
                                    

                                    } else {
                                        echo "<h2>Oeps...</h2>";
                                        echo "<p>Sorry, er is geen challenge gevonden voor vandaag</p>";
                                        break; // otherwise it loops too much and message gets shown * total posts
                                    }

                                endwhile;
                            else :
                                echo "<h2>Oeps...</h2>";
                                echo "<p>Sorry, er zijn helemaal geen challenges gevonden nergens</p>";
                            endif;
                        ?>
                        
                        <div id="btn-div" class="mt-5 text-white"><button id="homeBtn" onclick="accepted()" class="btn btn-blue">Challenge accepted?</button></div>                        

                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content col-12 col-md-6 text-center">
                                <span class="close">&times;</span>
                                <h1 class="modaltext">Nice - Succes!</h1>
                                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/giphy.gif" alt="gif" height="200px"></div>
                                <p class="modaltext pt-3">0 challenges aangenomen</p>
                                <p class="modaltext">Volgende challenge:</p> 
                                <p id="countdown"></p>
                                <p class="modaltext">challenge een ander</p>
                                <p class="modaltext">Werk verder aan je welzijn</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>	

    <?php
        // COOKIES 

        //create a function to get the right challenge 
        // function getChallenge($challenge){
        //     $challenge = $_POST['challenge'];

        //     if($counter){                   // up the counter if the challenge is clicked

        //     } else {                // store this is the cookie

        //     }
        // }

        // check if the cookie is set
        // if (!isset($_POST['challenge'])){
        //     //$challenge = htmlentities($_POST['challenge']);
        //     echo "Challenge " . $challenge . " is niet gezet";
        // } else {
        //     echo "Challenge " . $challenge . " is gezet";
        //     echo $_COOKIE[$challenge];
        // }
    ?>

    <!-- 
        form waarin je de challenge nummer door moet gaan geven aan 
        die count zodat je kan kijke of de knop geklikt is
    -->
    
    <!-- <form action="" method = post>
        <input type="submit" name="challenge" value="submit"/> the challenge number
        <input type="hidden" name="counter" value="counter"/> to count if the button is pressed
    </form> -->

<?php get_footer(); ?>