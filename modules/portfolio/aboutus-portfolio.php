<?php if(get_theme_mod('trance_aboutus_portfolio_enable')):?>
<div class="container">
    <div class="col-sm-12 col-sm-12 col-xs-12 about_portfolio_wrapper">
        <?php if(get_theme_mod('trance_aboutus_portfolio_main_title')): ?>
            <h1 class="aboutus-port-title title">

            <?php echo get_theme_mod('trance_aboutus_portfolio_main_title') ?>
            </h1>
        <?php endif;?>
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio_1">
            <?php if(get_theme_mod('trance_aboutus_portfolio_img_set1')): ?>
            <img src="<?php echo get_theme_mod('trance_aboutus_portfolio_img_set1') ?>">
            <?php else:?>
                <img src="<?php echo get_template_directory_uri()."/images/dthumb.jpg"; ?>">
            <?php endif;?>

            <?php if(get_theme_mod('trance_aboutus_portfolio_title1')): ?>
            <div class="portfolio-title">
                <?php echo get_theme_mod('trance_aboutus_portfolio_title1')?>
            </div>
            <?php endif;?>

            <?php if(get_theme_mod('trance_aboutus_portfolio_desc1')): ?>
            <div class="portfolio-desc">
                <?php echo get_theme_mod('trance_aboutus_portfolio_desc1')?>
            </div>
            <?php endif;?>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 portfolio_2">
            <?php if(get_theme_mod('trance_aboutus_portfolio_img_set2')): ?>
            <img src="<?php echo get_theme_mod('trance_aboutus_portfolio_img_set2') ?>">
            <?php else:?>
                <img src="<?php echo get_template_directory_uri()."/images/dthumb.jpg"; ?>">
            <?php endif;?>

            <?php if(get_theme_mod('trance_aboutus_portfolio_title2')): ?>
            <div class="portfolio-title">
                <?php echo get_theme_mod('trance_aboutus_portfolio_title2')?>
            </div>
            <?php endif;?>

            <?php if(get_theme_mod('trance_aboutus_portfolio_desc2')): ?>
            <div class="portfolio-desc">
                <?php echo get_theme_mod('trance_aboutus_portfolio_desc2')?>
            </div>
            <?php endif;?>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 portfolio_3">
            <?php if(get_theme_mod('trance_aboutus_portfolio_img_set3')): ?>
            <img src="<?php echo get_theme_mod('trance_aboutus_portfolio_img_set3') ?>">
            <?php else:?>
                <img src="<?php echo get_template_directory_uri()."/images/dthumb.jpg"; ?>">
            <?php endif;?>

            <?php if(get_theme_mod('trance_aboutus_portfolio_title3')): ?>
            <div class="portfolio-title">
                <?php echo get_theme_mod('trance_aboutus_portfolio_title3')?>
            </div>
            <?php endif;?>
            <?php if(get_theme_mod('trance_aboutus_portfolio_desc3')): ?>
            <div class="portfolio-desc">
                <?php echo get_theme_mod('trance_aboutus_portfolio_desc3')?>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
<?php endif;?>