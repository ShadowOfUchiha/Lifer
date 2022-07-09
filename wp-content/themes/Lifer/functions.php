<?php

/**
 * Add an HTML class to MediaElement.js container elements to aid styling.
 *
 * Extends the core _wpmejsSettings object to add a new feature via the
 * MediaElement.js plugin API.
 */
add_action( 'wp_print_footer_scripts', 'mytheme_mejs_add_container_class' );

function mytheme_mejs_add_container_class() {
	if ( ! wp_script_is( 'mediaelement', 'done' ) ) {
		return;
	}
	?>
	<script>
	(function() {
		var settings = window._wpmejsSettings || {};
		settings.features = settings.features || mejs.MepDefaults.features;
		settings.features.push( 'exampleclass' );
		MediaElementPlayer.prototype.buildexampleclass = function( player ) {
			player.container.addClass( 'mytheme-mejs-container' );
		};
	})();
	</script>
	<?php 
}

/*
add_theme_support( 'post-thumbnails' );

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
      )
    );
}
add_action( 'init', 'register_my_menus' );

add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

function my_enqueue_styles() {
	wp_enqueue_style( 
		'my-mediaelement', 
		trailingslashit( get_template_directory_uri() ) . 'css/mediaelement/mediaelement.min.css',
		null,
		'20130902'
	);
}

add_action( 'wp_enqueue_scripts', 'my_deregister_styles' );

function my_deregister_styles() {
	wp_deregister_style( 'mediaelement' );
	wp_deregister_style( 'wp-mediaelement' );
}
*/
?>