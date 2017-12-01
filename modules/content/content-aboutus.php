<!--about us page builder start-->
<?php if ( get_theme_mod('trance_aboutus_aboutme_enable')): ?>
    <div id="aboutus">
        <h1 class="aboutus-title title">
            <?php echo the_title(); ?>
        </h1>

        <div class="layer"></div>
        <div class="col-md-12 aboutus-wrapper">
            <?php if ( get_theme_mod('trance_aboutme_img_set')): ?>
                <div class="f-image col-md-4 col-sm-4">
                    <img src="<?php echo get_theme_mod('trance_aboutme_img_set')?>">
                </div>
            <?php endif;?>
                <?php $class = get_theme_mod('trance_aboutme_img_set') ? 'col-md-8 col-sm-8' : 'col-md-12 centered'?>

                    <div class ="<?php echo $class;?> aboutus-content">
                        <div class="excerpt">
                            <?php
                            $content = the_content();
                            echo substr($content, 0, 200); ?>
                        </div>

                        <?php if (get_theme_mod('trance_aboutus_social_enable')) : ?>
                            <div class="social-icons">
                                <?php get_template_part('modules/social/aboutus','social'); ?>
                            </div>
                        <?php endif; ?>

                    </div>

        </div>
        <div class="aboutus_portfolio">
         <?php get_template_part('modules/portfolio/aboutus','portfolio'); ?>
        </div>
        <div class="aboutus_skills">
            <?php get_template_part('modules/portfolio/aboutus','skills'); ?>
        </div>
    </div>
<?php endif; ?>

<!--about us page builder end-->