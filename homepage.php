<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>
	
	<div id="pagecontent">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_title();?>
		<?php the_content();?>
	<?php endwhile; ?>
	</div><!--end #pagecontent-->
<?php get_footer();?>