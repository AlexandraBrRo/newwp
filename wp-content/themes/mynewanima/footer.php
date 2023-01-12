
<?php get_template_part('inc/frontend/footers/global-footer', '', (!empty($args))  ? $args : [] );
$menuBtn = get_field('button-header', 'option');

?>

<footer>

</footer>

<?php wp_footer(); ?>
