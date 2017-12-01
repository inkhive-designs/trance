<?php

/**
 * Implement the Custom Header feature.
 */
 
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Include the Custom Functions of the Theme.
 */
require get_template_directory() . '/framework/theme-functions.php';
/**
 * Implement the Custom CSS Mods.
 */
require get_template_directory() . '/inc/css-mods.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
