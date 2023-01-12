<?php
/**
 * * Template name: Home page
 */
get_header();
?>

<?php
$titleText = get_field('title_home_page');
//$heroSection = get_field('hero_section');


?>

<?php
//$args = array(
//	'theme_location' => 'top_menu',
//	'menu_id' => 'second',
//	'container_class' => 'test',
//	'container_aria_label' => 'custom',
////        'container'=> 'div',
//);
//wp_nav_menu($args);
//
//?>

<?php
$menuBtn = get_field('button-main', 'options');

?>

<main>
	<div class="wrapper">
        <div>
            <h1><?= $titleText ?></h1>
        </div>
        <a href="<?= $menuBtn['url'] ?>"target="<?= $menuBtn['target'] ?>">View all arrivals</a>
		<?php get_footer();?>
	</div>
</main>