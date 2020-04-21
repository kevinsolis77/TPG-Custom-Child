<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );


// Fonts

function add_google_fonts() {
	wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,800');
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

// Icons

function add_font_awesome(){
	wp_enqueue_script( 'font_awesome_icons', 'https://kit.fontawesome.com/013f1506c9.js', array(), NULL, true);
};

add_action( 'wp_enqueue_scripts', 'add_font_awesome');

add_filter( 'script_loader_tag', 'my_script_attributes', 10, 3 );

function my_script_attributes( $tag, $handle, $src )
{
    // change to the registered script handle, e. g. 'jquery'
    if ( 'font_awesome_icons' === $handle ) {

        // add attributes of your choice
        $tag = '<script type="text/javascript" SameSite="None" src="' . esc_url( $src ) . '"></script>';
    }

    return $tag;
}

// Required Files

require_once( get_stylesheet_directory() . '/inc/side-menu/walker.php' );
require_once( get_stylesheet_directory() . '/inc/widgets.php' );
require_once( get_stylesheet_directory() . '/inc/cpt.php' );





// Custom Menu Locations

function register_my_menus() {
register_nav_menus(
array(
 'personal-insurance-menu' => __( 'Personal Insurance Menu' ),
 'commercial-insurance-menu' => __( 'Commercial Insurance Menu' ),
 'risk-menu' => __( 'Risk Menu' ),
 'payroll-menu' => __( 'Payroll Menu' ),
 'human-resources-menu' => __( 'Human Resources Menu' )
 )
 );
}
add_action( 'init', 'register_my_menus' );


// Widgit Areas

function register_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer Area One',
    'id'            => 'footer_area_one',
    'description'   => 'First Footer Area',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
	'name'          => 'Footer Area Two',
	'id'            => 'footer_area_two',
	'description'   => 'Second Footer Area',
	'before_widget' => '<section class="footer-area footer-area-two">',
	'after_widget'  => '</section>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
  ));

  register_sidebar( array(
	'name'          => 'Footer Area Three',
	'id'            => 'footer_area_three',
	'description'   => 'Third Footer Area',
	'before_widget' => '<section class="footer-area footer-area-three">',
	'after_widget'  => '</section>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
  ));

  register_sidebar( array(
  'name'          => 'Site Info Social Icons',
  'id'            => 'site_info_social',
  'description'   => 'Bottom Social Icons',
  'before_widget' => '<section class="site-info site-info social">',
  'after_widget'  => '</section>',
  'before_title'  => '<h4>',
  'after_title'   => '</h4>',
  ));

}

add_action( 'widgets_init', 'register_widget_areas' );

// Side Menu

function cssmenumaker_scripts_styles() {
   wp_enqueue_style( 'cssmenu-styles', get_stylesheet_directory_uri() . '/inc/side-menu/styles.css');
}


add_action('wp_enqueue_scripts', 'cssmenumaker_scripts_styles' );
