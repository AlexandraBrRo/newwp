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
    <div class="owl-carousel owl-theme">
	<?php
	while ($loop->have_posts()) : $loop->the_post();
	?>
        <div class="product item">
            <div class="thumbnail-product"><?php the_post_thumbnail('50px');?></div>
	        <?php
	        the_title();
            echo '<div class="description">';
            the_content();
	        ?> <a href="<?php the_permalink();?>">link</a><?php
	        echo '</div></div>';
	        endwhile;
	        ?>
        </div>
    </div>

    <div class="owl-carousel owl-theme">
        <div class="item"><h4>1</h4></div>
        <div class="item"><h4>2</h4></div>
        <div class="item"><h4>3</h4></div>
        <div class="item"><h4>4</h4></div>

    </div>
</div>


<?php
get_footer();
?>


