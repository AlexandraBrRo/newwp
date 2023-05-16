<?php 
/*
  Plugin Name: Testerwp Ecommerce Companion
  Description: Testerwp Ecommerce Companion is the plugin which enhence the theme functionality. You can add theme sections like Top Slider, Featured Banner, Category Slider, Product Carousel, News & Blog, Features etc.
  Version: 1.4
  Author: wptexture
  Text Domain: testerwp-ecommerce-companion
  Author URI: #
 */

  if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// define constants
define('TESTERWP_CUSTOMIZER_VERSION', '1.4');
define('TESTERWP_CUSTOMIZER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('TESTERWP_CUSTOMIZER_PLUGIN_PATH', plugin_dir_path(__FILE__) );

function testerwp_customizer_text_domain(){
	$theme = wp_get_theme();
	$themeArr=array();
	$themeArr[] = $theme->get( 'TextDomain' );
	$themeArr[] = $theme->get( 'Template' );
	return $themeArr;
}

$theme = testerwp_customizer_text_domain(); 

if(in_array("bizz-ecommerce", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'bizz-ecommerce/demo/import.php' );	
}

if(in_array("shopping-kart-wp", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'shopping-kart-wp/demo/import.php' );	
}

if(in_array("shopping-ecommerce-wp", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'shopping-ecommerce-wp/demo/import.php' );	
}

if(in_array("eshopping-cart", $theme)){
	include_once( plugin_dir_path(__FILE__) . 'eshopping-cart/demo/import.php' );	
}

add_image_size( 'wptexture_category_image',300,300,true);

function testerwp_customizer_load_plugin() {

	$theme = testerwp_customizer_text_domain();

	if(in_array("bizz-ecommerce", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'bizz-ecommerce/include.php' );
	}
	if(in_array("shopping-kart-wp", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'shopping-kart-wp/include.php' );
	}
	if(in_array("shopping-ecommerce-wp", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'shopping-ecommerce-wp/include.php' );
	}
	if(in_array("eshopping-cart", $theme)){
		include_once( plugin_dir_path(__FILE__) . 'eshopping-cart/include.php' );
	}
}
add_action('after_setup_theme', 'testerwp_customizer_load_plugin');

?>