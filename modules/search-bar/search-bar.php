<div id="search-wrapper" class="container">
    <div class="search-icon">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/images/search.png" ); ?>">
    </div>

    <div id="social-icons" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php if (get_theme_mod('social')) {
            get_template_part('modules/social/social');
        }
        ?>
    </div>

    <div id="search-bar" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="searchform">
            <form method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>/">
                <div><input type="text" size="18" value="" name="s" id="s" />
                    <button type="submit" class="search-submit"><?php _e('Search','trance'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>