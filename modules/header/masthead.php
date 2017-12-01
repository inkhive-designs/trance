<header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
        <?php if (get_theme_mod("trance-logo")) { ?>
            <div id = "logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src ="<?php echo esc_url(get_theme_mod('trance-logo')); ?>"></a>
            </div>
        <?php }
        else { ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        <?php } ?>
    </div><!-- .site-branding -->
    <div id="header-image"></div>
</header><!-- #masthead -->