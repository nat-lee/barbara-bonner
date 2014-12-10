
<?php get_header(); ?>

<section id="page">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article>
		<div class="text">
			<?php the_content(); ?>
		</div>
	</article>

	<?php endwhile; ?>

</section>

<?php get_footer(); ?>