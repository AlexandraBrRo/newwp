<?php
/**
 * * Template name: Home page
 */
get_header();
?>

<?php
$heroSection = get_field('hero_section');
$heroTitle = $heroSection['title'];


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
            </div>
            <a href="<?= $menuBtn['url'] ?>"target="<?= $menuBtn['target'] ?>">View all arrivals</a>
        </div>

		<?php get_footer();?>
	</div>
</main>