<?php
include_once 'inc/backend/Defines.php';
include_once 'inc/backend/Assets.php';
include_once 'inc/backend/AssetsConnect.php';
include_once 'inc/backend/acf_configs.php';

/**
 * Add theme support
 */
add_theme_support('automatic-feed-links');

/**
 * Remove unnecessary scripts
 */

//Remove WP Emoji from header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove WP-JSON from header
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Remove wlwmanifest from header
remove_action('wp_head', 'wlwmanifest_link');

// Remove WP version from header
remove_action('wp_head', 'wp_generator');

// Remove Weblog Client Link (RSD) from header
remove_action('wp_head', 'rsd_link');

// Remove feed links from header
remove_action('wp_head', 'feed_links', 2);
remove_action('show_admin_bar', '');


remove_filter
('show_admin_bar', '__return_false', 2);

add_filter('feed_links_show_comments_feed', '__return_false');
add_theme_support('post-thumbnails');

/**
 * Disable auto updates
 */
add_filter('automatic_updater_disabled', '__return_true');

//Svg support
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

function styles() {
    wp_enqueue_style( 'main-styles', CSS_PATH . '/styles.css' );

}
add_action( 'wp_enqueue_scripts', 'styles' );


function add_post_type_jewerly() {
	register_post_type('rings', array(
		'labels'=>array(
			'name' => __('Каблучка'),
			'singular_name' => __('Каблучка'),
			'add_new' => __('Додати каблучку'),
			'edit_item' => __('Редагувати каблучку')
		),
		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-awards',
		'menu_position' => 5,
		'supports' => array(
			'title', 'thumbnail', 'editor', 'custom-fields'
		)
	));

	register_taxonomy(
		'material',
		'rings',
		array(
			'label' => __('метал'),
			'rewrite' => array('slug' => 'metall'),
			'hierarchical' => true,
		)
	);
	register_taxonomy(
		'size',
		'rings',
		array(
			'label' => __('Розмір'),
			'hierarchical' => true,
		)
	);
	register_taxonomy(
		'stone',
		'rings',
		array(
			'label' => __('камінь'),
			'hierarchical' => true,

		)
	);
}
add_action('init','add_post_type_jewerly');

function my_first_menu(){
	register_nav_menus(array(
			'primary_menu' => __('Верхнє меню'),
			'bottom_menu' => __('Нижнє меню'),
			'some_menu'=>__('Середнє'),
	));
}
add_action('after_setup_theme', 'my_first_menu');

// include custom jQuery
function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');



function true_jquery_register() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'init', 'true_jquery_register' );

function someMyFunc(){
	echo 'here is my hook';
}

add_action('my_hook_for_course', 'someMyFunc');



/**
 * Twenty Seventeen child theme class.
 *
 * DPT = D[ynamic] P[age] T[emplates].
 */
class DPT_anima_shopping {
	/**
	 * Register hooks.
	 */
	public function init() {
		// ...
	}
}
$ts_child_theme = new DPT_anima_shopping();
$ts_child_theme->init();

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_assets' );
function child_theme_enqueue_assets() {
	$child_theme_assets = get_stylesheet_directory_uri() . '/assets';

	// Підключення стилів
	wp_enqueue_style( 'child-theme-styles', $child_theme_assets . '/css/styles.css', array(), '1.0.0' );

	// Підключення скриптів
	wp_enqueue_script( 'child-theme-scripts', $child_theme_assets . '/js/scripts.js', array(), '1.0.0', true );
}


function enqueue_child_styles() {
	wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_styles' );

// Завантаження стилів дочірньої теми
function enqueue_child_theme_styles() {
	// Підключення стилів дочірньої теми
	wp_enqueue_style( 'child-theme-style', get_stylesheet_uri(), array( 'parent-theme-style' ), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', 99 );

function my_custom_function() {
	global $assets_path;

	$assets_path = get_stylesheet_directory_uri() . '/assets';

	// Підключення CSS файлу
	wp_enqueue_style('my-style', $assets_path . '/css/style.css');

	// Підключення JS файлу
	wp_enqueue_script('my-script', $assets_path . '/js/script.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'my_custom_function');

require_once (trailingslashit(get_template_directory()) . '/inc/custom-addition/class-customize.php');

$des = get_field('description');
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 100);

function woo_remove_product_tabs($tabs){
	$tabs['delivery_information']['title'] = __('Доставка новою поштою');
	$tabs['delivery_information']['callback'] = 'woo_custom_description_tab_content';

	return $tabs;
}


function woo_custom_description_tab_content(){
	echo '<h2>Custom Description</h2>';
	echo '<p>'. get_field('description') .'</p>';
}

function enqueue_owl_carousel_assets() {
	// Підключення стилів Owl Carousel
	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css');

	// Підключення скриптів Owl Carousel
	wp_enqueue_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_owl_carousel_assets');



acf_add_options_page('Header');
acf_add_options_page('Insta');
acf_add_options_page('Footer');


