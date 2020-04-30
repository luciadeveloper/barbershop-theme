<?php
/**
 * barbershop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package barbershop
 */

if ( ! function_exists( 'barbershop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function barbershop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on barbershop, use a find and replace
		 * to change 'barbershop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'barbershop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'barbershop' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'barbershop_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
		add_image_size( 'slider', 400, 400, array( 'center', 'center' ) );
	//	add_image_size( 'hero-image', 1280, 600, array( 'center', 'center' ) );
	}
endif;
add_action( 'after_setup_theme', 'barbershop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function barbershop_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'barbershop_content_width', 640 );
}
add_action( 'after_setup_theme', 'barbershop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function barbershop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'barbershop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'barbershop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	/*register_sidebar( array(
		'name'          => esc_html__( 'Footer  column1', 'barbershop' ),
		'id'            => 'footer-column-1',
		'description'   => esc_html__( 'Add widgets here.', 'barbershop' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer  column2', 'barbershop' ),
		'id'            => 'footer-column-2',
		'description'   => esc_html__( 'Add widgets here.', 'barbershop' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer  column3', 'barbershop' ),
		'id'            => 'footer-column-3',
		'description'   => esc_html__( 'Add widgets here.', 'barbershop' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer  column4', 'barbershop' ),
		'id'            => 'footer-column-4',
		'description'   => esc_html__( 'Add widgets here.', 'barbershop' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer  column5', 'barbershop' ),
		'id'            => 'footer-column-5',
		'description'   => esc_html__( 'Add widgets here.', 'barbershop' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'barbershop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function barbershop_scripts() {
	wp_enqueue_style( 'barbershop-style', get_stylesheet_uri() );

	wp_enqueue_script( 'barbershop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'barbershop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_front_page()) {
		wp_enqueue_style( 'owlcarouselcss', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '20151215', true );
		
		wp_enqueue_style( 'owlcarouselcssdefault', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '20151215', true );
		
		wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );
		wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array(), '20151215', true );	
	}
	
}
add_action( 'wp_enqueue_scripts', 'barbershop_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/* custom post type barber */

add_action( 'init', 'create_post_type_barber' );

function create_post_type_barber() {
	register_post_type( 'barbers',
		array(
			'labels' => array(
				'name' => __( 'Barbers' ),
				'singular_name' => __( 'Barber' ),
				'add_new' => __( 'New barber' ),
				'add_new_item' => __( 'Add barber', 'barbershop' ),
				'edit_item' => 'Edit barber',
				'new_item' => 'New barber',

				),
			'public' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-admin-users',
			'supports' => array(
				'title',
				'editor',
				//'excerpt',
				'thumbnail',
				//'author',
				//'trackbacks',
				//'custom-fields',
				//'revisions',
				//'page-attributes', 
				//'post-formats',
			),
			)
		);
		

	add_post_type_support( 'barbers', 'thumbnail' );    
		
}


/* Add SVG */

function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


// show descriptions on WooCommerce prodcuts 

function ld_show_description() {
    the_excerpt();
}
add_action( 'woocommerce_shop_loop_item_title', 'ld_show_description', 40 );


// change default text in WooCommerce products button

add_filter('woocommerce_product_add_to_cart_text', 'ld_custom_cart_button_text');

function ld_custom_cart_button_text() {
	return __('Reserve', 'woocommerce');
}


// change default image size in WooCommerce products 

add_theme_support( 'woocommerce', array(
	'thumbnail_image_width' => 232,
	'thumbnail_image_height' => 160,
) );

/*
function wp_get_attachment_metadata_mine($data) {
 
      $res = $data;
      if (!isset($data['width']) || !isset($data['height'])) {
          $res = false;
      }  
      return $res;                                                                                                                                                            
  }
  
  */