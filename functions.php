<?php
/**
 * ikebana functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ikebana
 */

require get_template_directory() . '/tgm-plugin-activation/ikebana-tgm-plugin-activation.php';

if ( ! function_exists( 'ikebana_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ikebana_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ikebana, use a find and replace
	 * to change 'ikebana' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ikebana', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'ikebana' ),
//		'menu-2' => esc_html__( 'secondary', 'ikebana' ),

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
	add_theme_support( 'custom-background', apply_filters( 'ikebana_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'ikebana_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ikebana_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ikebana_content_width', 640 );
}
add_action( 'after_setup_theme', 'ikebana_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ikebana_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ikebana' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ikebana' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ikebana_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ikebana_scripts() {
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'media-query', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_style( 'wow', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'font-slick', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style( 'font-slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
	wp_register_style( 'jquery', 'https://fonts.googleapis.com/css?family=Julius+Sans+One', '', '', false);
	wp_register_style( 'jquery', 'https://fonts.googleapis.com/css?family=Raleway', '', '', false);
	wp_enqueue_style( 'jquery-f', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', array(), '20151215', false);
	wp_enqueue_style( 'jquery' );
	wp_enqueue_style( 'jquery' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
	wp_register_script( 'jquery-fancy', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-fancy' );
	wp_enqueue_script( 'ikebana-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'ikebana-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ikebana-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ikebana-animate', get_template_directory_uri() . '/js/animate.js', array(), '20151215', true );
	wp_enqueue_script( 'ikebana-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ikebana-backontop', get_template_directory_uri() . '/js/backontop.js', array(), '20151215', true );
	wp_enqueue_script( 'ikebana-myslick', get_template_directory_uri() . '/js/my-slick.js', array(), '20151215', true );

	wp_enqueue_script( 'ikebana-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ikebana_scripts' );

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




// add active class menu
function special_nav_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий

//add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );
//function add_search_box( $items, $args ) {
//	$items .= '<li>' . get_search_form( false ) . '</li>';
//	return $items;
//}

function new_excerpt_more($more) {
	global $post;
	return '<a class="more_link" href="'. get_permalink($post->ID) . '"> Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



// register footer sidebar
function ikebana_widget_footer_init(){
	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 4',
		'id' => 'footer-sidebar-4',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action('widgets_init', 'ikebana_widget_footer_init');