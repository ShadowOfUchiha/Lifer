<?php get_header();
$published_posts = wp_count_posts()->publish; // gets the total posts for challenge #? 
$published_posts /= 2; // divided by 2 bcs there will be always a english version of the same challenge
$published_posts -= 1;

// check if posts = true and while its true loops through the posts and searches for matching date
// after that get the category and put it in $theme then send it to js and do onload in body to add styling
if (have_posts()) :
    while (have_posts()) : the_post();

        if (get_the_date('Y-m-d') == date("Y-m-d")) {

            $cato = get_the_category();
            $theme = $cato[0]->name;
            $func = "javascript:change_theme('$theme')";
        }

    endwhile;
endif;
?>

<?php 
        // THIS IS INSIDE THE WORDPRESS EDITOR POST
        
    // if (isset($_COOKIE["challenge"])) {
    //     $cookie = $_COOKIE["challenge"] + 1;
    // } else {
    //     $cookie = 1; // will be called in wordpress editor
    // }

?>


<!-- <body onLoad="<?=$func;?>"> -->

<body onLoad="">

    <header id="header">
        <div id="header-img">

            <!-- outputs a list of languages flags -->
            <ul id="trans_wrapper">
                <?php pll_the_languages( array( 'display_names_as' => 'slug' ) ); ?>
            </ul>

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
                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
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
                            // while (have_posts()) : the_post();
                            //     if (get_the_title() == "Lightbox") :

                            //         $lightbox = get_the_content();

                            //     endif;
                            // endwhile;

                            while (have_posts()) : the_post();

                                if (get_the_date('Y-m-d') == date("Y-m-d")) : ?>
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
                        <!-- <div id="btn-div" class="mt-5 text-white"><button id="homeBtn" onclick="accepted()" class="btn btn-blue">Challenge accepted?</button></div>-->
                        
                        <?php
                            if (!isset($_COOKIE["pjAcceptCookie"])) {
                                //echo "<div class=\"alert alert-danger\" role=\"alert\">Om een challenge te kunnen accepteren moet u cookies accepteren</div>";
                                echo "<div id=\"btn-div\" class=\"mt-5 text-white\"><button id=\"homeBtn\" class=\"btn btn-blue\" disabled>Neem challenge aan</button></div>";
                            }else{
                                echo "<div id=\"btn-div\" class=\"mt-5 text-white\"><a id=\"test\" href=\"?challenge&popup\"><button id=\"homeBtn\" class=\"btn btn-blue\">Neem challenge aan</button></a></div>";
                            }
                        ?>

                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content col-12 col-md-6 text-center">
                                <span class="close">&times;</span>
                                <?php
                                    if (have_posts()) : // otherwise shortcode doesnt work inside lightbox
                                        while (have_posts()) : the_post();
                                            if (get_the_title() == "Lightbox") :
            
                                                the_content();
            
                                            endif;
                                        endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php get_footer(); ?>