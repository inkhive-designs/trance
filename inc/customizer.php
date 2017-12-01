<?php
/**
 * trance Theme Customizer
 *
 * @package trance
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function trance_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->remove_setting( 'header_textcolor' );
	$wp_customize->remove_section( 'static_front_page' );
	
	$wp_customize->add_section(
	'trance-layout',
	array(
    	'title'			=> __('Layout Settings','trance'),
    	'description'	=> __('Manage the Layout Settings of your site.','trance'),
    	'priority'		=> 2,
    	)
	);
	
	$wp_customize-> add_setting(
    'trance-f-img',
    array(
    	'sanitize_callback'	=> 'trance_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-f-img',
    array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Show Featured Image in the Post.','trance'),
    	'section'	=> 'trance-layout',
    	'priority'	=> 1,
    	)
    );
    
    $wp_customize-> add_setting(
		'trance-sidebar',
		array(
			'default'	=> 'right',
			'sanitize_callback'	=> 'trance_sanitize_select'
		)
    );
    
    $wp_customize-> add_control(
	    'trance-sidebar',
	    array(
		    'type'	=> 'select',
		    'label'	=> __('Select the Sidebar orientation for the site','trance'),
		    'section'	=> 'trance-layout',
		    'priority'	=> 2,
		    'choices'	=> array(
			    	'left'	=> 'Left',
			    	'right'	=> 'Right',
		    ),
	    )
    );
    
    $wp_customize-> add_setting(
	    'trance-head-hover',
	    array(
		    'default'			=> true,
		    'sanitize_callback'	=> 'trance_sanitize_checkbox'
	    )
    );
    
    $wp_customize-> add_control(
	    'trance-head-hover',
	    array(
	    	'type'		=> 'checkbox',
	    	'label'		=> __('Enable Hover effect for Header Image','trance'),
	    	'section'	=> 'trance-layout',
	    	'priority'	=> 3,
    	)
	);
	
	$wp_customize-> add_setting(
	    'trance-content-toggle',
	    array(
		    'default'			=> false,
		    'sanitize_callback'	=> 'trance_sanitize_checkbox'
	    )
    );
    
    $wp_customize-> add_control(
	    'trance-content-toggle',
	    array(
	    	'type'		=> 'checkbox',
	    	'label'		=> __('Make Home Page Content Full Width','trance'),
	    	'section'	=> 'trance-layout',
	    	'priority'	=> 4,
    	)
	);
	
	$wp_customize->add_section(
	'trance-social',
	array(
    	'title'			=> __('Social Settings','trance'),
    	'description'	=> __('Manage the Social Icon Settings of your site.','trance'),
    	'priority'		=> 2,
    	)
	);
	
	$wp_customize-> add_setting(
    'social',
    array(
    	'sanitize_callback'	=> 'trance_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
	    'social',
	    array(
	    	'type'		=> 'checkbox',
	    	'label'		=> __('Enable Social Icons','trance'),
	    	'section'	=> 'trance-social',
	    	'priority'	=> 1,
	    	)
	    );
	    
	    $wp_customize->add_setting(
	    'social-select',
	    array(
	        'default' => 'default',
	        'sanitize_callback'	=> 'trance_sanitize_select_2',
	    )
	);
	 
	$wp_customize->add_control(
	    'social-select',
	    array(
	        'type' => 'select',
	        'label' => __('Select the icons to be displayed','trance'),
	        'section' => 'trance-social',
	        'priority'	=> 2,
	        'choices' => array(
	            'default'		=> 'Default',
	            'boxicons'		=> 'Boxicons',
	        ),
	    )
	);

   
    $wp_customize-> add_setting(
    'trance-facebook',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-facebook',
    array(
    	'label'		=> __('Facebook URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-twitter',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-twitter',
    array(
    	'label'		=> __('Twitter URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-gplus',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-gplus',
    array(
    	'label'		=> __('Google+ URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-instagram',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-instagram',
    array(
    	'label'		=> __('Instagram URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-flickr',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-flickr',
    array(
    	'label'		=> __('Flickr URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-pinterest',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-pinterest',
    array(
    	'label'		=> __('Pinterest URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-youtube',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-youtube',
    array(
    	'label'		=> __('YouTube URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-rss',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-rss',
    array(
    	'label'		=> __('RSS URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-linkedin',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-linkedin',
    array(
    	'label'		=> __('LinkedIn URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-stumbleupon',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-stumbleupon',
    array(
    	'label'		=> __('StumbleUpon URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-mail',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-mail',
    array(
    	'label'		=> __('Contact Page URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-soundcloud',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-soundcloud',
    array(
    	'label'		=> __('SoundCloud URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-vimeo',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-vimeo',
    array(
    	'label'		=> __('Vimeo URL','trance'),
    	'section'	=>	'trance-social',
    	'type'		=>	'text',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-logo',
    	array(
    		'default'			=> '',
    		'sanitize_callback'	=> 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
	new WP_Customize_Image_Control(
        $wp_customize,
        'trance-logo',
        array(
            'label' => __('OR Logo Upload', 'trance'),
            'section' => 'title_tagline',
            'settings' => 'trance-logo'
            )
        )
    );
    
    $wp_customize-> add_setting(
    'trance-favicon',
    	array(
    		'default'			=> '',
    		'sanitize_callback'	=> 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
	new WP_Customize_Image_Control(
        $wp_customize,
        'trance-favicon',
        array(
            'label' => __('Upload a Favicon', 'trance'),
            'description'	=> __( 'Supported formats are .ico, .jpg, .png but .ico is preferred','trance' ),
            'section' => 'title_tagline',
            'settings' => 'trance-favicon'
            )
        )
    );
    
    $wp_customize-> add_panel(
    'trance-slider', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Slider Settings', 'trance'),
    'description'    => '',
    ));
    
    $wp_customize-> add_section(
    'trance-slides',
    array(
    	'title'			=> __('Enable Slider','trance'),
    	'priority'		=> 3,
    	'panel'			=> 'trance-slider',
    	)
    );
    
    $wp_customize-> add_setting(
    'trance-slide_enable',
    array(
    	'sanitize_callback'	=> 'trance_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-slide_enable',
    array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Enable Slider','trance'),
    	'section'	=> 'trance-slides',
    	'priority'	=> 1,
    	)
    );
    
    $wp_customize-> add_section(
    'trance-slide-1', array(
    	'title'		=> __('Slide 1', 'trance'),
    	'panel'		=> 'trance-slider',
    	)
    );
    
    $wp_customize->add_setting( 
    'trance-slide_1', array(
    	'sanitize_callback'	=> 'esc_url_raw',
    	)
     );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'trance-slide_1',
	        array(
	            'label' => __('Slide Upload','trance'),
	            'section' => 'trance-slide-1',
	            'settings' => 'trance-slide_1',
	        )
	    )
	);
	
	$wp_customize-> add_setting( 
	'trance-desc-1', array(
			'sanitize_callback'	=> 'trance_sanitize_text',
			 )
	);
	
	$wp_customize-> add_control(
	'trance-desc-1', array(
		'label'		=> __('Description','trance'),
		'section'	=> 'trance-slide-1',
		'type'		=> 'text',
		)
	);
	
	$wp_customize-> add_setting( 
	'trance-url-1', array(
			'sanitize_callback'	=> 'esc_url_raw',
			 )
	);
	
	$wp_customize-> add_control(
	'trance-url-1', array(
		'label'		=> __('URL','trance'),
		'section'	=> 'trance-slide-1',
		'type'		=> 'text',
		)
	);
	
	$wp_customize-> add_section(
    'trance-slide-2', array(
    	'title'		=> __('Slide 2', 'trance'),
    	'panel'		=> 'trance-slider',
    	)
    );
    
	$wp_customize->add_setting( 
    'trance-slide_2', array(
    	'sanitize_callback'	=> 'esc_url_raw',
    	)
     );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'trance-slide_2',
	        array(
	            'label' => __('Slide Upload','trance'),
	            'section' => 'trance-slide-2',
	            'settings' => 'trance-slide_2',
	        )
	    )
	);
	
	$wp_customize-> add_setting( 
	'trance-desc-2', array(
			'sanitize_callback'	=> 'trance_sanitize_text',
			 )
	);
	
	$wp_customize-> add_control(
	'trance-desc-2', array(
		'label'		=> __('Description','trance'),
		'section'	=> 'trance-slide-2',
		'type'		=> 'text',
		)
	);
	
	$wp_customize-> add_setting( 
	'trance-url-2', array(
			'sanitize_callback'	=> 'esc_url_raw',
			 )
	);
	
	$wp_customize-> add_control(
	'trance-url-2', array(
		'label'		=> __('URL','trance'),
		'section'	=> 'trance-slide-2',
		'type'		=> 'text',
		)
	);
	
	$wp_customize-> add_section(
    'trance-slide-3', array(
    	'title'		=> __('Slide 3', 'trance'),
    	'panel'		=> 'trance-slider',
    	)
    );
    
	$wp_customize->add_setting( 
    'trance-slide_3', array(
    	'sanitize_callback'	=> 'esc_url_raw',
    	)
     );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'trance-slide_3',
	        array(
	            'label' => __('Slide Upload','trance'),
	            'section' => 'trance-slide-3',
	            'settings' => 'trance-slide_3',
	        )
	    )
	);
	
	$wp_customize-> add_setting( 
	'trance-desc-3', array(
			'sanitize_callback'	=> 'trance_sanitize_text',
			 )
	);
	
	$wp_customize-> add_control(
	'trance-desc-3', array(
		'label'		=> __('Description','trance'),
		'section'	=> 'trance-slide-3',
		'type'		=> 'text',
		)
	);
	
	$wp_customize-> add_setting( 
	'trance-url-3', array(
			'sanitize_callback'	=> 'esc_url_raw',
			 )
	);
	
	$wp_customize-> add_control(
	'trance-url-3', array(
		'label'		=> __('URL','trance'),
		'section'	=> 'trance-slide-3',
		'type'		=> 'text',
		)
	);
    //most populer start
    $wp_customize->add_section(
    'trance-mp',
    array(
    	'title'			=> __('Most Popular','trance'),
    	'description'	=> __('Settings for the \'Most Popular\' section of the theme', 'trance'),
    	'priority'		=> 2,
    	)
    );
    
    $wp_customize->add_setting(
    'trance-mp-show',
    array(
    	'default'	=> true,
    	'sanitize_callback'	=> 'trance_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
    'trance-mp-show',
    array(
    	'label'		=> __('Hide Most Popular Section','trance'),
    	'section'	=>	'trance-mp',
    	'type'		=>	'checkbox',
    	)
    );
    
    $wp_customize->add_setting(
    'trance-mpbg',
    array(
    	'default'	=> esc_url( get_template_directory_uri() . '/images/mp-pattern.png' ),
    	'sanitize_callback'	=> 'esc_url_raw',
    	)
    );
    
    $wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'trance-mpbg',
        array(
            'label' 	=> __('The Background Image','trance'),
            'section' 	=> 'trance-mp',
            'settings' 	=> 'trance-mpbg',
        )
    )
);

	$wp_customize->add_setting(
	    'trance-title',
	    array(
	        'default' => '#6f1f1f',
	        'sanitize_callback' => 'sanitize_hex_color',
	        'transport'	=> 'postMessage'
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'trance-title',
	        array(
	            'label' => __('Title Color','trance'),
	            'section' => 'colors',
	            'settings' => 'trance-title',
	            'priority'	=> 2,
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'trance-desc',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color',
	        'transport'	=> 'postMessage'
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'trance-desc',
	        array(
	            'label' => __('Description Color','trance'),
	            'section' => 'colors',
	            'settings' => 'trance-desc',
	            'priority'	=> 3,
	        )
	    )
	);
	
	$wp_customize->add_section(
		'trance-pro',
		array(
			'title'	=> __('Get Trance Plus', 'trance'),
			'description'	=> __('<i style="font-size: 13px;">Thankyou all for showing an amazing response to Trance WordPress theme. Really appreciate it. <br><br>For those who wish to take their site to the next level, I present to you <a href="https://www.inkhive.com/product/trance-plus"><b style="color: #3d88bc">Trance Plus</b></a></i>','trance'),
			'priority'	=> 1
		)
	);
	
	class MyCustom_Customize_Control extends WP_Customize_Control { 
		
		public $type	=	'trance-plus';
		   
	    public function render_content() {
	        ?>
	        <label>
				<a href="https://www.inkhive.com/product/trance-plus" target="_blank"><img src="<?php echo get_template_directory_uri(). '/images/trance-plus.png'; ?>"></a>
				<p>
					The upgrade for trance is now available with some awesome features for your site. Featured Areas, Sliders, Layouts and much more features to beautify your site. <br><br>Also, more features to be added with regular updates.<br><br> Did I mention personal dedicated support for the theme? Dedicated support will be provided with the theme. <br><br> You can get <b>Trance Plus</b> <a href="https://www.inkhive.com/product/trance-plus">here</a>
				</p>
			</label>				
	        <?php
	    }
	}
    
    $wp_customize->add_setting(
	'pro_hide',
	array(
		'sanitize_callback'	=> 'esc_html',
		)
	);
 
	$wp_customize-> add_control( new MyCustom_Customize_Control( $wp_customize,
    'pro_hide',
    array(
    	'type'		=> 'trance-plus',
    	'label'		=> __('Hide s section forever.','trance'),
    	'section'	=> 'trance-pro',
    	'priority'	=> 1,
    	)
    ));
	
	 function trance_sanitize_text( $t ) {
    return wp_kses_post( force_balance_tags( $t ) );
    }
    
    if ( $wp_customize->is_preview() && ! is_admin() ) {
    add_action( 'wp_footer', 'trance_customize_preview',21);
}

	function trance_sanitize_checkbox( $i ) {
	    if ( $i == 1 ) {
	        return 1;
	    } 
	    else {
	        return '';
	    }
	 }
	 
	 function trance_sanitize_select_2( $input ) {
	    $valid = array(
	            'default'		=> 'Default',
	            'boxicons'		=> 'Boxicons'
	        );
	 
	    if ( array_key_exists( $input, $valid ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	}
	 
	function trance_sanitize_select( $input ) {
	    $valid = array(
	        'left' => 'Left',
	        'right' => 'Right',
	    );
	 
	    if ( array_key_exists( $input, $valid ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	}

	//about us template start
    $wp_customize-> add_panel(
        'trance-custom-page', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Custom Page', 'trance'),
        'description'    => '',
    ));

    $wp_customize->add_section(
        'trance_aboutus_page_sec',
        array(
            'title'			=> __('About Us','trance'),
            'priority'		=> 1,
            'panel'        => 'trance-custom-page',
        )
    );

    class MyCustom_war_Customize_Control extends WP_Customize_Control {

        public $type	=	'trance-plus';

        public function render_content() {
            ?>
            <label>
                <strong>Warning!</strong>
               <p>
                   To use this Feature, go to Pages - Add New, and create a new page and set its Template to About Us.
               </p>
            </label>
            <?php
        }
    }
    $wp_customize->add_setting(
        'trance-aboutus-war',
        array(
            'sanitize_callback'	=> 'esc_html',
        )
    );

    $wp_customize-> add_control( new MyCustom_war_Customize_Control( $wp_customize,
        'trance-aboutus-war',
        array(
            'type'		=> 'trance-plus',
            'label'		=> __('Warning','trance'),
            'section'	=> 'trance_aboutus_page_sec',
            'priority'	=> 1,

        )
    ));

    //About me section start//

    $wp_customize->add_setting('trance_aboutus_aboutme_enable',
        array(
            'sanitize_callback' => 'trance_sanitize_checkbox'
        ));
    $wp_customize->add_control('trance_aboutus_aboutme_enable',
        array(
            'setting' => 'trance_aboutus_aboutme_enable',
            'section' => 'trance_aboutus_page_sec',
            'label' => __('Enable About Me', 'trance'),
            'type' => 'checkbox',
            'default' => false,

        )
    );
    //image-upload//
    $wp_customize->add_setting(
        'trance_aboutme_img_set'
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'trance_aboutme_img_set',
            array(
                'label'      => __( 'Upload a About Me Image', 'trance' ),
                'section'    => 'trance_aboutus_page_sec',
                'settings'   => 'trance_aboutme_img_set',
                'type'       => 'image',
                'active_callback' => 'trance_aboutus_aboutme_active_callback'

            )
        )
    );

    $wp_customize->add_setting('trance_aboutme_background_image',
        array(
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'trance_aboutme_background_image',
            array (
                'setting' => 'trance_aboutme_background_image',
                'section' => 'trance_aboutus_page_sec',
                'label' => __('Upload a About Me background Image', 'trance'),
                'description' => __('Upload an image to display in background of <strong>About Me</strong> section', 'trance'),
                'active_callback' => 'trance_aboutus_aboutme_active_callback'
            )
        )
    );

    function trance_aboutus_aboutme_active_callback( $control ) {
        $option = $control->manager->get_setting('trance_aboutus_aboutme_enable');
        return $option->value() == true;
    }



//About us social icons
    $wp_customize->add_setting('trance_aboutus_social_enable',
        array(
            'sanitize_callback' => 'trance_sanitize_checkbox'
        ));
    $wp_customize->add_control('trance_aboutus_social_enable',
        array(
            'setting' => 'trance_aboutus_social_enable',
            'section' => 'trance_aboutus_page_sec',
            'label' => __('Enable Social Icons', 'trance'),
            'type' => 'checkbox',
            'default' => false,
        )
    );

    $aboutus_social_networks = array( //Redefinied in Sanitization Function.
        'none' => __('-','trance'),
        'facebook' => __('Facebook','trance'),
        'twitter' => __('Twitter','trance'),
        'google-plus' => __('Google Plus','trance'),
        'instagram' => __('Instagram','trance'),
        'rss' => __('RSS Feeds','trance'),
        'vine' => __('Vine','trance'),
        'vimeo-square' => __('Vimeo','trance'),
        'youtube' => __('Youtube','trance'),
        'flickr' => __('Flickr','trance'),
    );
    //social icons style
    $aboutus_social_style = array(
        'hvr-outline-out'  => __('Default', 'trance'),
        //'hvr-ripple-out'  => __('Default', 'trance'),
        'hvr-back-pulse'   => __('Style 1', 'trance'),
        'hvr-curl-bottom-left'   => __('Style 2', 'trance'),
        'hvr-outline-in'   => __('Style 3', 'trance'),
        'hvr-glow'   => __('Style 4', 'trance'),

    );
    $wp_customize->add_setting(
        'trance_aboutus_social_icon_style_set', array(
        'sanitize_callback' => 'trance_sanitize_aboutus_social_style',
        'default' => 'hvr-outline-out'
    ));

    function trance_sanitize_aboutus_social_style( $input ) {
        if ( in_array($input, array('hvr-back-pulse','hvr-curl-bottom-left','hvr-outline-out','hvr-outline-in','hvr-glow') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control( 'trance_aboutus_social_icon_style_set', array(
        'settings' => 'trance_aboutus_social_icon_style_set',
        'label' => __('Social Icon Style ','trance'),
        'description' => __('You can choose your icon style','trance'),
        'section' => 'trance_aboutus_page_sec',
        'type' => 'select',
        'choices' => $aboutus_social_style,
        'active_callback' => 'trance_aboutus_social_active_callback'
    ));
    $aboutus_social_count = count($aboutus_social_networks);

    for ($x = 1 ; $x <= ($aboutus_social_count - 3) ; $x++) :

        $wp_customize->add_setting(
            'trance_aboutus_social_'.$x, array(
            'sanitize_callback' => 'trance_sanitize_aboutus_social',
            'default' => 'none'
        ));

        $wp_customize->add_control( 'trance_aboutus_social_'.$x, array(
            'settings' => 'trance_aboutus_social_'.$x,
            'label' => __('Icon ','trance').$x,
            'section' => 'trance_aboutus_page_sec',
            'type' => 'select',
            'choices' => $aboutus_social_networks,
            'active_callback' => 'trance_aboutus_social_active_callback'

        ));

        $wp_customize->add_setting(
            'trance_aboutus_social_url'.$x, array(
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control( 'trance_aboutus_social_url'.$x, array(
            'settings' => 'trance_aboutus_social_url'.$x,
            'description' => __('Icon ','trance').$x.__(' Url','trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'url',
            'choices' => $aboutus_social_networks,
            'active_callback' => 'trance_aboutus_social_active_callback'
        ));

    endfor;

    function trance_sanitize_aboutus_social( $input ) {
        $aboutus_social_networks = array(
            'none' ,
            'facebook',
            'twitter',
            'google-plus',
            'instagram',
            'rss',
            'vine',
            'vimeo-square',
            'youtube',
            'flickr'
        );
        if ( in_array($input, $aboutus_social_networks) )
            return $input;
        else
            return '';
    }

    function trance_aboutus_social_active_callback( $control ) {
        $option = $control->manager->get_setting('trance_aboutus_social_enable');
        return $option->value() == true;
    }
    //About us portfolio
    $wp_customize->add_setting('trance_aboutus_portfolio_enable',
        array(
            'sanitize_callback' => 'trance_sanitize_checkbox'
        ));
    $wp_customize->add_control('trance_aboutus_portfolio_enable',
        array(
            'setting' => 'trance_aboutus_portfolio_enable',
            'section' => 'trance_aboutus_page_sec',
            'label' => __('Enable About Us Portfolio', 'trance'),
            'type' => 'checkbox',
            'default' => false,
        )
    );
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_main_title',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_portfolio_main_title', array(
            'setting' => 'trance_aboutus_portfolio_main_title',
            'label' => __('Title for the Portfolio Section', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_portfolio_active_callback'
        )
    );

//portfolio 1
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_img_set1'
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'trance_aboutus_portfolio_img_set1',
            array(
                'label'      => __( 'Upload a Portfolio Image 1', 'trance' ),
                'description' => __('Image Size (340 x 283) Pixels', 'trance' ),
                'section'    => 'trance_aboutus_page_sec',
                'settings'   => 'trance_aboutus_portfolio_img_set1',
                'type'       => 'image',
                'active_callback' => 'trance_aboutus_portfolio_active_callback'

            )
        )
    );

    $wp_customize->add_setting(
        'trance_aboutus_portfolio_title1',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_portfolio_title1', array(
            'setting' => 'trance_aboutus_portfolio_title1',
            'label' => __('Title for the Portfolio 1', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_portfolio_active_callback'
        )
    );
    //decs
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_desc1',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_portfolio_desc1', array(
            'setting' => 'trance_aboutus_portfolio_desc1',
            'label' => __('Description for the Portfolio 1', 'trance'),
            'description' => __('Max 60 words.', 'trance' ),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'textarea',
            'active_callback' => 'trance_aboutus_portfolio_active_callback'
        )
    );

    //portfolio 2
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_img_set2'
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'trance_aboutus_portfolio_img_set2',
            array(
                'label'      => __( 'Upload a Portfolio Image 2', 'trance' ),
                'description' => __('Image Size (340 x 283) Pixels','trance'),
                'section'    => 'trance_aboutus_page_sec',
                'settings'   => 'trance_aboutus_portfolio_img_set2',
                'type'       => 'image',
                'active_callback' => 'trance_aboutus_portfolio_active_callback'

            )
        )
    );
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_title2',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_portfolio_title2', array(
            'setting' => 'trance_aboutus_portfolio_title2',
            'label' => __('Title for the Portfolio 2', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_portfolio_active_callback'
        )
    );
    //decs
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_desc2',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_portfolio_desc2', array(
            'setting' => 'trance_aboutus_portfolio_desc2',
            'label' => __('Description for the Portfolio 2', 'trance'),
            'description' => __('Max 60 words.', 'trance' ),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'textarea',
            'active_callback' => 'trance_aboutus_portfolio_active_callback'
        )
    );

    //portfolio 3
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_img_set3'
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'trance_aboutus_portfolio_img_set3',
            array(
                'label'      => __( 'Upload a Portfolio Image 3', 'trance' ),
                'description' => __('Image Size (340 x 283) Pixels','trance'),
                'section'    => 'trance_aboutus_page_sec',
                'settings'   => 'trance_aboutus_portfolio_img_set3',
                'type'       => 'image',
                'active_callback' => 'trance_aboutus_portfolio_active_callback'

            )
        )
    );
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_title3',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_portfolio_title3', array(
            'setting' => 'trance_aboutus_portfolio_title3',
            'label' => __('Title for the Portfolio 3', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_portfolio_active_callback'
        )
    );
    //decs
    $wp_customize->add_setting(
        'trance_aboutus_portfolio_desc3',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_portfolio_desc3', array(
            'setting' => 'trance_aboutus_portfolio_desc3',
            'label' => __('Description for the Portfolio 3', 'trance'),
            'description' => __('Max 60 words.', 'trance' ),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'textarea',
            'active_callback' => 'trance_aboutus_portfolio_active_callback'
        )
    );


    function trance_aboutus_portfolio_active_callback( $control ) {
        $option = $control->manager->get_setting('trance_aboutus_portfolio_enable');
        return $option->value() == true;
    }

    //about us skills
    $wp_customize->add_setting('trance_aboutus_skills_enable',
        array(
            'sanitize_callback' => 'trance_sanitize_checkbox'
        ));
    $wp_customize->add_control('trance_aboutus_skills_enable',
        array(
            'setting' => 'trance_aboutus_skills_enable',
            'section' => 'trance_aboutus_page_sec',
            'label' => __('Enable Skills', 'trance'),
            'type' => 'checkbox',
            'default' => false,
        )
    );

    $wp_customize->add_setting(
        'trance_aboutus_skills_main_title',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_skills_main_title', array(
            'setting' => 'trance_aboutus_skills_main_title',
            'label' => __('Title for the Skills Section', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_skills_active_callback'
        )
    );
    //skills 1
    $wp_customize->add_setting(
        'trance_aboutus_skills_title1',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_skills_title1', array(
            'setting' => 'trance_aboutus_skills_title1',
            'label' => __('Title for the Skills 1', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_skills_active_callback'
        )
    );

    $wp_customize->add_setting(
        'trance_aboutus_skills1_per',
        array(
            'default' => '0',
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'trance_aboutus_skills1_per', array(
            'settings' => 'trance_aboutus_skills1_per',
            'label'    => __( 'Percentage of Skill 1','etrigan' ),
            'description' => __('Choose your criteria.','trance'),
            'section'  => 'trance_aboutus_page_sec',
            'type'     => 'number',
            'active_callback' => 'trance_aboutus_skills_active_callback'
        )
    );


    //skills 2
    $wp_customize->add_setting(
        'trance_aboutus_skills_title2',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_skills_title2', array(
            'setting' => 'trance_aboutus_skills_title2',
            'label' => __('Title for the Skills 2', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_skills_active_callback'
        )
    );
    $wp_customize->add_setting(
        'trance_aboutus_skills2_per',
        array(
            'default' => '0',
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'trance_aboutus_skills2_per', array(
            'settings' => 'trance_aboutus_skills2_per',
            'label'    => __( 'Percentage of Skill 2','etrigan' ),
            'description' => __('Choose your criteria.','trance'),
            'section'  => 'trance_aboutus_page_sec',
            'type'     => 'number',
            'active_callback' => 'trance_aboutus_skills_active_callback'
        )
    );
    //skills 3
    $wp_customize->add_setting(
        'trance_aboutus_skills_title3',
        array('sanitize_callback' => 'sanitize_text_field')
    );

    $wp_customize->add_control(
        'trance_aboutus_skills_title3', array(
            'setting' => 'trance_aboutus_skills_title3',
            'label' => __('Title for the Skills 3', 'trance'),
            'section' => 'trance_aboutus_page_sec',
            'type' => 'text',
            'active_callback' => 'trance_aboutus_skills_active_callback'
        )
    );
    $wp_customize->add_setting(
        'trance_aboutus_skills3_per',
        array(
            'default' => '0',
            'sanitize_callback' => 'absint',
        )
    );

    $wp_customize->add_control(
        'trance_aboutus_skills3_per', array(
            'settings' => 'trance_aboutus_skills3_per',
            'label'    => __( 'Percentage of Skill 3','etrigan' ),
            'description' => __('Choose your criteria.','trance'),
            'section'  => 'trance_aboutus_page_sec',
            'type'     => 'number',
            'active_callback' => 'trance_aboutus_skills_active_callback'
        )
    );
    function trance_aboutus_skills_active_callback( $control ) {
        $option = $control->manager->get_setting('trance_aboutus_skills_enable');
        return $option->value() == true;
    }

}


add_action( 'customize_register', 'trance_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function trance_customize_preview_js() {
	wp_enqueue_script( 'trance_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'trance_customize_preview_js' );
