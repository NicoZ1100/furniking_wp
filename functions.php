<?php

    add_action( 'after_setup_theme', function(){
        show_admin_bar( false );
        });

	add_action('wp_enqueue_scripts', 'furniking_scripts');

    function furniking_scripts(){
        wp_enqueue_style( 'furniking-style', get_stylesheet_uri());
        wp_enqueue_script('furniking-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
    }

    add_theme_support('custom-logo');
    add_theme_support('menus');

?>