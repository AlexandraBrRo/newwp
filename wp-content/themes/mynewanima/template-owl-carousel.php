<?php

/**
 *  *Template name: Owl carousel
 */

get_header();
?>
<?php
wp_enqueue_style('owl-css', CSS_PATH . '/dist/owl.carousel.min.css','1.0.0', true);
wp_enqueue_script('owl-carousel',JS_PATH . '/dist/owl.carousel.min.js', ['jquery'], true);
wp_enqueue_script('product',JS_PATH . '/slider-owl.js', ['jquery'], '1.0.0',true);

//wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/my-custom-script.js', array('jquery'), null, true);

$args = array('post_type'=>'rings');
$loop = new WP_Query($args);
//do_action('my_hook_for_course');

?>
<div class="wrapper">

</div>


<?php
get_footer();
?>


