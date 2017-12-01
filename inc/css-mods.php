<?php
function trance_custom_css_mods() {
    $custom_css = '';
//    if (get_theme_mod('trance_aboutus_skills3_per') != '') :
//        $a = get_theme_mod('trance_aboutus_skills3_per');
//        $b = $a * 6;
//        var_dump($b);
//        $custom_css .= "#aboutus .progress{
//                    	stroke-dasharray: $b px;
//                }";
//    endif;

    wp_add_inline_style( 'trance-main-skin', wp_strip_all_tags($custom_css) );
}

add_action('wp_enqueue_scripts', 'trance_custom_css_mods');
