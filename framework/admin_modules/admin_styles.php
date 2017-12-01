<?php
function trance_scripts_styles() {
    wp_enqueue_style( 'trance-fonts', trance_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'trance_scripts_styles' );