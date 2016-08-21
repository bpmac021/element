<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<a title="<?php the_title();?>" href="<?php the_permalink();?>"><?php the_title();?></a>
	<?php endwhile; ?>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
