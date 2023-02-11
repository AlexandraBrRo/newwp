<?php
/**
 * * Template name: Home page
 */
get_header();
?>

<?php
//wp_enqueue_style('owl-css', CSS_PATH . '/dist/owl.carousel.min.css','1.0.0', true);
//wp_enqueue_script('owl-carousel',JS_PATH . '/dist/owl.carousel.min.js', ['jquery'], true);
//wp_enqueue_script('product',JS_PATH . '/slider-owl.js', ['jquery'], '1.0.0',true);
//?>

<?php
$heroSection = get_field('hero_section');
$heroTitle = $heroSection['title'];
$heroImg = $heroSection['title-img'];
$heroImgAdditional = $heroSection['title-img-additional'];
$heroNewArrival = get_field('hero_new_arrivals');
$newArrivalTitle = $heroNewArrival['title_pages'];

?>

<?php
$args = array(
	'theme_location' => 'primary_menu',
	'menu_id' => 'second',
	'container_class' => 'drop_menu',
	'container_aria_label' => 'custom',
//        'container'=> 'div',
);
wp_nav_menu($args);

?>

<?php
$menuBtn = get_field('button-main', 'options');
?>




<main>
	<div class="wrapper">
        <div class="hero-block">
            <div class="hero-title">
                <h1 class="title"><?= $heroTitle ?></h1>
                <div class="title-img-block">
                    <img class="additional-img" src="http://newwp/wp-content/uploads/2023/01/philippe.png">
                    <img class="title-img" src="http://newwp/wp-content/uploads/2023/01/img-2.png">
                </div>
            </div>
            <div class="btn-panel">
                <div class="social-panel">
                    <a href="#"><img src="<?= SVG_PATH ?>/fb.svg"></a>
                    <a href="#"><img src="<?= SVG_PATH ?>/insta.svg"></a>
                    <a href="#"><img src="<?= SVG_PATH ?>/tviter.svg"></a>
                </div>
                <a href="<?= $menuBtn['url'] ?>"target="<?= $menuBtn['target'] ?>">Look colection <img src="<?= SVG_PATH ?>/arrow.svg"></a>
            </div>
        </div>
        <div class="arrivals-block">
            <div class="centered">
                <div class="about-product">
                    <h1 class="title"><?= $newArrivalTitle ?></h1>
	                <?= wp_nav_menu($args)?>
                </div>

            </div>
        </div>








		<?php get_footer();?>
	</div>
</main>