<?php get_header(); ?>

<body class="about">
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1><?=the_title();?></h1>
                <div> <p><?=the_content();?></p> </div> 
            </div>                    
        </div>    
    </div>

<?php get_footer(); ?>