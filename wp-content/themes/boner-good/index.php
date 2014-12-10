<?php get_header(); ?>

<section id="index">

	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<h2><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></h2>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	
</section>

<?php get_footer(); ?>