<?php
get_header();
$args = array('post_type'=> 'jewerly', 'post_par_page'=>1, );
$loop = new WP_Query($args);

?>

	<div class="wrapper">
		<?php
		while ($loop->have_posts()) : $loop->the_post();
		?>
		<div class="filter">
			<?php
			get_template_part('templates/filter' , '', (!empty($args)) ? $args : []);
			?>
		</div>
		<div class="">

<!--			--><?php
//			while ($loop->have_posts()) : $loop->the_post();
//			?>

			<div class="product">
				<div class="thumbnail-product"><?php the_post_thumbnail();?></div>
				<?php
				the_title();
				echo '<div class="description">';
				the_content();
				?> <a href="<?php the_permalink();?>">link</a><?php
				echo '</div></div>';
				endwhile;
				?>
			</div>
		</div>
	</div>
<?php
get_footer();
?>