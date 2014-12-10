<?php
/*
Template Name: Campaigns
*/
?>
<?php get_header(); ?>

<section id="campaigns">
	<div class="campaignwrap">
		<?php if(get_field('campaigns')): ?>
			<?php while(the_repeater_field('campaigns')): ?>
				<img src="<?php the_sub_field('image'); ?>">
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>