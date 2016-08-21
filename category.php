<?php get_header(); ?>

	<section id="articles">
		<div class="contentwidth">
			<div id="pagecontent">
				
			<?php if (is_front_page()){ ?>
			<?php } else if (is_category('1')) {?>
				<h1>Recent Stories</h1>
			<?php } else if (is_category()) {?>
				<h1><?php single_cat_title(); ?></h1>
			<?php } else if (is_archive()) { ?>
				<h1>Archive: <?php post_type_archive_title(); ?></h1>
			<?php } else { ?>
				<h1><?php the_title();?></h1>
			<?php } ?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="card">
					<?php // Get thumbnail image
						if ( get_the_post_thumbnail($post_id) != '' ) {
							echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper" style="background-image: url('; the_post_thumbnail(); echo ')"></a>';
						} else {
										
							echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper" style="background-image: url('; echo catch_that_image(); echo ')" alt="" /></a>';
					};
					?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="more">READ MORE</a>
				</article>
			<?php endwhile; ?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
			<?php endif; ?>
			</div><!--end #pagecontent-->
			
			<?php get_sidebar(); ?>
		</div><!--end .contentwidth-->
	</section><!--end #articles-->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>