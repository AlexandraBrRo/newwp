<?php

/**
 * *Template name: Insta block
 */
get_template_part( 'inc/frontend/instagram/global-insta');

?>
<?php
wp_enqueue_style('slick-css', CSS_PATH . '/dist/slick.css','1.0.0', true);
wp_enqueue_script('slick-carousel',JS_PATH . '/dist/slick.min.js', ['jquery'], true);
wp_enqueue_script('product',JS_PATH . '/slider-slick.js', ['jquery', 'slick-carousel'], '1.0.0',true);

$args = array('post_type'=>'rings');
$loop = new WP_Query($args);
//do_action('my_hook_for_course');

?>

<?php
$heroInstagram = get_field('insta_block', 'options');
$instaTitle = $heroInstagram['insta_title'];
$instaSub = $heroInstagram['insta_subtitle'];
$instLink = $heroInstagram['insta_link'];
?>
<div class="insta-block">
	<div class="centered">
		<div class="insta-title">
			<h1 class="title insta-title"><?= $instaTitle ?></h1>
		</div>
		<div class="link-group">
			<div class="about-link">
				<a><?= $instaSub ?></a>
			</div>
			<div class="insta-link"><a href="<?= $instLink['url'] ?>">anima_jewelry</a></div>
		</div>
		<div class="insta-carousel">
			<div class="slider-wrapper">
				<div class="item item-slider">
					<img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg1.png">
				</div>
				<div class="item item-slider">
					<img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg2.png">
				</div>
				<div class="item item-slider">
					<img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg3.png">
				</div>
				<div class="item item-slider">
					<img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg4.png">
				</div>
				<div class="item item-slider">
					<img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg1.png">
				</div>
				<div class="item item-slider">
					<img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg2.png">
				</div>
			</div>

		</div>
	</div>
</div>


