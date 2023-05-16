<?php
get_header();
?>

<div class="wrapper">
        <div class="filter">
            <?php
            get_template_part('templates/filter' , '', (!empty($args)) ? $args : []);
            ?>
        </div>
        <div class="rings">
			<?php
			while (have_posts()) : the_post();
			?>
            <div class="product">
                <div class="thumbnail-product"><?php the_post_thumbnail();?></div>
				<?php
                the_title();
				the_content();
				?> <a href="<?php the_permalink();?>">link</a><?php
				echo '</div></div>';
				endwhile;
				?>
            </div>
        </div>

	<?php
	$taxonomies = get_taxonomies([
		'object_type' => ['rings']
	]);

	$taxonomyContentFilter = '';
	foreach ($taxonomies as $taxonomy){
		$terms = get_terms(['taxonomy' => $taxonomy]);
		$taxonomyContentFilter .= '<ul><h3>' . $taxonomy . '</h3>';
		foreach ($terms as $term){
			$taxonomyContentFilter .= '<li><a href="'.get_term_link($term->slug, $taxonomy).'">'.$term->name.'</a></li>';
		}
		$taxonomyContentFilter .= '</ul>';
	}
	echo $taxonomyContentFilter;

	?>

</div>




<?php
get_footer();
?>
