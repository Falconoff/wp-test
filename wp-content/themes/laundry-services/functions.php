<?php
/**
 * Laundry Services functions and definitions
 * @package Laundry Services
 */

/* Theme Setup */
if ( ! function_exists( 'laundry_services_setup' ) ) :

function laundry_services_setup() {

	$GLOBALS['content_width'] = apply_filters( 'laundry_services_content_width', 640 );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	add_image_size('laundry-services-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'laundry-services' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support(
		'post-formats', array(
			'image',
			'video',
			'gallery',
			'audio',
		)	
	);

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');

	add_editor_style( array( 'assets/css/editor-style.css', laundry_services_font_url() ) );
	
}
endif; // laundry_services_setup
add_action( 'after_setup_theme', 'laundry_services_setup' );

/* Breadcrumb Begin */
function laundry_services_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			echo "&nbsp;&#187;&nbsp;";
			the_category(', ');
			if (is_single()) {
				echo "&nbsp;&#187;&nbsp;";
				echo " <span> ";
					the_title();
				echo "</span>";
			}
		} elseif (is_page()) {
			echo "&nbsp;&#187;&nbsp;";
			echo " <span>";
				the_title();
			echo "</span> ";
		}
	}
}

/*radio button sanitization*/
function laundry_services_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function laundry_services_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function laundry_services_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function laundry_services_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'laundry_services_loop_columns');
if (!function_exists('laundry_services_loop_columns')) {
	function laundry_services_loop_columns() {
		$columns = get_theme_mod( 'laundry_services_products_per_column', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'laundry_services_shop_per_page', 20 );
function laundry_services_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'laundry_services_products_per_page', 9 );
	return $cols;
}

function laundry_services_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );
  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Excerpt Limit Begin */
