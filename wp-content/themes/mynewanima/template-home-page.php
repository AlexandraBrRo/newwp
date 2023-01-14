<?php
/**
 * * Template name: Home page
 */
get_header();
?>

<?php
$heroSection = get_field('hero_section');



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

        <a href="<?= $menuBtn['url'] ?>"target="<?= $menuBtn['target'] ?>">View all arrivals</a>
		<?php get_footer();?>
	</div>
</main>