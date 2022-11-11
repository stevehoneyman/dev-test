<?php get_header(); ?>

	<h2>Locations</h2>
	<?php if (have_posts()) :
		while (have_posts() ) : the_post() ; ?>
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<?php endwhile;
	endif; ?>

<?php get_footer(); ?>