function laundry_services_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/* Theme Widgets Setup */
function laundry_services_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'laundry-services' ),
		'description'   => esc_html__( 'Appears on blog page sidebar', 'laundry-services' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Posts and Pages Sidebar', 'laundry-services' ),
		'description'   => esc_html__( 'Appears on posts and pages', 'laundry-services' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 3', 'laundry-services' ),
		'description'   => esc_html__( 'Appears on posts and pages', 'laundry-services' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'laundry-services' ),
		'description'   => esc_html__( 'Appears in footer', 'laundry-services' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'laundry-services' ),
		'description'   => esc_html__( 'Appears in footer', 'laundry-services' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'laundry-services' ),
		'description'   => esc_html__( 'Appears in footer', 'laundry-services' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'laundry-services' ),
		'description'   => esc_html__( 'Appears in footer', 'laundry-services' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'laundry_services_widgets_init' );

/* Theme Font URL */
function laundry_services_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:400,400i,700,700i';
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Kaisei HarunoUmi:wght@400;500;700';
	$font_family[] = 'Yeseva One';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}	

/* Theme enqueue scripts */
function laundry_services_scripts() {
	wp_enqueue_style( 'laundry-services-font', laundry_services_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'laundry-services-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'laundry-services-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_style( 'custom-aniumations', get_template_directory_uri().'/assets/css/animations.css' );

	// Paragraph
    $laundry_services_paragraph_color = get_theme_mod('laundry_services_paragraph_color', '');
    $laundry_services_paragraph_font_family = get_theme_mod('laundry_services_paragraph_font_family', '');
    $laundry_services_paragraph_font_size = get_theme_mod('laundry_services_paragraph_font_size', '');
	// "a" tag
	$laundry_services_atag_color = get_theme_mod('laundry_services_atag_color', '');
    $laundry_services_atag_font_family = get_theme_mod('laundry_services_atag_font_family', '');
	// "li" tag
	$laundry_services_li_color = get_theme_mod('laundry_services_li_color', '');
    $laundry_services_li_font_family = get_theme_mod('laundry_services_li_font_family', '');
	// H1
	$laundry_services_h1_color = get_theme_mod('laundry_services_h1_color', '');
    $laundry_services_h1_font_family = get_theme_mod('laundry_services_h1_font_family', '');
    $laundry_services_h1_font_size = get_theme_mod('laundry_services_h1_font_size', '');
	// H2
	$laundry_services_h2_color = get_theme_mod('laundry_services_h2_color', '');
    $laundry_services_h2_font_family = get_theme_mod('laundry_services_h2_font_family', '');
    $laundry_services_h2_font_size = get_theme_mod('laundry_services_h2_font_size', '');
	// H3
	$laundry_services_h3_color = get_theme_mod('laundry_services_h3_color', '');
    $laundry_services_h3_font_family = get_theme_mod('laundry_services_h3_font_family', '');
    $laundry_services_h3_font_size = get_theme_mod('laundry_services_h3_font_size', '');
	// H4
	$laundry_services_h4_color = get_theme_mod('laundry_services_h4_color', '');
    $laundry_services_h4_font_family = get_theme_mod('laundry_services_h4_font_family', '');
    $laundry_services_h4_font_size = get_theme_mod('laundry_services_h4_font_size', '');
	// H5
	$laundry_services_h5_color = get_theme_mod('laundry_services_h5_color', '');
    $laundry_services_h5_font_family = get_theme_mod('laundry_services_h5_font_family', '');
    $laundry_services_h5_font_size = get_theme_mod('laundry_services_h5_font_size', '');
	// H6
	$laundry_services_h6_color = get_theme_mod('laundry_services_h6_color', '');
    $laundry_services_h6_font_family = get_theme_mod('laundry_services_h6_font_family', '');
    $laundry_services_h6_font_size = get_theme_mod('laundry_services_h6_font_size', '');

	$laundry_services_custom_css ='
		p,span{
		    color:'.esc_html($laundry_services_paragraph_color).'!important;
		    font-family: '.esc_html($laundry_services_paragraph_font_family).';
		    font-size: '.esc_html($laundry_services_paragraph_font_size).'px ;
		}
		a{
		    color:'.esc_html($laundry_services_atag_color).'!important;
		    font-family: '.esc_html($laundry_services_atag_font_family).';
		}
		li{
		    color:'.esc_html($laundry_services_li_color).'!important;
		    font-family: '.esc_html($laundry_services_li_font_family).';
		}
		h1{
		    color:'.esc_html($laundry_services_h1_color).'!important;
		    font-family: '.esc_html($laundry_services_h1_font_family).'!important;
		    font-size: '.esc_html($laundry_services_h1_font_size).'px !important;
		}
		h2{
		    color:'.esc_html($laundry_services_h2_color).'!important;
		    font-family: '.esc_html($laundry_services_h2_font_family).'!important;
		    font-size: '.esc_html($laundry_services_h2_font_size).'px !important;
		}
		h3{
		    color:'.esc_html($laundry_services_h3_color).'!important;
		    font-family: '.esc_html($laundry_services_h3_font_family).'!important;
		    font-size: '.esc_html($laundry_services_h3_font_size).'px !important;
		}
		h4{
		    color:'.esc_html($laundry_services_h4_color).'!important;
		    font-family: '.esc_html($laundry_services_h4_font_family).'!important;
		    font-size: '.esc_html($laundry_services_h4_font_size).'px !important;
		}
		h5{
		    color:'.esc_html($laundry_services_h5_color).'!important;
		    font-family: '.esc_html($laundry_services_h5_font_family).'!important;
		    font-size: '.esc_html($laundry_services_h5_font_size).'px !important;
		}
		h6{
		    color:'.esc_html($laundry_services_h6_color).'!important;
		    font-family: '.esc_html($laundry_services_h6_font_family).'!important;
		    font-size: '.esc_html($laundry_services_h6_font_size).'px !important;
		}

	';
	wp_add_inline_style( 'laundry-services-basic-style',$laundry_services_custom_css );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'laundry-services-custom-jquery', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	require get_parent_theme_file_path( '/lt-inline-style.php' );
	wp_add_inline_style( 'laundry-services-basic-style',$laundry_services_custom_css );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'laundry_services_scripts' );

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/wptt-webfont-loader.php';