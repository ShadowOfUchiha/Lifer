<?php get_header(); ?>
<?php $published_posts = wp_count_posts()->publish; // gets the total posts for challenge #? 
$published_posts /= 2; // divided by 2 bcs there will be always a english version of the same challenge
$published_posts -= 1;
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
    <header id="header">
        <div id="header-img">

            <!-- outputs a list of languages flags -->
            <!-- <ul id="trans_wrapper">
                <?php //pll_the_languages( array( 'display_names_as' => 'slug' ) ); ?>
            </ul> -->

            <a href="<?= get_home_url(); ?>" class=""><img class="ps-4 pt-3" src="<?= get_template_directory_uri(); ?>/assets/img/Logo_lifer.png" alt="logo" height="60px"></a>
            <div class="container h-100" id="wrapper">
                <!-- hamburger menu -->
                <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                <label for="openSidebarMenu" class="sidebarIconToggle" id="sideBarLabel" onclick="navbar()">
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
    </header>                                        
                                
    <section id="challenge">
        <div class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-6 text-center">
                        <div id="counter" class="counter mb-4 pb-3">Challenge #<?php echo $published_posts; ?></div>

                        <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    if (get_the_title() == "Lightbox") : ?>

                                        <?php
                                        $lightbox = get_the_content();
                                        // otherwise it loops too much

                                    endif;
                                endwhile;

                                while (have_posts()) : the_post();

                                    if (get_the_date( 'Y-m-d' ) == date("Y-m-d")) : ?>
                                        <h1 id="home" class="home mb-4 pb-1"><?php the_title(); ?></h1>

                                        <?php
                                        the_content();
                                        the_post_thumbnail(); 
                                        break; // otherwise it loops too much
                                    

                                    else :
                                        echo "<h2>Oeps...</h2>";
                                        echo "<p>Sorry, er is geen challenge gevonden voor vandaag</p>";
                                        break; // otherwise it loops too much and message gets shown * total posts
                                    endif;

                                endwhile;
                            // else :
                            //     echo "<h2>Oeps...</h2>";
                            //     echo "<p>Sorry, er zijn helemaal geen challenges gevonden nergens</p>";
                            endif;
                        ?>
                        
                        <!-- <div id="btn-div" class="mt-5 text-white"><button id="homeBtn" onclick="accepted()" class="btn btn-blue">Challenge accepted?</button></div>                         -->


                        <?php
$cookie = "challenge";
$cookie_value = 1;
?>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="robots" content="noindex">
</head>


                        <?php
                            $cookie = "challenge";
                            $cookie_value = 1;

                            if(isset($_GET[$cookie])){
                                if(!isset($_COOKIE[$cookie])) {
                                    setcookie($cookie, $cookie_value, time() + (86400 * 30), "/"); 
                                    echo "1 challenge aangenomen";

                                } else {
                                    $cookie_value = $_COOKIE[$cookie]+1;
                                    setcookie($cookie, $cookie_value, time() + (86400 * 30), "/"); 
                                    echo $cookie_value . " challenges aangenomen";
                                }

                            } else if(isset($_COOKIE[$cookie])){
                                echo $_COOKIE[$cookie] . " challenges aangenomen";

                            } else {
                                echo "0 challenges aangenomen";
                            }
                        ?>

                        <div id="btn-div" class="mt-5 text-white"><a id="test" onclick="reloadP()" href="?<?php echo $cookie; ?>"><button id="homeBtn" class="btn btn-blue">Neem challenge aan</button></a></div>

                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content col-12 col-md-6 text-center">
                                <span class="close">&times;</span>
                                <?php
                                    echo $lightbox;
                                ?>
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
    
<?php get_footer(); ?>