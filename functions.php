<?php
/**
 * PhotoTheme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PhotoTheme
 */

if ( ! function_exists( 'phototheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function phototheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on PhotoTheme, use a find and replace
	 * to change 'phototheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'phototheme', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'phototheme' ),
		'header_menu' => esc_html__( 'Menu', 'phototheme' )
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
	add_theme_support( 'custom-background', apply_filters( 'phototheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif;
add_action( 'after_setup_theme', 'phototheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function phototheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'phototheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'phototheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function phototheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'phototheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'phototheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'phototheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function phototheme_scripts() {
	wp_enqueue_style( 'phototheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'phototheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'phototheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	wp_enqueue_style( 'phototheme-fonts', get_template_directory_uri().'/fonts/fonts.css' );
	wp_enqueue_style( 'phototheme-fancybox', get_template_directory_uri().'/fancybox/jquery.fancybox.css' );

	wp_enqueue_script('phototheme-jqueryNEW', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), false, true);
	wp_enqueue_script( 'phototheme-fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox.pack.js', array(), false, true );
	wp_enqueue_script( 'phototheme-check_ajax', get_template_directory_uri() . '/js/check_ajax.js', array(), false, true );
	wp_enqueue_script( 'phototheme-maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.js', array(), false, true );
	wp_enqueue_script( 'phototheme-form', get_template_directory_uri() . '/js/jquery.form.js', array(), false, true );
	wp_enqueue_script( 'phototheme-validate', get_template_directory_uri() . '/js/jquery.validate.js', array(), false, true );
	wp_enqueue_script( 'phototheme-main', get_template_directory_uri() . '/js/main.js', array(), false, true );

	wp_enqueue_script( 'phototheme-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array(), false, true );
	wp_enqueue_script( 'phototheme-scr', get_template_directory_uri() . '/js/script.js', array(), false, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'phototheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_action( 'init', 'create_post_type1' );
function create_post_type1() { // создаем новый тип записи
register_post_type( 'gallery1', // указываем названия типа
	array( 
		'label' => 'Gallery 1',
		'public' => true, 
		'menu_icon' => '',
'menu_position' => 5, // указываем место в левой баковой панели
'rewrite' => array('slug' => 'gallery'), // указываем slug для ссылок например: mysite/reviews/
'supports' => array('title','editor','thumbnail','excerpt','trackbacks','custom-fields','comments','author','page-attributes','revisions') 
// тут мы активируем поддержку миниатюр 
) 
	); 
} 

add_action( 'init', 'create_post_type2' );
function create_post_type2() { // создаем новый тип записи
register_post_type( 'gallery2', // указываем названия типа
	array( 
		'label' => 'Gallery 2',
		'public' => true, 
		'menu_icon' => '',
'menu_position' => 5, // указываем место в левой баковой панели
'rewrite' => array('slug' => 'gallery'), // указываем slug для ссылок например: mysite/reviews/
'supports' => array('title','editor','thumbnail','excerpt','trackbacks','custom-fields','comments','author','page-attributes','revisions') 
// тут мы активируем поддержку миниатюр 
) 
	); 
} 



add_action( 'init', 'create_post_type3' );
function create_post_type3() { // создаем новый тип записи
register_post_type( 'gallery3', // указываем названия типа
	array( 
		'label' => 'Gallery 3',
		'public' => true, 
		'menu_icon' => '',
'menu_position' => 5, // указываем место в левой баковой панели
'rewrite' => array('slug' => 'gallery'), // указываем slug для ссылок например: mysite/reviews/
'supports' => array('title','editor','thumbnail','excerpt','trackbacks','custom-fields','comments','author','page-attributes','revisions') 
// тут мы активируем поддержку миниатюр 
) 
	); 
} 

add_action( 'init', 'create_post_type4' );
function create_post_type4() { // создаем новый тип записи
register_post_type( 'comment', // указываем названия типа
	array( 
		'label' => 'Отзывы',
		'public' => true, 
		'menu_icon' => '',
'menu_position' => 5, // указываем место в левой баковой панели
'rewrite' => array('slug' => 'comment'), // указываем slug для ссылок например: mysite/reviews/
'supports' => array('title','editor','thumbnail','excerpt','trackbacks','custom-fields','comments','author','page-attributes','revisions') 
// тут мы активируем поддержку миниатюр 
) 
	); 
} 



add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
	return 'class="btn"';
}