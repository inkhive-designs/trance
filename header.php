<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package trance
 */
?>

<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>

<?php get_template_part('modules/navigation/menu','primary'); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'trance' ); ?></a>

    <?php get_template_part('modules/header/masthead'); ?>

    <?php get_template_part('modules/search-bar/search','bar'); ?>

	<?php if ( is_home() && get_theme_mod('trance-slide_enable') ) { ?>
	<div id="slider-wrapper">
		<ul class="bxslider">
			<?php 
			for($i = 1; $i <= 3; $i++) { 
				$s = 'trance-slide_' . $i;
				$d = 'trance-desc-' . $i;
				$u = 'trance-url-' . $i;
			?>	
				<li><div class="slide"><a href="<?php echo esc_url( get_theme_mod($u) ); ?>"><img src="<?php echo esc_url( get_theme_mod($s) ); ?>"></a><div class="slide_caption"><a href="<?php echo esc_url( get_theme_mod($u) ); ?>"><p><?php echo esc_html(get_theme_mod($d), 'trance' ); ?> </p></a></div></div>
				 </li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	
	<?php if (is_home() && get_theme_mod('trance-mp-show') != true): ?>
	
	<h2 id="mp-title" class="container">
 		<?php _e('Most Popular','trance'); ?>
 	</h2>

	<div id="most-popular">
	
		<?php get_template_part('most','popular'); ?>
	</div>
	
	<?php endif; ?>
	
	<?php if ( get_theme_mod( 'trance-content-toggle', false ) == false ) { ?>
	<div id="content" class="site-content container">
	<?php 
	} 
	else 
	{ ?>
		<div id="content" class="site-content container">
	<?php } ?>
