<?php
//get_header();
//$args = array('post_type'=> 'product', 'post_per_page'=>1, );
//$loop = new WP_Query($args);
//
//while ($loop->have_posts()) : $loop->the_post(); ?>
<!---->
<!--    <div class="wrapper">-->
<!--        <div class="product-img">-->
<!--            <div class="img-inside">-->
<!--                --><?php //echo '<a href="' . get_permalink() . '" title="' . esc_attr(get_the_title()) . '">' . get_the_post_thumbnail(get_the_ID(), array(500, 500)) . '</a>'; ?>
<!--            </div>-->
<!--        </div>-->
<!--        <div class="right-description">-->
<!--            --><?php //the_content(); ?>
<!--            <a href="" class="main-button">ADD TO CART</a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<?php //endwhile;
//wp_reset_postdata();
//
//get_footer();
//?>

<?php
get_header();
$args = array('post_type' => 'product', 'post_per_page' => 1);
$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post();
	?>

    <div class="wrapper">
        <div class="product-img">
            <div class="img-inside">
				<?php echo '<a href="' . get_permalink() . '" title="' . esc_attr(get_the_title()) . '">' . get_the_post_thumbnail(get_the_ID(), array(500, 500)) . '</a>'; ?>
            </div>
        </div>
        <div class="right-description">
			<?php the_content(); ?>
            <a href="<?php echo get_permalink(wc_get_page_id('product')); ?>" class="main-button">View all collections</a>
        </div>
    </div>

<?php endwhile;
wp_reset_postdata();

get_footer();
?>


