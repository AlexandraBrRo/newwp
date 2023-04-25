<?php
/**
 * *Template name: Slick carousel
 */
get_header();
?>

<?php
wp_enqueue_style('slick-css', CSS_PATH . '/dist/slick.css','1.0.0', true);
wp_enqueue_script('slick-carousel',JS_PATH . '/dist/slick.min.js', ['jquery'], true);
wp_enqueue_script('product',JS_PATH . '/slider-slick.js', ['jquery', 'slick-carousel'], '1.0.0',true);

$args = array('post_type'=>'rings');
$loop = new WP_Query($args);
//do_action('my_hook_for_course');

?>
<div class="wrapper">
    <div class="arrivals-carousel">
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
        <div class="arrivals-carousel">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>

        </div>

    </div>



<?php
get_footer();
?>
