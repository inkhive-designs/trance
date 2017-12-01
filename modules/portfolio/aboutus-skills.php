<?php if(get_theme_mod('trance_aboutus_skills_enable')):?>
    <div class="container">
        <div class="col-sm-12 col-sm-12 col-xs-12 about_skills_wrapper">
            <?php if(get_theme_mod('trance_aboutus_skills_main_title')): ?>
                <h1 class="aboutus-skills-title title">

                    <?php echo get_theme_mod('trance_aboutus_skills_main_title') ?>
                </h1>
            <?php endif;?>
            <div class="col-md-4 col-sm-4 col-xs-12 skills_wrapper">
                <?php if(get_theme_mod('trance_aboutus_skills1_per')): ?>
                    <div class="skills-per">
                         <span class="per-border">
                            <?php echo get_theme_mod('trance_aboutus_skills1_per')."%"?>
                         </span>
                    </div>
                <?php endif;?>

                <?php if(get_theme_mod('trance_aboutus_skills_title1')): ?>
                    <div class="skills-title">
                        <?php echo get_theme_mod('trance_aboutus_skills_title1')?>
                    </div>
                <?php endif;?>


            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 skills_wrapper">
                <?php if(get_theme_mod('trance_aboutus_skills2_per')): ?>
                    <div class="radial">

                    </div>
                <?php endif;?>

                <?php if(get_theme_mod('trance_aboutus_skills_title2')): ?>
                    <div class="skills-title">
                        <?php echo get_theme_mod('trance_aboutus_skills_title2')?>
                    </div>
                <?php endif;?>

            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 skills_wrapper">
                <svg width="240" height="240" xmlns="http://www.w3.org/2000/svg">
                    <circle id="backdrop" r="90" cy="120" cx="120" stroke-width="3" stroke="#333" fill="none"/>
                    <circle class="progress" r="90" cy="120" cx="120" stroke-width="4" stroke="red"  fill="none"/>
                </svg>
            </div>
        </div>
    </div>
<?php endif;?>