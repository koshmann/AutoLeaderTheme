<?php
/**
 * autoleader functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autoleader
 */

if ( ! defined( '_autoleader_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_autoleader_VERSION', '1.0.0' );
}

if ( ! function_exists( '_autoleader_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _autoleader_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on autoleader, use a find and replace
		 * to change 'autoleader' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'autoleader', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		//add_theme_support( 'automatic-feed-links' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'autoleader' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'_autoleader_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', '_autoleader_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _autoleader_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_autoleader_content_width', 640 );
}
add_action( 'after_setup_theme', '_autoleader_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _autoleader_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар', 'autoleader' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Добавьте виджеты сюда.', 'autoleader' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_autoleader_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _autoleader_scripts() {
	wp_enqueue_style( 'autoleader-style', get_stylesheet_uri(), array(), _autoleader_VERSION );
	//wp_style_add_data( 'autoleader-style', 'rtl', 'replace' );
	wp_enqueue_script( 'cleave', 'https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js', array(), null, true );


    if( is_page( 'home' ) ){
	    //header
        wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), null, false );
        wp_enqueue_script( 'scroll-to-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js', array(), null, false );
        wp_enqueue_script( 'scrolltrigger-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', array(), null, false );
        wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, false );
        wp_enqueue_script( 'chart-js', 'https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js', array(), null, false );
        
        //footer
        wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js', array(), null, true );
        wp_enqueue_script( 'header-js', get_template_directory_uri() . '/js/header.js', array(), _autoleader_VERSION, true );
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), _autoleader_VERSION, true );
        wp_enqueue_script( 'scrolldisable-enable-js', get_template_directory_uri() . '/js/scrolldisable.js', array(), _autoleader_VERSION, true );
        wp_enqueue_script( 'scrolltriggers', get_template_directory_uri() . '/js/scrolltriggers.js', array(), _autoleader_VERSION, true );
    }

    if( is_archive() || is_home() ){
	    //header
        wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), null, false );
        wp_enqueue_script( 'scrolltrigger-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', array(), null, false );
        
        //footer
        wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js', array(), null, true );
        wp_enqueue_script( 'header-js', get_template_directory_uri() . '/js/header.js', array(), _autoleader_VERSION, true );
        wp_enqueue_script( 'archive-js', get_template_directory_uri() . '/js/archive.js', array(), _autoleader_VERSION, true );
        wp_enqueue_script( 'scrolldisable-enable-js', get_template_directory_uri() . '/js/scrolldisable.js', array(), _autoleader_VERSION, true );
    }

    if( is_single() ){
	    //header
        wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), null, false );
        wp_enqueue_script( 'scrolltrigger-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', array(), null, false );
        
        //footer
        wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js', array(), null, true );
        wp_enqueue_script( 'header-js', get_template_directory_uri() . '/js/header.js', array(), _autoleader_VERSION, true );
        wp_enqueue_script( 'single-post-js', get_template_directory_uri() . '/js/single-post.js', array(), _autoleader_VERSION, true );
        wp_enqueue_script( 'scrolldisable-enable-js', get_template_directory_uri() . '/js/scrolldisable.js', array(), _autoleader_VERSION, true );
    }



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_autoleader_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function my_excerpt_length($length){
    return 12;
}
add_filter('excerpt_length', 'my_excerpt_length');

add_filter('excerpt_more', function($more) {
	return '...';
});

// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}