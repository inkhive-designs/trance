<?php
/**
 * Enqueue scripts and styles.
 */
function trance_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style('bootstrap-style',get_template_directory_uri()."/assets/bootstrap/css/bootstrap.css", array('style'));

    wp_enqueue_style('trance-main-skin',get_template_directory_uri().'/assets/theme-styles/css/default.css');
    wp_enqueue_style( 'hover-style', get_template_directory_uri() . '/assets/css/hover.min.css' );

    wp_enqueue_style('font-awesome', get_template_directory_uri()."/assets/font-awesome/css/font-awesome.min.css", array('trance-main-skin'));

    wp_enqueue_style('slider', get_template_directory_uri()."/assets/slider/jquery.bxslider.css", array('font-awesome'));

    wp_enqueue_script( 'trance-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    wp_enqueue_script("jquery");

    wp_enqueue_script('slider-js', get_template_directory_uri()."/js/jquery.bxslider.js", array('jquery'));

    wp_enqueue_script('nav-js', get_template_directory_uri()."/js/jquery.slicknav.min.js", array('jquery'));

    wp_enqueue_script('trance-custom-js', get_template_directory_uri()."/js/custom.js", array('jquery'), null, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'trance_scripts' );