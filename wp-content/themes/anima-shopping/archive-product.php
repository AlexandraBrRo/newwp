<?php
//get_header();
//$args = array('post_type'=> 'product', 'post_per_page'=>1, );
//$loop = new WP_Query($args);
//if ($loop->have_posts()) {
//	while ($loop->have_posts()) {
//		$loop->the_post();
//
//		the_permalink();
//	}
//	wp_reset_postdata();
//} else {
//	echo 'No products found.';
//}
//
//get_footer();

get_header();
$args = array('post_type'=> 'product', 'posts_per_page'=>1);
$loop = new WP_Query($args);
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
?>
        <div class="wrapper">
            <div class="product-img">
                <div class="img-inside">
                    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>"><?php the_post_thumbnail(array(500, 500)); ?></a>
                </div>
            </div>
            <div class="right-description">
                <?php the_content(); ?>
                <a href="" class="main-button">ADD TO CART</a>
            </div>
        </div>
<?php
    }
    wp_reset_postdata();
} else {
    echo 'No products found.';
}
get_footer();
?>




