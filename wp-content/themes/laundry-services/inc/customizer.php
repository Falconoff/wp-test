<?php
/**
 * Laundry Services Theme Customizer
 *
 * @package Laundry Services
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Laundry_Services_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Laundry_Services_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Laundry_Services_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Laundry Services Pro', 'laundry-services' ),
					'pro_text' => esc_html__( 'Go Pro', 'laundry-services' ),
					'pro_url'  => esc_url( 'https://www.logicalthemes.com/product/themes/laundry-wp-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'laundry-services-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'laundry-services-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Laundry_Services_Customize::get_instance();

function laundry_services_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'laundry_services_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => esc_html__( 'LT Settings', 'laundry-services' ),
	) );

	//Select width layout
    $wp_customize->add_setting('laundry_services_width_options',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control('laundry_services_width_options',array(
        'type' => 'radio',
        'label' => __('Select Width Layout','laundry-services'),
        'section' => 'laundry_services_left_right',
        'choices' => array(
        	'Full Width' => esc_html__('Full Width','laundry-services'),
            'Contained Width' => esc_html__('Contained Width','laundry-services'),
            'Boxed Width' => esc_html__('Boxed Width','laundry-services'),
        ),
	) );

	//Layout Setting
	$wp_customize->add_section( 'laundry_services_left_right' , array(
    	'title'      => esc_html__( 'General Settings', 'laundry-services' ),
		'priority'   => null,
		'panel' => 'laundry_services_panel_id'
	) );

	$wp_customize->add_setting('laundry_services_theme_options',array(
        'default' => 'One Column',
        'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control('laundry_services_theme_options',array(
        'type' => 'radio',
        'description' => __( 'Choose sidebar between different options', 'laundry-services' ),
        'label' => esc_html__( 'Post Sidebar Layout.', 'laundry-services' ),
        'section' => 'laundry_services_left_right',
        'choices' => array(
            'One Column' => esc_html__('One Column ','laundry-services'),
            'Three Columns' => esc_html__('Three Columns','laundry-services'),
            'Four Columns' => esc_html__('Four Columns','laundry-services'),
            'Right Sidebar' => esc_html__('Right Sidebar','laundry-services'),
            'Left Sidebar' => esc_html__('Left Sidebar','laundry-services'),
            'Grid Layout' => esc_html__('Grid Layout','laundry-services')
        ),
	));

	$wp_customize->add_setting('laundry_services_dropdown_anim',array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control('laundry_services_dropdown_anim', array(
		'section'  => 'laundry_services_left_right',
		'label'    => __( 'Submenu Dropdown Effect','laundry-services'),
		'type'     => 'select',
		'choices'  => array(
			'bounceInUp' => __('bounceInUp', 'laundry-services'),
			'zoomIn' => __('zoomIn', 'laundry-services'),
			'flip-up' => __('flip-up', 'laundry-services'),
			'none' => __('none', 'laundry-services')
		)
	));

	$laundry_services_font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'laundry_services_typography', array(
    	'title'      => __( 'Typography', 'laundry-services' ),
		'priority'   => null,
		'panel' => 'laundry_services_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'laundry_services_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_paragraph_color', array(
		'label' => __('Paragraph Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('laundry_services_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_paragraph_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( 'Paragraph Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	$wp_customize->add_setting('laundry_services_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','laundry-services'),
		'section'	=> 'laundry_services_typography',
		'setting'	=> 'laundry_services_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'laundry_services_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_atag_color', array(
		'label' => __('"a" Tag Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('laundry_services_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_atag_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( '"a" Tag Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'laundry_services_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_li_color', array(
		'label' => __('"li" Tag Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('laundry_services_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_li_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( '"li" Tag Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'laundry_services_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_h1_color', array(
		'label' => __('H1 Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('laundry_services_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_h1_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( 'H1 Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('laundry_services_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_h1_font_size',array(
		'label'	=> __('H1 Font Size','laundry-services'),
		'section'	=> 'laundry_services_typography',
		'setting'	=> 'laundry_services_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'laundry_services_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_h2_color', array(
		'label' => __('H2 Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('laundry_services_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_h2_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( 'H2 Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('laundry_services_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_h2_font_size',array(
		'label'	=> __('H2 Font Size','laundry-services'),
		'section'	=> 'laundry_services_typography',
		'setting'	=> 'laundry_services_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'laundry_services_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_h3_color', array(
		'label' => __('H3 Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('laundry_services_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_h3_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( 'H3 Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('laundry_services_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_h3_font_size',array(
		'label'	=> __('H3 Font Size','laundry-services'),
		'section'	=> 'laundry_services_typography',
		'setting'	=> 'laundry_services_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'laundry_services_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_h4_color', array(
		'label' => __('H4 Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('laundry_services_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_h4_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( 'H4 Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('laundry_services_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_h4_font_size',array(
		'label'	=> __('H4 Font Size','laundry-services'),
		'section'	=> 'laundry_services_typography',
		'setting'	=> 'laundry_services_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'laundry_services_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_h5_color', array(
		'label' => __('H5 Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('laundry_services_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_h5_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( 'H5 Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('laundry_services_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_h5_font_size',array(
		'label'	=> __('H5 Font Size','laundry-services'),
		'section'	=> 'laundry_services_typography',
		'setting'	=> 'laundry_services_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'laundry_services_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_h6_color', array(
		'label' => __('H6 Color', 'laundry-services'),
		'section' => 'laundry_services_typography',
		'settings' => 'laundry_services_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('laundry_services_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control(
	    'laundry_services_h6_font_family', array(
	    'section'  => 'laundry_services_typography',
	    'label'    => __( 'H6 Fonts','laundry-services'),
	    'type'     => 'select',
	    'choices'  => $laundry_services_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('laundry_services_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_h6_font_size',array(
		'label'	=> __('H6 Font Size','laundry-services'),
		'section'	=> 'laundry_services_typography',
		'setting'	=> 'laundry_services_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('laundry_services_topbar',array(
		'title'	=> esc_html__('Header','laundry-services'),
		'priority'	=> null,
		'panel' => 'laundry_services_panel_id',
	));

	$wp_customize->add_setting( 'laundry_services_sticky_header',array(
		'default'	=> false,
      	'sanitize_callback'	=> 'laundry_services_sanitize_checkbox'
    ) );
    $wp_customize->add_control('laundry_services_sticky_header',array(
    	'type' => 'checkbox',
    	'description' => __( 'Click on the checkbox to enable sticky header.', 'laundry-services' ),
        'label' => __( 'Sticky Header','laundry-services' ),
        'section' => 'laundry_services_topbar'
    ));

	$wp_customize->add_setting( 'laundry_services_sticky_header_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_sticky_header_color', array(
		'label' => __('Sticky Header BG Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_services_sticky_header_color',
	)));

	$wp_customize->add_setting('laundry_services_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_btn_text',array(
		'label'	=> __('Add Button Text','laundry-services'),
		'section' => 'laundry_services_topbar',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('laundry_services_btn_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_btn_link',array(
		'label'	=> __('Button Link','laundry-services'),
		'section' => 'laundry_services_topbar',
		'type'	 => 'text'
	));

	$wp_customize->add_setting( 'laundry_header_bg', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_bg', array(
		'label' => __('BG Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_bg',
	)));


	$wp_customize->add_setting( 'laundry_header_bg_brd', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_bg_brd', array(
		'label' => __('BG Border Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_bg_brd',
	)));

	$wp_customize->add_setting( 'laundry_header_menu_col', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_menu_col', array(
		'label' => __('Menu Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_menu_col',
	)));

	$wp_customize->add_setting( 'laundry_header_menuactivehover_col', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_menuactivehover_col', array(
		'label' => __('Menu Active & Hover Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_menuactivehover_col',
	)));

	$wp_customize->add_setting( 'laundry_header_submenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_submenu_color', array(
		'label' => __('Submenu Text Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_submenu_color',
	)));


	$wp_customize->add_setting( 'laundry_header_submenu_bg_col', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_submenu_bg_col', array(
		'label' => __('Submenu BG Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_submenu_bg_col',
	)));

	$wp_customize->add_setting( 'laundry_header_submenu_txthovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_submenu_txthovercolor', array(
		'label' => __('Submenu Text Hover Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_submenu_txthovercolor',
	)));


	$wp_customize->add_setting( 'laundry_header_submenubg_hover', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_submenubg_hover', array(
		'label' => __('Submenu BG Hover Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_submenubg_hover',
	)));

	$wp_customize->add_setting( 'laundry_header_btn_text_col', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_btn_text_col', array(
		'label' => __('Button Text Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_btn_text_col',
	)));

	$wp_customize->add_setting( 'laundry_header_btn_bg_col', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_btn_bg_col', array(
		'label' => __('Button BG Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_btn_bg_col',
	)));

	$wp_customize->add_setting( 'laundry_header_btn_texthover_col', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_header_btn_texthover_col', array(
		'label' => __('Button Text Hover Color', 'laundry-services'),
		'section' => 'laundry_services_topbar',
		'settings' => 'laundry_header_btn_texthover_col',
	)));

	//home page slider
	$wp_customize->add_section( 'laundry_services_slidersettings' , array(
    	'title'      => esc_html__( 'Slider Settings', 'laundry-services' ),
		'priority'   => null,
		'panel' => 'laundry_services_panel_id'
	) );

	$wp_customize->add_setting('laundry_services_slider_hide_show',array(
       'default' => false,
       'sanitize_callback'	=> 'laundry_services_sanitize_checkbox'
	));
	$wp_customize->add_control('laundry_services_slider_hide_show',array(
	   'type' => 'checkbox',
	   'description' => __( 'Click on the checkbox to enable slider.', 'laundry-services' ),
	   'label' => esc_html__('Show / Hide slider','laundry-services'),
	   'section' => 'laundry_services_slidersettings',
	));

	//This is onload transaction effect
	$wp_customize->add_setting('laundry_services_slider_animation',array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'laundry_services_sanitize_choices'
	));
	$wp_customize->add_control('laundry_services_slider_animation', array(
		'section'  => 'laundry_services_slidersettings',
		'label'    => __( 'Onload Transaction Effect','laundry-services'),
		'type'     => 'select',
		'choices'  => array(
			'bounceInLeft' => __('bounceInLeft', 'laundry-services'),
			'bounceInRight' => __('bounceInRight', 'laundry-services'),
			'bounceInUp' => __('bounceInUp', 'laundry-services'),
			'bounceInDown' => __('bounceInDown', 'laundry-services'),
			'zoomIn' => __('zoomIn', 'laundry-services'),
			'zoomOut' => __('zoomOut', 'laundry-services'),
			'fadeInLeft' => __('fadeInLeft', 'laundry-services'),
			'fadeInRight' => __('fadeInRight', 'laundry-services'),
			'fadeInUp' => __('fadeInUp', 'laundry-services'),
			'fadeInDown' => __('fadeInDown', 'laundry-services'),
			'flip-up' => __('flip-up', 'laundry-services'),
			'none' => __('none', 'laundry-services')
		)
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'laundry_services_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'laundry_services_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'laundry_services_slider_page' . $count, array(
			'label'    => esc_html__( 'Select Slider Page', 'laundry-services' ),
			'section'  => 'laundry_services_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}


	$wp_customize->add_setting( 'laundry_slider_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_title_color', array(
		'label' => __('Title Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_title_color',
	)));

	$wp_customize->add_setting( 'laundry_slider_description_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_description_color', array(
		'label' => __('Description Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_description_color',
	)));

	$wp_customize->add_setting( 'laundry_slider_btntext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_btntext_color', array(
		'label' => __('Button Text Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_btntext_color',
	)));

	$wp_customize->add_setting( 'laundry_slider_btnbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_btnbg_color', array(
		'label' => __('Button BG Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_btnbg_color',
	)));

	$wp_customize->add_setting( 'laundry_slider_btntxthov_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_btntxthov_color', array(
		'label' => __('Button Text Hover Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_btntxthov_color',
	)));

	$wp_customize->add_setting( 'laundry_slider_btnbghov_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_btnbghov_color', array(
		'label' => __('Button BG Hover Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_btnbghov_color',
	)));

	$wp_customize->add_setting( 'laundry_slider_pagination_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_pagination_color', array(
		'label' => __('Pagination Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_pagination_color',
	)));

	$wp_customize->add_setting( 'laundry_slider_activepagination_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_slider_activepagination_color', array(
		'label' => __('Active Pagination Color', 'laundry-services'),
		'section' => 'laundry_services_slidersettings',
		'settings' => 'laundry_slider_activepagination_color',
	)));
	


	//home page feature
	$wp_customize->add_section( 'laundry_services_featuresettings' , array(
    	'title'      => esc_html__( 'Feature Settings', 'laundry-services' ),
		'priority'   => null,
		'panel' => 'laundry_services_panel_id'
	) );

	$wp_customize->add_setting('laundry_services_btn_featuresubheading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_btn_featuresubheading',array(
		'label'	=> __('Sub Heading','laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('laundry_services_btn_featureheading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_btn_featureheading',array(
		'label'	=> __('Heading','laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'type'	 => 'text'
	));
	
	
	


	$wp_customize->add_setting( 'laundry_services_feature_page1', array(
		'default'           => '',
		'sanitize_callback' => 'laundry_services_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'laundry_services_feature_page1', array(
		'label'    => esc_html__( 'Select Feature Page', 'laundry-services' ),
		'section'  => 'laundry_services_featuresettings',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('laundry_services_feature_icon1',array(
		'default'	=> 'fa fa-home',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_feature_icon1',array(
		'label'	=> __('Icon 1','laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'type'	 => 'text'
	));

	$wp_customize->add_setting( 'laundry_services_feature_page2', array(
		'default'           => '',
		'sanitize_callback' => 'laundry_services_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'laundry_services_feature_page2', array(
		'label'    => esc_html__( 'Select Feature Page', 'laundry-services' ),
		'section'  => 'laundry_services_featuresettings',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('laundry_services_feature_icon2',array(
		'default'	=> 'fa fa-home',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_feature_icon2',array(
		'label'	=> __('Icon 2','laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'type'	 => 'text'
	));

	$wp_customize->add_setting( 'laundry_services_feature_page3', array(
		'default'           => '',
		'sanitize_callback' => 'laundry_services_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'laundry_services_feature_page3', array(
		'label'    => esc_html__( 'Select Feature Page', 'laundry-services' ),
		'section'  => 'laundry_services_featuresettings',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('laundry_services_feature_icon3',array(
		'default'	=> 'fa fa-home',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_feature_icon3',array(
		'label'	=> __('Icon 3','laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'type'	 => 'text'
	));

	

	$wp_customize->add_setting( 'laundry_feature_subheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_subheading_color', array(
		'label' => __('Sub Heading Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_subheading_color',
	)));


	$wp_customize->add_setting( 'laundry_feature_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_heading_color', array(
		'label' => __('Heading Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_heading_color',
	)));

	$wp_customize->add_setting( 'laundry_feature_boxbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_boxbg_color', array(
		'label' => __('Box BG Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_boxbg_color',
	)));

	$wp_customize->add_setting( 'laundry_feature_number_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_number_color', array(
		'label' => __('Number Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_number_color',
	)));

	$wp_customize->add_setting( 'laundry_feature_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_title_color', array(
		'label' => __('Title Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_title_color',
	)));

	$wp_customize->add_setting( 'laundry_feature_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_icon_color', array(
		'label' => __('Icon Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_icon_color',
	)));

	$wp_customize->add_setting( 'laundry_feature_iconcle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_iconcle_color', array(
		'label' => __('Icon BG Circle Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_iconcle_color',
	)));

	$wp_customize->add_setting( 'laundry_feature_bord_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_bord_color', array(
		'label' => __('Border Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_bord_color',
	)));


	$wp_customize->add_setting( 'laundry_feature_description_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_feature_description_color', array(
		'label' => __('Description Color', 'laundry-services'),
		'section' => 'laundry_services_featuresettings',
		'settings' => 'laundry_feature_description_color',
	)));



	// Services Section
	$wp_customize->add_section('laundry_services_services_section',array(
		'title'	=> __('Services Settings','laundry-services'),
		'panel' => 'laundry_services_panel_id',
	));

	$wp_customize->add_setting('laundry_services_btn_servicesubheading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_btn_servicesubheading',array(
		'label'	=> __('Sub Heading','laundry-services'),
		'section' => 'laundry_services_services_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('laundry_services_btn_serviceheading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('laundry_services_btn_serviceheading',array(
		'label'	=> __('Heading','laundry-services'),
		'section' => 'laundry_services_services_section',
		'type'	 => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('laundry_services_service_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'laundry_services_sanitize_choices',
	));
	$wp_customize->add_control('laundry_services_service_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category To Display Post','laundry-services'),
		'section' => 'laundry_services_services_section',
	));


	$wp_customize->add_setting( 'laundry_service_subheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_subheading_color', array(
		'label' => __('Sub Heading Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_subheading_color',
	)));

	$wp_customize->add_setting( 'laundry_service_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_heading_color', array(
		'label' => __('Heading Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_heading_color',
	)));

	$wp_customize->add_setting( 'laundry_service_boxbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_boxbg_color', array(
		'label' => __('Box BG Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_boxbg_color',
	)));

	$wp_customize->add_setting( 'laundry_service_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_title_color', array(
		'label' => __('Title Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_title_color',
	)));

	$wp_customize->add_setting( 'laundry_service_description_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_description_color', array(
		'label' => __('Description Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_description_color',
	)));

	$wp_customize->add_setting( 'laundry_service_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_border_color', array(
		'label' => __('Border Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_border_color',
	)));

	$wp_customize->add_setting( 'laundry_service_btntext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_btntext_color', array(
		'label' => __('Button Text Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_btntext_color',
	)));

	$wp_customize->add_setting( 'laundry_service_btnbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_btnbg_color', array(
		'label' => __('Button BG Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_btnbg_color',
	)));

	$wp_customize->add_setting( 'laundry_service_btnhover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_btnhover_color', array(
		'label' => __('Button Text Hover Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_btnhover_color',
	)));

	$wp_customize->add_setting( 'laundry_service_btnhoverbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_service_btnhoverbg_color', array(
		'label' => __('Button Hover BG Color', 'laundry-services'),
		'section' => 'laundry_services_services_section',
		'settings' => 'laundry_service_btnhoverbg_color',
	)));

	//footer
	$wp_customize->add_section('laundry_services_footer_section',array(
		'title'	=> esc_html__('Footer Text','laundry-services'),
		'panel' => 'laundry_services_panel_id'
	));
		
	$wp_customize->add_setting('laundry_services_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('laundry_services_footer_copy',array(
		'label'	=> esc_html__('Copyright Text','laundry-services'),
		'section'	=> 'laundry_services_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'laundry_footer_copyright_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_footer_copyright_color', array(
		'label' => __('Copyright Text Color', 'laundry-services'),
		'section' => 'laundry_services_footer_section',
		'settings' => 'laundry_footer_copyright_color',
	)));

	$wp_customize->add_setting( 'laundry_footer_copyrightbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_footer_copyrightbg_color', array(
		'label' => __('Copyright BG Color', 'laundry-services'),
		'section' => 'laundry_services_footer_section',
		'settings' => 'laundry_footer_copyrightbg_color',
	)));

	$wp_customize->add_setting( 'laundry_footer_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_footer_text_color', array(
		'label' => __('Text Color', 'laundry-services'),
		'section' => 'laundry_services_footer_section',
		'settings' => 'laundry_footer_text_color',
	)));

	$wp_customize->add_setting( 'laundry_footer_wedget_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_footer_wedget_title_color', array(
		'label' => __('Wedget Title Color', 'laundry-services'),
		'section' => 'laundry_services_footer_section',
		'settings' => 'laundry_footer_wedget_title_color',
	)));

	$wp_customize->add_setting( 'laundry_footer_wedget_menu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_footer_wedget_menu_color', array(
		'label' => __('Wedget Menu Color', 'laundry-services'),
		'section' => 'laundry_services_footer_section',
		'settings' => 'laundry_footer_wedget_menu_color',
	)));

	$wp_customize->add_setting( 'laundry_footer_wedget_menuicon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_footer_wedget_menuicon_color', array(
		'label' => __('Wedget Menu Icon Color', 'laundry-services'),
		'section' => 'laundry_services_footer_section',
		'settings' => 'laundry_footer_wedget_menuicon_color',
	)));

	//Wocommerce Shop Page
	$wp_customize->add_section('laundry_services_woocommerce_shop_page',array(
		'title'	=> __('Woocommerce Shop Page','laundry-services'),
		'panel' => 'laundry_services_panel_id'
	));

	$wp_customize->add_setting( 'laundry_services_products_per_column' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'laundry_services_sanitize_choices',
	) );
	$wp_customize->add_control( 'laundry_services_products_per_column', array(
		'label'    => __( 'Product Per Columns', 'laundry-services' ),
		'description'	=> __('How many products should be shown per Column?','laundry-services'),
		'section'  => 'laundry_services_woocommerce_shop_page',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('laundry_services_products_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'laundry_services_sanitize_float',
	));	
	$wp_customize->add_control('laundry_services_products_per_page',array(
		'label'	=> __('Product Per Page','laundry-services'),
		'description'	=> __('How many products should be shown per page?','laundry-services'),
		'section'	=> 'laundry_services_woocommerce_shop_page',
		'type'		=> 'number'
	));

	

	$wp_customize->add_setting( 'laundry_services_product_btn_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_product_btn_bg_color', array(
		'label' => __('Button Background Color', 'laundry-services'),
		'section' => 'laundry_services_woocommerce_shop_page',
		'settings' => 'laundry_services_product_btn_bg_color',
	)));

	
	$wp_customize->add_setting( 'laundry_services_product_btn_hover_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_product_btn_hover_bg_color', array(
		'label' => __('Button Hover Background Color', 'laundry-services'),
		'section' => 'laundry_services_woocommerce_shop_page',
		'settings' => 'laundry_services_product_btn_hover_bg_color',
	)));

	$wp_customize->add_setting( 'laundry_services_product_sale_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_product_sale_color', array(
		'label' => __('Sale Badge Color', 'laundry-services'),
		'section' => 'laundry_services_woocommerce_shop_page',
		'settings' => 'laundry_services_product_sale_color',
	)));


	// logo site title
	$wp_customize->add_setting('laundry_services_site_title_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'laundry_services_sanitize_checkbox'
    ));
    $wp_customize->add_control('laundry_services_site_title_tagline',array(
       'type' => 'checkbox',
       'label' => __('Display Site Title and Tagline in Header','laundry-services'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting( 'laundry_services_site_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_site_title_color', array(
		'label' => __('Site Title Color', 'laundry-services'),
		'section' => 'title_tagline',
		'settings' => 'laundry_services_site_title_color',
	)));

    $wp_customize->add_setting( 'laundry_services_site_tagline_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'laundry_services_site_tagline_color', array(
		'label' => __('Site Tagline Color', 'laundry-services'),
		'section' => 'title_tagline',
		'settings' => 'laundry_services_site_tagline_color',
	)));
}
add_action( 'customize_register', 'laundry_services_customize_register' );