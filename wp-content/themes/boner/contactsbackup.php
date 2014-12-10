<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>

<section id="contacts" class="three">
	<div class="contactswrap">

		<article class="col center">

			<h1 class="h small center">INTERNATIONAL SALES</h1>
			<figure>
				<img src="<?php the_field('sales_logo'); ?>">
			</figure>
			<div><?php the_field('sales_contact'); ?></div>

		</article><article class="col center">
			
			<h1 class="h small center">UK sales and international press</h1>
			<figure>
				<img src="<?php the_field('pr_logo'); ?>">
			</figure>
			<div><?php the_field('pr_contact'); ?></div>
			
		</article><article class="col center">
			
			<h1 class="h small center">BRAND CONTACT</h1>
			<figure>
				<img src="<?php the_field('brand_logo'); ?>">
			</figure>
			<div><?php the_field('brand_contact'); ?></div>
			
		</article>

	</div>
</section>

<?php get_footer(); ?>